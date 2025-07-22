<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models;

use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DescribeInstanceGrantedToExpressConnectRouterRequest\tagModels;
use AlibabaCloud\Tea\Model;

class DescribeInstanceGrantedToExpressConnectRouterRequest extends Model
{
    /**
     * @description The type of the user account. Valid values:
     *
     *   **sub**: a Resource Access Management (RAM) user.
     *   **parent**: an Alibaba Cloud account.
     *
     * @example OTHER
     *
     * @var string
     */
    public $callerType;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters.
     *
     * >  If you do not specify this parameter, the system automatically uses the **request ID** as the **client token**. The **request ID** may be different for each request.
     *
     * @example 02fb3da4-130e-11e9-8e44-00****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to perform only a dry run, without performing the actual request. Valid values:
     *
     *   **true**: performs only a dry run.
     *   **false** (default): performs a dry run and performs the actual request.
     *
     * @example true
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The ECR ID.
     *
     * This parameter is required.
     *
     * @example ecr-mezk2idmsd0vx2****
     *
     * @var string
     */
    public $ecrId;

    /**
     * @description The ID of the network instance.
     *
     * @example vbr-j6cwxhgg0s5nuephp****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the Alibaba Cloud account that owns the network instance.
     *
     * @example 129845258050****
     *
     * @var int
     */
    public $instanceOwnerId;

    /**
     * @description The region ID of the network instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $instanceRegionId;

    /**
     * @description The type of the network instance. Valid values:
     *
     *   **VBR**
     *   **VPC**
     *
     * @example VBR
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The maximum number of entries to read. Valid values: 1 to 2147483647. Default value: 20.
     *
     * @example 6
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. Valid values:
     *
     *   You do not need to specify this parameter for the first request.
     *   You must specify the token that is obtained from the previous query as the value of NextToken.
     *
     * @example gAAAAABkyGzFbZR2NnxnyVk0EiL7F3qMBtBim8Es0mugRT3qb8yEHAMaHGanzuaHUmiEq9QRmok0RgxJAINBOJZa5KPjopEu_Q==
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the resource group to which the network instance belongs.
     *
     * @example rg-aek2tsvbnfe****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The tags.
     *
     * @var tagModels[]
     */
    public $tagModels;
    protected $_name = [
        'callerType' => 'CallerType',
        'clientToken' => 'ClientToken',
        'dryRun' => 'DryRun',
        'ecrId' => 'EcrId',
        'instanceId' => 'InstanceId',
        'instanceOwnerId' => 'InstanceOwnerId',
        'instanceRegionId' => 'InstanceRegionId',
        'instanceType' => 'InstanceType',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'resourceGroupId' => 'ResourceGroupId',
        'tagModels' => 'TagModels',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->callerType) {
            $res['CallerType'] = $this->callerType;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->ecrId) {
            $res['EcrId'] = $this->ecrId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceOwnerId) {
            $res['InstanceOwnerId'] = $this->instanceOwnerId;
        }
        if (null !== $this->instanceRegionId) {
            $res['InstanceRegionId'] = $this->instanceRegionId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->tagModels) {
            $res['TagModels'] = [];
            if (null !== $this->tagModels && \is_array($this->tagModels)) {
                $n = 0;
                foreach ($this->tagModels as $item) {
                    $res['TagModels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceGrantedToExpressConnectRouterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallerType'])) {
            $model->callerType = $map['CallerType'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['EcrId'])) {
            $model->ecrId = $map['EcrId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceOwnerId'])) {
            $model->instanceOwnerId = $map['InstanceOwnerId'];
        }
        if (isset($map['InstanceRegionId'])) {
            $model->instanceRegionId = $map['InstanceRegionId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['TagModels'])) {
            if (!empty($map['TagModels'])) {
                $model->tagModels = [];
                $n = 0;
                foreach ($map['TagModels'] as $item) {
                    $model->tagModels[$n++] = null !== $item ? tagModels::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
