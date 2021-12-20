<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePolicyGroupsResponse\describePolicyGroups;

use AlibabaCloud\Tea\Model;

class authorizeSecurityPolicyRules extends Model
{
    /**
     * @var string
     */
    public $cidrIp;

    /**
     * @var string
     */
    public $description;

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
        Model::validateRequired('cidrIp', $this->cidrIp, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('ipProtocol', $this->ipProtocol, true);
        Model::validateRequired('policy', $this->policy, true);
        Model::validateRequired('portRange', $this->portRange, true);
        Model::validateRequired('priority', $this->priority, true);
        Model::validateRequired('type', $this->type, true);
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
