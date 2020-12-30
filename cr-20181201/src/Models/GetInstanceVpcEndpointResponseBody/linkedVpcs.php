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
     * @var bool
     */
    public $defaultAccess;

    /**
     * @var string
     */
    public $vswitchId;

    /**
     * @var string
     */
    public $ip;
    protected $_name = [
        'status'        => 'Status',
        'vpcId'         => 'VpcId',
        'defaultAccess' => 'DefaultAccess',
        'vswitchId'     => 'VswitchId',
        'ip'            => 'Ip',
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
        if (null !== $this->defaultAccess) {
            $res['DefaultAccess'] = $this->defaultAccess;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
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
        if (isset($map['DefaultAccess'])) {
            $model->defaultAccess = $map['DefaultAccess'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        return $model;
    }
}
