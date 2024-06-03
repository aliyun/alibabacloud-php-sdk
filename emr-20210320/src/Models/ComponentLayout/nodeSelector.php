<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\ComponentLayout;

use AlibabaCloud\Tea\Model;

class nodeSelector extends Model
{
    /**
     * @description 节点结束编号，包含结束编号。
     *
     * @example 3
     *
     * @var int
     */
    public $nodeEndIndex;

    /**
     * @description 节点组ID。
     *
     * @example G-F609686D45D4ABCD
     *
     * @var string
     */
    public $nodeGroupId;

    /**
     * @description 机器组下标编号。
     *
     * @example 1
     *
     * @var int
     */
    public $nodeGroupIndex;

    /**
     * @description 机器组名。
     *
     * @example master-1
     *
     * @var string
     */
    public $nodeGroupName;

    /**
     * @description SelectType = NODE_GROUP 且 nodeGroupId 不存在时使用
     *
     * @example [null]
     *
     * @var string[]
     */
    public $nodeGroupTypes;

    /**
     * @description 节点名称列表。
     *
     * @example [null]
     *
     * @var string[]
     */
    public $nodeNames;

    /**
     * @description 节点选择类型。
     *
     * This parameter is required.
     * @example CLUSTER
     *
     * @var string
     */
    public $nodeSelectType;

    /**
     * @description 节点开始编号，包含开始编号。
     *
     * @example 1
     *
     * @var int
     */
    public $nodeStartIndex;
    protected $_name = [
        'nodeEndIndex'   => 'NodeEndIndex',
        'nodeGroupId'    => 'NodeGroupId',
        'nodeGroupIndex' => 'NodeGroupIndex',
        'nodeGroupName'  => 'NodeGroupName',
        'nodeGroupTypes' => 'NodeGroupTypes',
        'nodeNames'      => 'NodeNames',
        'nodeSelectType' => 'NodeSelectType',
        'nodeStartIndex' => 'NodeStartIndex',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeEndIndex) {
            $res['NodeEndIndex'] = $this->nodeEndIndex;
        }
        if (null !== $this->nodeGroupId) {
            $res['NodeGroupId'] = $this->nodeGroupId;
        }
        if (null !== $this->nodeGroupIndex) {
            $res['NodeGroupIndex'] = $this->nodeGroupIndex;
        }
        if (null !== $this->nodeGroupName) {
            $res['NodeGroupName'] = $this->nodeGroupName;
        }
        if (null !== $this->nodeGroupTypes) {
            $res['NodeGroupTypes'] = $this->nodeGroupTypes;
        }
        if (null !== $this->nodeNames) {
            $res['NodeNames'] = $this->nodeNames;
        }
        if (null !== $this->nodeSelectType) {
            $res['NodeSelectType'] = $this->nodeSelectType;
        }
        if (null !== $this->nodeStartIndex) {
            $res['NodeStartIndex'] = $this->nodeStartIndex;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodeSelector
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeEndIndex'])) {
            $model->nodeEndIndex = $map['NodeEndIndex'];
        }
        if (isset($map['NodeGroupId'])) {
            $model->nodeGroupId = $map['NodeGroupId'];
        }
        if (isset($map['NodeGroupIndex'])) {
            $model->nodeGroupIndex = $map['NodeGroupIndex'];
        }
        if (isset($map['NodeGroupName'])) {
            $model->nodeGroupName = $map['NodeGroupName'];
        }
        if (isset($map['NodeGroupTypes'])) {
            if (!empty($map['NodeGroupTypes'])) {
                $model->nodeGroupTypes = $map['NodeGroupTypes'];
            }
        }
        if (isset($map['NodeNames'])) {
            if (!empty($map['NodeNames'])) {
                $model->nodeNames = $map['NodeNames'];
            }
        }
        if (isset($map['NodeSelectType'])) {
            $model->nodeSelectType = $map['NodeSelectType'];
        }
        if (isset($map['NodeStartIndex'])) {
            $model->nodeStartIndex = $map['NodeStartIndex'];
        }

        return $model;
    }
}
