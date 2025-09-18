<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DescribeInstanceGrantedToExpressConnectRouterRequest\tagModels;

class DescribeInstanceGrantedToExpressConnectRouterRequest extends Model
{
    /**
     * @var string
     */
    public $callerType;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $ecrId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $instanceOwnerId;

    /**
     * @var string
     */
    public $instanceRegionId;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var tagModels[]
     */
    public $tagModels;

    /**
     * @var string
     */
    public $version;
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
        'version' => 'Version',
    ];

    public function validate()
    {
        if (\is_array($this->tagModels)) {
            Model::validateArray($this->tagModels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->tagModels)) {
                $res['TagModels'] = [];
                $n1 = 0;
                foreach ($this->tagModels as $item1) {
                    $res['TagModels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['TagModels'] as $item1) {
                    $model->tagModels[$n1] = tagModels::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
