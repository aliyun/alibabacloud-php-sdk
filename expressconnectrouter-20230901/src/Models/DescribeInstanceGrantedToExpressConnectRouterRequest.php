<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models;

use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DescribeInstanceGrantedToExpressConnectRouterRequest\tagModels;
use AlibabaCloud\Tea\Model;

class DescribeInstanceGrantedToExpressConnectRouterRequest extends Model
{
    /**
     * @example 02fb3da4-130e-11e9-8e44-00****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example true
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @example ecr-mezk2idmsd0vx2****
     *
     * @var string
     */
    public $ecrId;

    /**
     * @example vbr-j6cwxhgg0s5nuephp****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 129845258050****
     *
     * @var int
     */
    public $instanceOwnerId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $instanceRegionId;

    /**
     * @example VBR
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example 6
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example gAAAAABkyGzFbZR2NnxnyVk0EiL7F3qMBtBim8Es0mugRT3qb8yEHAMaHGanzuaHUmiEq9QRmok0RgxJAINBOJZa5KPjopEu_Q==
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example rg-aek2tsvbnfe****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var tagModels[]
     */
    public $tagModels;
    protected $_name = [
        'clientToken'      => 'ClientToken',
        'dryRun'           => 'DryRun',
        'ecrId'            => 'EcrId',
        'instanceId'       => 'InstanceId',
        'instanceOwnerId'  => 'InstanceOwnerId',
        'instanceRegionId' => 'InstanceRegionId',
        'instanceType'     => 'InstanceType',
        'maxResults'       => 'MaxResults',
        'nextToken'        => 'NextToken',
        'resourceGroupId'  => 'ResourceGroupId',
        'tagModels'        => 'TagModels',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
                $n                = 0;
                foreach ($map['TagModels'] as $item) {
                    $model->tagModels[$n++] = null !== $item ? tagModels::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
