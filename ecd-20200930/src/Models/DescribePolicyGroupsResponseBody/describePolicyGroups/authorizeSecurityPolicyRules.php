<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePolicyGroupsResponseBody\describePolicyGroups;

use AlibabaCloud\Tea\Model;

class authorizeSecurityPolicyRules extends Model
{
    /**
     * @example 47.100.XX.XX/16
     *
     * @var string
     */
    public $cidrIp;

    /**
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @example tcp
     *
     * @var string
     */
    public $ipProtocol;

    /**
     * @example accept
     *
     * @var string
     */
    public $policy;

    /**
     * @example 22/22
     *
     * @var string
     */
    public $portRange;

    /**
     * @example 1
     *
     * @var string
     */
    public $priority;

    /**
     * @example inflow
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'cidrIp'      => 'CidrIp',
        'description' => 'Description',
        'ipProtocol'  => 'IpProtocol',
        'policy'      => 'Policy',
        'portRange'   => 'PortRange',
        'priority'    => 'Priority',
        'type'        => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cidrIp) {
            $res['CidrIp'] = $this->cidrIp;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return authorizeSecurityPolicyRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CidrIp'])) {
            $model->cidrIp = $map['CidrIp'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
