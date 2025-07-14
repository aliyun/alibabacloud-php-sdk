<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateVscRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateVscRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The node ID.
     *
     * This parameter is required.
     *
     * @example e01-cn-zvp2tgykr08
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The resource group ID.
     *
     * @example rg-aek2xdkc6icwfha
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The resource tags.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The custom name of the VSC, which is unique on a compute node.
     *
     * @example test_name
     *
     * @var string
     */
    public $vscName;

    /**
     * @description The VSC type. Valid values: primary and standard. Default value: primary.
     *
     * @example primary
     *
     * @var string
     */
    public $vscType;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'nodeId' => 'NodeId',
        'resourceGroupId' => 'ResourceGroupId',
        'tag' => 'Tag',
        'vscName' => 'VscName',
        'vscType' => 'VscType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vscName) {
            $res['VscName'] = $this->vscName;
        }
        if (null !== $this->vscType) {
            $res['VscType'] = $this->vscType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVscRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VscName'])) {
            $model->vscName = $map['VscName'];
        }
        if (isset($map['VscType'])) {
            $model->vscType = $map['VscType'];
        }

        return $model;
    }
}
