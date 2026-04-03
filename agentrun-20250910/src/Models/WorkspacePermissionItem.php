<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class WorkspacePermissionItem extends Model
{
    /**
     * @var AccessDeniedDetail
     */
    public $accessDeniedDetail;

    /**
     * @var string
     */
    public $action;

    /**
     * @var bool
     */
    public $allowed;

    /**
     * @var string
     */
    public $message;
    protected $_name = [
        'accessDeniedDetail' => 'accessDeniedDetail',
        'action' => 'action',
        'allowed' => 'allowed',
        'message' => 'message',
    ];

    public function validate()
    {
        if (null !== $this->accessDeniedDetail) {
            $this->accessDeniedDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessDeniedDetail) {
            $res['accessDeniedDetail'] = null !== $this->accessDeniedDetail ? $this->accessDeniedDetail->toArray($noStream) : $this->accessDeniedDetail;
        }

        if (null !== $this->action) {
            $res['action'] = $this->action;
        }

        if (null !== $this->allowed) {
            $res['allowed'] = $this->allowed;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accessDeniedDetail'])) {
            $model->accessDeniedDetail = AccessDeniedDetail::fromMap($map['accessDeniedDetail']);
        }

        if (isset($map['action'])) {
            $model->action = $map['action'];
        }

        if (isset($map['allowed'])) {
            $model->allowed = $map['allowed'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        return $model;
    }
}
