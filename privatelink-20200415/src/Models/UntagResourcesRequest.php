<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Privatelink\V20200415\Models;

use AlibabaCloud\Tea\Model;

class UntagResourcesRequest extends Model
{
    /**
     * @description Specifies whether to remove all tags from the resource. Valid values:
     *
     *   **true**: removes all tags from the resource.
     *   **false**: does not remove all tags from the resource.
     *
     * >  If you specify both this parameter and **TagKey**, this parameter is invalid.
     * @example true
     *
     * @var bool
     */
    public $all;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters.
     *
     * >  If you do not specify this parameter, the system automatically uses the request ID as the client token.******** The request ID may be different for each request.
     * @example 0ED8D006-F706-4D23-88ED-E11ED28DCAC0
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to perform only a dry run, without performing the actual request. Valid values:
     *
     *   **true**: performs only a dry run. The system checks the request for potential issues, including missing parameter values, incorrect request syntax, and service limits. If the request fails the dry run, an error message is returned. If the request passes the dry run, the `DryRunOperation` error code is returned.
     *   **false** (default): performs a dry run and performs the actual request. If the request passes the dry run, a `2xx HTTP` status code is returned and the operation is performed.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The region ID of the PrivateLink instance.
     *
     * You can call the [DescribeRegions](~~120468~~) operation to query the most recent region list.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resource IDs. You can specify up to 50 resource IDs.
     *
     * @var string[]
     */
    public $resourceId;

    /**
     * @description The resource type. Valid values:
     *
     *   **vpcendpoint**: endpoint
     *   **vpcendpointservice**: endpoint service
     *
     * @example slb
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The keys of the tags that you want to remove from the resource. You can specify up to 20 tag keys.
     *
     * @var string[]
     */
    public $tagKey;
    protected $_name = [
        'all'          => 'All',
        'clientToken'  => 'ClientToken',
        'dryRun'       => 'DryRun',
        'regionId'     => 'RegionId',
        'resourceId'   => 'ResourceId',
        'resourceType' => 'ResourceType',
        'tagKey'       => 'TagKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->all) {
            $res['All'] = $this->all;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->tagKey) {
            $res['TagKey'] = $this->tagKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UntagResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['All'])) {
            $model->all = $map['All'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceId'])) {
            if (!empty($map['ResourceId'])) {
                $model->resourceId = $map['ResourceId'];
            }
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['TagKey'])) {
            if (!empty($map['TagKey'])) {
                $model->tagKey = $map['TagKey'];
            }
        }

        return $model;
    }
}
