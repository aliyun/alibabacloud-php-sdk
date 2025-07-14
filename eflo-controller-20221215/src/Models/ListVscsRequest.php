<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListVscsRequest\tag;
use AlibabaCloud\Tea\Model;

class ListVscsRequest extends Model
{
    /**
     * @description The maximum number of data entries to return.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that is used in the next request to retrieve a new page of results. If you leave this parameter empty, the query starts from the beginning.
     *
     * @example 563d42ae0b17572449ec8c97f7f66069
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The IDs of the nodes.
     *
     * @var string[]
     */
    public $nodeIds;

    /**
     * @description The resource group ID.
     *
     * @example rg-aek2xdkc6icwfha
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The tags.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The VSC name.
     *
     * @example test_name
     *
     * @var string
     */
    public $vscName;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'nodeIds' => 'NodeIds',
        'resourceGroupId' => 'ResourceGroupId',
        'tag' => 'Tag',
        'vscName' => 'VscName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->nodeIds) {
            $res['NodeIds'] = $this->nodeIds;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListVscsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['NodeIds'])) {
            if (!empty($map['NodeIds'])) {
                $model->nodeIds = $map['NodeIds'];
            }
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

        return $model;
    }
}
