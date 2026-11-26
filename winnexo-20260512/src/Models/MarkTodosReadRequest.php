<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class MarkTodosReadRequest extends Model
{
    /**
     * @var string
     */
    public $appToken;

    /**
     * @var bool
     */
    public $markAllRead;

    /**
     * @var string
     */
    public $opsUserCode;

    /**
     * @var string
     */
    public $opsUserId;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string[]
     */
    public $todoIds;
    protected $_name = [
        'appToken' => 'appToken',
        'markAllRead' => 'markAllRead',
        'opsUserCode' => 'opsUserCode',
        'opsUserId' => 'opsUserId',
        'tenantId' => 'tenantId',
        'todoIds' => 'todoIds',
    ];

    public function validate()
    {
        if (\is_array($this->todoIds)) {
            Model::validateArray($this->todoIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appToken) {
            $res['appToken'] = $this->appToken;
        }

        if (null !== $this->markAllRead) {
            $res['markAllRead'] = $this->markAllRead;
        }

        if (null !== $this->opsUserCode) {
            $res['opsUserCode'] = $this->opsUserCode;
        }

        if (null !== $this->opsUserId) {
            $res['opsUserId'] = $this->opsUserId;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        if (null !== $this->todoIds) {
            if (\is_array($this->todoIds)) {
                $res['todoIds'] = [];
                $n1 = 0;
                foreach ($this->todoIds as $item1) {
                    $res['todoIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['appToken'])) {
            $model->appToken = $map['appToken'];
        }

        if (isset($map['markAllRead'])) {
            $model->markAllRead = $map['markAllRead'];
        }

        if (isset($map['opsUserCode'])) {
            $model->opsUserCode = $map['opsUserCode'];
        }

        if (isset($map['opsUserId'])) {
            $model->opsUserId = $map['opsUserId'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        if (isset($map['todoIds'])) {
            if (!empty($map['todoIds'])) {
                $model->todoIds = [];
                $n1 = 0;
                foreach ($map['todoIds'] as $item1) {
                    $model->todoIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
