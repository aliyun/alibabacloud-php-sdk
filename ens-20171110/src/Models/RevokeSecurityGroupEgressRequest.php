<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class RevokeSecurityGroupEgressRequest extends Model
{
    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $ipProtocol;

    /**
     * @var string
     */
    public $portRange;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string
     */
    public $policy;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $destCidrIp;

    /**
     * @var string
     */
    public $sourcePortRange;
    protected $_name = [
        'version'         => 'Version',
        'ipProtocol'      => 'IpProtocol',
        'portRange'       => 'PortRange',
        'securityGroupId' => 'SecurityGroupId',
        'policy'          => 'Policy',
        'priority'        => 'Priority',
        'destCidrIp'      => 'DestCidrIp',
        'sourcePortRange' => 'SourcePortRange',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->ipProtocol) {
            $res['IpProtocol'] = $this->ipProtocol;
        }
        if (null !== $this->portRange) {
            $res['PortRange'] = $this->portRange;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->destCidrIp) {
            $res['DestCidrIp'] = $this->destCidrIp;
        }
        if (null !== $this->sourcePortRange) {
            $res['SourcePortRange'] = $this->sourcePortRange;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RevokeSecurityGroupEgressRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['IpProtocol'])) {
            $model->ipProtocol = $map['IpProtocol'];
        }
        if (isset($map['PortRange'])) {
            $model->portRange = $map['PortRange'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['DestCidrIp'])) {
            $model->destCidrIp = $map['DestCidrIp'];
        }
        if (isset($map['SourcePortRange'])) {
            $model->sourcePortRange = $map['SourcePortRange'];
        }

        return $model;
    }
}
