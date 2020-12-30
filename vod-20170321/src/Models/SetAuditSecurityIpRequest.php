<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class SetAuditSecurityIpRequest extends Model
{
    /**
     * @var string
     */
    public $securityGroupName;

    /**
     * @var string
     */
    public $ips;

    /**
     * @var string
     */
    public $operateMode;
    protected $_name = [
        'securityGroupName' => 'SecurityGroupName',
        'ips'               => 'Ips',
        'operateMode'       => 'OperateMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityGroupName) {
            $res['SecurityGroupName'] = $this->securityGroupName;
        }
        if (null !== $this->ips) {
            $res['Ips'] = $this->ips;
        }
        if (null !== $this->operateMode) {
            $res['OperateMode'] = $this->operateMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetAuditSecurityIpRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityGroupName'])) {
            $model->securityGroupName = $map['SecurityGroupName'];
        }
        if (isset($map['Ips'])) {
            $model->ips = $map['Ips'];
        }
        if (isset($map['OperateMode'])) {
            $model->operateMode = $map['OperateMode'];
        }

        return $model;
    }
}
