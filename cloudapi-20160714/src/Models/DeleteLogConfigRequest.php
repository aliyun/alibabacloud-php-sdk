<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DeleteLogConfigRequest extends Model
{
    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $logType;
    protected $_name = [
        'securityToken' => 'SecurityToken',
        'logType'       => 'LogType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->logType) {
            $res['LogType'] = $this->logType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteLogConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['LogType'])) {
            $model->logType = $map['LogType'];
        }

        return $model;
    }
}
