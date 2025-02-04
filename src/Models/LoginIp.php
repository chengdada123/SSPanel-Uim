<?php

declare(strict_types=1);

namespace App\Models;

/**
 * Ip Model
 */
final class LoginIp extends Model
{
    protected $connection = 'default';
    protected $table = 'login_ip';

    /**
     * 登录用户
     */
    public function user(): ?User
    {
        return User::find($this->userid);
    }

    /**
     * 登录用户
     */
    public function userName(): string
    {
        return $this->user() === null ? '用户不存在' : $this->user()->user_name;
    }

    /**
     * 登录成功与否
     */
    public function type(): string
    {
        return $this->type === 0 ? '成功' : '失败';
    }
}
