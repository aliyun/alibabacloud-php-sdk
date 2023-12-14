<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class DeleteExpressSyncRequest extends Model
{
    /**
     * @example sync-0001xv7je357xn8tr***
     *
     * @var string
     */
    public $expressSyncId;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'expressSyncId' => 'ExpressSyncId',
        'securityToken' => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expressSyncId) {
            $res['ExpressSyncId'] = $this->expressSyncId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteExpressSyncRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExpressSyncId'])) {
            $model->expressSyncId = $map['ExpressSyncId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
