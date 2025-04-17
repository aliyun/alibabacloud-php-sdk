<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class SetAuditSecurityIpRequest extends Model
{
    /**
     * @var string
     */
    public $ips;

    /**
     * @var string
     */
    public $operateMode;

    /**
     * @var string
     */
    public $securityGroupName;
    protected $_name = [
        'ips' => 'Ips',
        'operateMode' => 'OperateMode',
        'securityGroupName' => 'SecurityGroupName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ips) {
            $res['Ips'] = $this->ips;
        }

        if (null !== $this->operateMode) {
            $res['OperateMode'] = $this->operateMode;
        }

        if (null !== $this->securityGroupName) {
            $res['SecurityGroupName'] = $this->securityGroupName;
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
        if (isset($map['Ips'])) {
            $model->ips = $map['Ips'];
        }

        if (isset($map['OperateMode'])) {
            $model->operateMode = $map['OperateMode'];
        }

        if (isset($map['SecurityGroupName'])) {
            $model->securityGroupName = $map['SecurityGroupName'];
        }

        return $model;
    }
}
