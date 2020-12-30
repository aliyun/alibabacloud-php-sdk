<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListSkillGroupsOfUserResponseBody\skillLevels\skillLevel;

use AlibabaCloud\SDK\CCC\V20170705\Models\ListSkillGroupsOfUserResponseBody\skillLevels\skillLevel\skill\outboundPhoneNumbers;
use AlibabaCloud\Tea\Model;

class skill extends Model
{
    /**
     * @var outboundPhoneNumbers
     */
    public $outboundPhoneNumbers;

    /**
     * @var string
     */
    public $routingStrategy;

    /**
     * @var string
     */
    public $skillGroupName;

    /**
     * @var string
     */
    public $skillGroupId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $skillGroupDescription;
    protected $_name = [
        'outboundPhoneNumbers'  => 'OutboundPhoneNumbers',
        'routingStrategy'       => 'RoutingStrategy',
        'skillGroupName'        => 'SkillGroupName',
        'skillGroupId'          => 'SkillGroupId',
        'instanceId'            => 'InstanceId',
        'skillGroupDescription' => 'SkillGroupDescription',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->outboundPhoneNumbers) {
            $res['OutboundPhoneNumbers'] = null !== $this->outboundPhoneNumbers ? $this->outboundPhoneNumbers->toMap() : null;
        }
        if (null !== $this->routingStrategy) {
            $res['RoutingStrategy'] = $this->routingStrategy;
        }
        if (null !== $this->skillGroupName) {
            $res['SkillGroupName'] = $this->skillGroupName;
        }
        if (null !== $this->skillGroupId) {
            $res['SkillGroupId'] = $this->skillGroupId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->skillGroupDescription) {
            $res['SkillGroupDescription'] = $this->skillGroupDescription;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return skill
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OutboundPhoneNumbers'])) {
            $model->outboundPhoneNumbers = outboundPhoneNumbers::fromMap($map['OutboundPhoneNumbers']);
        }
        if (isset($map['RoutingStrategy'])) {
            $model->routingStrategy = $map['RoutingStrategy'];
        }
        if (isset($map['SkillGroupName'])) {
            $model->skillGroupName = $map['SkillGroupName'];
        }
        if (isset($map['SkillGroupId'])) {
            $model->skillGroupId = $map['SkillGroupId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['SkillGroupDescription'])) {
            $model->skillGroupDescription = $map['SkillGroupDescription'];
        }

        return $model;
    }
}
