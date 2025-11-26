<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class RevokeSecurityGroupEgressRequest extends Model
{
    /**
     * @var string
     */
    public $destCidrIp;

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
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string
     */
    public $sourcePortRange;
    protected $_name = [
        'destCidrIp' => 'DestCidrIp',
        'ipProtocol' => 'IpProtocol',
        'policy' => 'Policy',
        'portRange' => 'PortRange',
        'priority' => 'Priority',
        'securityGroupId' => 'SecurityGroupId',
        'sourcePortRange' => 'SourcePortRange',
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

        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
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

        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        if (isset($map['SourcePortRange'])) {
            $model->sourcePortRange = $map['SourcePortRange'];
        }

        return $model;
    }
}
