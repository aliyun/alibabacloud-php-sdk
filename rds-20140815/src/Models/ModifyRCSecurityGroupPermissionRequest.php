<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class ModifyRCSecurityGroupPermissionRequest extends Model
{
    /**
     * @var string
     */
    public $destCidrIp;
    /**
     * @var string
     */
    public $direction;
    /**
     * @var string
     */
    public $ipProtocol;
    /**
     * @var string
     */
    public $policy;
    /**
     * @var string
     */
    public $portRange;
    /**
     * @var string
     */
    public $priority;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $securityGroupId;
    /**
     * @var string
     */
    public $securityGroupRuleId;
    /**
     * @var string
     */
    public $sourceCidrIp;
    /**
     * @var string
     */
    public $sourcePortRange;
    protected $_name = [
        'destCidrIp'          => 'DestCidrIp',
        'direction'           => 'Direction',
        'ipProtocol'          => 'IpProtocol',
        'policy'              => 'Policy',
        'portRange'           => 'PortRange',
        'priority'            => 'Priority',
        'regionId'            => 'RegionId',
        'securityGroupId'     => 'SecurityGroupId',
        'securityGroupRuleId' => 'SecurityGroupRuleId',
        'sourceCidrIp'        => 'SourceCidrIp',
        'sourcePortRange'     => 'SourcePortRange',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->destCidrIp) {
            $res['DestCidrIp'] = $this->destCidrIp;
        }

        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }

        if (null !== $this->ipProtocol) {
            $res['IpProtocol'] = $this->ipProtocol;
        }

        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }

        if (null !== $this->portRange) {
            $res['PortRange'] = $this->portRange;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }

        if (null !== $this->securityGroupRuleId) {
            $res['SecurityGroupRuleId'] = $this->securityGroupRuleId;
        }

        if (null !== $this->sourceCidrIp) {
            $res['SourceCidrIp'] = $this->sourceCidrIp;
        }

        if (null !== $this->sourcePortRange) {
            $res['SourcePortRange'] = $this->sourcePortRange;
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
        if (isset($map['DestCidrIp'])) {
            $model->destCidrIp = $map['DestCidrIp'];
        }

        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }

        if (isset($map['IpProtocol'])) {
            $model->ipProtocol = $map['IpProtocol'];
        }

        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }

        if (isset($map['PortRange'])) {
            $model->portRange = $map['PortRange'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        if (isset($map['SecurityGroupRuleId'])) {
            $model->securityGroupRuleId = $map['SecurityGroupRuleId'];
        }

        if (isset($map['SourceCidrIp'])) {
            $model->sourceCidrIp = $map['SourceCidrIp'];
        }

        if (isset($map['SourcePortRange'])) {
            $model->sourcePortRange = $map['SourcePortRange'];
        }

        return $model;
    }
}
