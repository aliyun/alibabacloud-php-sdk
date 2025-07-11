<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class ListTagValuesRequest extends Model
{
    /**
     * @description The ID of the WAF instance.
     *
     * >  Obtain the ID of the WAF instance by calling the [DescribeInstance](https://help.aliyun.com/document_detail/433756.html) operation.
     *
     * This parameter is required.
     *
     * @example waf_v2_public_cn-lbj****x10g
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The tag key.
     *
     * This parameter is required.
     *
     * @example demoKey
     *
     * @var string
     */
    public $key;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results.
     *
     * @example caeba0bbb2be03f84eb48b699f0*****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The region of the WAF instance. Valid values:
     *
     *   **cn-hangzhou**: Chinese mainland.
     *   **ap-southeast-1**: Outside the Chinese mainland.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the Alibaba Cloud resource group.
     *
     * @example rg-aekzwwk****cv5i
     *
     * @var string
     */
    public $resourceManagerResourceGroupId;

    /**
     * @description The type of the resource. Set the value to ALIYUN::WAF::DEFENSERESOURCE.
     *
     * This parameter is required.
     *
     * @example ALIYUN::WAF::DEFENSERESOURCE
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'key' => 'Key',
        'nextToken' => 'NextToken',
        'regionId' => 'RegionId',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'resourceType' => 'ResourceType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceManagerResourceGroupId) {
            $res['ResourceManagerResourceGroupId'] = $this->resourceManagerResourceGroupId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTagValuesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceManagerResourceGroupId'])) {
            $model->resourceManagerResourceGroupId = $map['ResourceManagerResourceGroupId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
