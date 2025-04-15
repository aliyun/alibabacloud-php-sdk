<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListConnectionsResponseBody\data\connections;

use AlibabaCloud\Dara\Model;

class networkParameters extends Model
{
    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vswitcheId;
    protected $_name = [
        'networkType' => 'NetworkType',
        'securityGroupId' => 'SecurityGroupId',
        'vpcId' => 'VpcId',
        'vswitcheId' => 'VswitcheId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }

        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->vswitcheId) {
            $res['VswitcheId'] = $this->vswitcheId;
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
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }

        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['VswitcheId'])) {
            $model->vswitcheId = $map['VswitcheId'];
        }

        return $model;
    }
}
