<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models;

use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DescribeExpressConnectRouterRequest\tagModels;
use AlibabaCloud\Tea\Model;

class DescribeExpressConnectRouterRequest extends Model
{
    /**
     * @example 02fb3da4-130e-11e9-8e44-00****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @example ecr-fu8rszhgv7623c****
     *
     * @var string
     */
    public $ecrId;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @example e0a2dbeb69a8beeeb8194e92b702df3fd3e7bfe6ce7bfc16e0b5e8707e68181f
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example rg-aek2aq7f4va****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var tagModels[]
     */
    public $tagModels;
    protected $_name = [
        'clientToken'     => 'ClientToken',
        'dryRun'          => 'DryRun',
        'ecrId'           => 'EcrId',
        'maxResults'      => 'MaxResults',
        'name'            => 'Name',
        'nextToken'       => 'NextToken',
        'resourceGroupId' => 'ResourceGroupId',
        'tagModels'       => 'TagModels',
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
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
     * @return DescribeExpressConnectRouterRequest
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
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
