<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\runOptions;

use AlibabaCloud\Tea\Model;

class deadLetterQueue extends Model
{
    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the dead-letter queue.
     *
     * @example acs:ram::1317334647812936:role/rdstoecsassumekms
     *
     * @var string
     */
    public $arn;

    /**
     * @description The network type of the dead-letter queue. Valid values:
     *
     *   PrivateNetwork
     *   PublicNetwork
     *
     * @example PrivateNetwork
     *
     * @var string
     */
    public $network;

    /**
     * @description The ID of the security group.
     *
     * @example sg-2vcgdxz7o1n9zapp****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The vSwitch ID.
     *
     * @example vsw-m5ev8asdc6h12345****
     *
     * @var string
     */
    public $vSwitchIds;

    /**
     * @description The VPC ID.
     *
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
