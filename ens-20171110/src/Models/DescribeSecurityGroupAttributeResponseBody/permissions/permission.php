<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSecurityGroupAttributeResponseBody\permissions;

use AlibabaCloud\Tea\Model;

class permission extends Model
{
    /**
     * @description The time at which the security group rule was created. The time is displayed in UTC.
     *
     * @example 2018-12-12T07:28:38Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description.
     *
     * @example testDescription1
     *
     * @var string
     */
    public $description;

    /**
     * @description The range of destination IP addresses for outbound access control.
     *
     * @example 0.0.0.0/0
     *
     * @var string
     */
    public $destCidrIp;

    /**
     * @description The direction in which the security group rule is applied.
     *
     * @example ingress
     *
     * @var string
     */
    public $direction;

    /**
     * @description The transport layer protocol.
     *
     * @example TCP
     *
     * @var string
     */
    public $ipProtocol;

    /**
     * @description The policy.
     *
     * @example Accept
     *
     * @var string
     */
    public $policy;

    /**
     * @description The source port range.
     *
     * @example 80/80
     *
     * @var string
     */
    public $portRange;

    /**
     * @description The priority of the rule.
     *
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @description The range of source IP addresses for inbound access control.
     *
     * @example 0.0.0.0/0
     *
     * @var string
     */
    public $sourceCidrIp;

    /**
     * @description The source port number range for the security group.
     *
     * @example 22/22
     *
     * @var string
     */
    public $sourcePortRange;
    protected $_name = [
        'creationTime'    => 'CreationTime',
        'description'     => 'Description',
        'destCidrIp'      => 'DestCidrIp',
        'direction'       => 'Direction',
        'ipProtocol'      => 'IpProtocol',
        'policy'          => 'Policy',
        'portRange'       => 'PortRange',
        'priority'        => 'Priority',
        'sourceCidrIp'    => 'SourceCidrIp',
        'sourcePortRange' => 'SourcePortRange',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
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
        if (null !== $this->sourceCidrIp) {
            $res['SourceCidrIp'] = $this->sourceCidrIp;
        }
        if (null !== $this->sourcePortRange) {
            $res['SourcePortRange'] = $this->sourcePortRange;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return permission
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
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
        if (isset($map['SourceCidrIp'])) {
            $model->sourceCidrIp = $map['SourceCidrIp'];
        }
        if (isset($map['SourcePortRange'])) {
            $model->sourcePortRange = $map['SourcePortRange'];
        }

        return $model;
    }
}
