<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\GetInstanceVpcEndpointResponseBody;

use AlibabaCloud\Tea\Model;

class linkedVpcs extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var bool
     */
    public $defaultAccess;

    /**
     * @var string
     */
    public $vswitchId;
    protected $_name = [
        'status'        => 'Status',
        'vpcId'         => 'VpcId',
        'ip'            => 'Ip',
        'defaultAccess' => 'DefaultAccess',
        'vswitchId'     => 'VswitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->defaultAccess) {
            $res['DefaultAccess'] = $this->defaultAccess;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return linkedVpcs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['DefaultAccess'])) {
            $model->defaultAccess = $map['DefaultAccess'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }

        return $model;
    }
}
