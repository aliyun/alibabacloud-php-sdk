<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class ModifyMemberAccountRequest extends Model
{
    /**
     * @description The description of the member. The description must be 1 to 256 characters in length, and can contain letters, digits, periods (.), underscores (_), hyphens (-), and asterisks (\\*).
     *
     * This parameter is required.
     * @example account1
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the WAF instance.
     *
     * This parameter is required.
     * @example waf_elasticity**-*******021
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The Alibaba Cloud account ID of the managed member.
     *
     * This parameter is required.
     * @example 131**********39
     *
     * @var string
     */
    public $memberAccountId;

    /**
     * @description The region in which the Web Application Firewall (WAF) instance is deployed. Valid values:
     *
     *   **cn-hangzhou**: Chinese mainland.
     *   **ap-southeast-1**: outside the Chinese mainland.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the Alibaba Cloud resource group.
     *
     * @example rg-acfm***q
     *
     * @var string
     */
    public $resourceManagerResourceGroupId;

    /**
     * @description The source IP address of the request. The system automatically obtains the value of this parameter.
     *
     * @example 0.0.XX.XX
     *
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'description'                    => 'Description',
        'instanceId'                     => 'InstanceId',
        'memberAccountId'                => 'MemberAccountId',
        'regionId'                       => 'RegionId',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'sourceIp'                       => 'SourceIp',
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
        if (null !== $this->memberAccountId) {
            $res['MemberAccountId'] = $this->memberAccountId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceManagerResourceGroupId) {
            $res['ResourceManagerResourceGroupId'] = $this->resourceManagerResourceGroupId;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyMemberAccountRequest
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
        if (isset($map['MemberAccountId'])) {
            $model->memberAccountId = $map['MemberAccountId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceManagerResourceGroupId'])) {
            $model->resourceManagerResourceGroupId = $map['ResourceManagerResourceGroupId'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
