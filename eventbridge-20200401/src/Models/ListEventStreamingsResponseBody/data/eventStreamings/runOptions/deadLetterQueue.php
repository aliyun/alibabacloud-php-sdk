<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\runOptions;

use AlibabaCloud\Tea\Model;

class deadLetterQueue extends Model
{
    /**
     * @description The ARN of the dead-letter queue.
     *
     * @example acs:ram::1597871211794192:role/aliyunsaedefaultrole
     *
     * @var string
     */
    public $arn;

    /**
     * @example PrivateNetwork
     *
     * @var string
     */
    public $network;

    /**
     * @example sg-2vcgdxz7o1n9zapp****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @example vsw-m5ev8asdc6h12345****
     *
     * @var string
     */
    public $vSwitchIds;

    /**
     * @example vpc-2zehizpoendb3****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'arn' => 'Arn',
        'network' => 'Network',
        'securityGroupId' => 'SecurityGroupId',
        'vSwitchIds' => 'VSwitchIds',
        'vpcId' => 'VpcId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
        }
        if (null !== $this->network) {
            $res['Network'] = $this->network;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = $this->vSwitchIds;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deadLetterQueue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
        }
        if (isset($map['Network'])) {
            $model->network = $map['Network'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['VSwitchIds'])) {
            $model->vSwitchIds = $map['VSwitchIds'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
