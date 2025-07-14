<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListVscsResponseBody;

use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListVscsResponseBody\vscs\tags;
use AlibabaCloud\Tea\Model;

class vscs extends Model
{
    /**
     * @description The ID of the Lingjun node.
     *
     * @example e01-cn-fzh47xd7u08
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The resource group ID.
     *
     * @example rg-acfm2zkwhkns57i
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The VSC status.
     *
     * Valid values:
     *
     *   Creating
     *   Normal
     *   Deleting
     *
     * @example Normal
     *
     * @var string
     */
    public $status;

    /**
     * @description The tags.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The VSC ID.
     *
     * @example vsc-001
     *
     * @var string
     */
    public $vscId;

    /**
     * @description The custom name of the VSC.
     *
     * @example test_name
     *
     * @var string
     */
    public $vscName;

    /**
     * @description The VSC type. Valid values: primary and standard.
     *
     * @example primary
     *
     * @var string
     */
    public $vscType;
    protected $_name = [
        'nodeId' => 'NodeId',
        'resourceGroupId' => 'ResourceGroupId',
        'status' => 'Status',
        'tags' => 'Tags',
        'vscId' => 'VscId',
        'vscName' => 'VscName',
        'vscType' => 'VscType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vscId) {
            $res['VscId'] = $this->vscId;
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
     * @return vscs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VscId'])) {
            $model->vscId = $map['VscId'];
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
