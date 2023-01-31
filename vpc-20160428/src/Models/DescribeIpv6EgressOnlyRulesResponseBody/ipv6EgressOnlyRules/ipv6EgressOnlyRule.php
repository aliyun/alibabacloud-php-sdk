<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIpv6EgressOnlyRulesResponseBody\ipv6EgressOnlyRules;

use AlibabaCloud\Tea\Model;

class ipv6EgressOnlyRule extends Model
{
    /**
     * @example ruledescription
     *
     * @var string
     */
    public $description;

    /**
     * @example i-123456xxxxxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example Ipv6Address
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example ipv6gwpy-123456xxxxxxxx
     *
     * @var string
     */
    public $ipv6EgressOnlyRuleId;

    /**
     * @example rulename
     *
     * @var string
     */
    public $name;

    /**
     * @example Available
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'description'          => 'Description',
        'instanceId'           => 'InstanceId',
        'instanceType'         => 'InstanceType',
        'ipv6EgressOnlyRuleId' => 'Ipv6EgressOnlyRuleId',
        'name'                 => 'Name',
        'status'               => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->ipv6EgressOnlyRuleId) {
            $res['Ipv6EgressOnlyRuleId'] = $this->ipv6EgressOnlyRuleId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipv6EgressOnlyRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['Ipv6EgressOnlyRuleId'])) {
            $model->ipv6EgressOnlyRuleId = $map['Ipv6EgressOnlyRuleId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
