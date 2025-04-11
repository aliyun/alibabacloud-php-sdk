<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;

class DescribeLogConfigRequest extends Model
{
    /**
     * @var string
     */
    public $logType;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'logType' => 'LogType',
        'securityToken' => 'SecurityToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logType) {
            $res['LogType'] = $this->logType;
        }

        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
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
        if (isset($map['LogType'])) {
            $model->logType = $map['LogType'];
        }

        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
