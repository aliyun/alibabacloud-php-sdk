<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class ListTagKeysRequest extends Model
{
    /**
     * @description The ID of the WAF instance.
     *
     * >  You can call the [DescribeInstance](https://help.aliyun.com/document_detail/433756.html) operation to query the ID of the WAF instance.
     * @example waf_v3prepaid_public_cn-wwo****iw02
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results.
     *
     * @example caeba0bbb2be03f84eb48b699f0*****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The region in which the Web Application Firewall (WAF) instance is deployed. Valid values:
     *
     *   **cn-hangzhou**: Chinese mainland.
     *   **ap-southeast-1**: outside the Chinese mainland.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The type of the resource. Set the value to ALIYUN::WAF::DEFENSERESOURCE.
     *
     * This parameter is required.
     * @example ALIYUN::WAF::DEFENSERESOURCE
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'instanceId'   => 'InstanceId',
        'nextToken'    => 'NextToken',
        'regionId'     => 'RegionId',
        'resourceType' => 'ResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTagKeysRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
