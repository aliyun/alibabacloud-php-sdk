<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class NodeSelector extends Model
{
    /**
     * @description 节点组ID。当NodeSelectType取值NodeGroup时，该参数生效。
     *
     * @example ng-869471354ecd****
     *
     * @var string
     */
    public $nodeGroupId;

    /**
     * @description 节点组名称。当NodeSelectType取值NodeGroup，且参数NodeGroupId为空时生效，该参数生效。
     *
     * @example master-1
     *
     * @var string
     */
    public $nodeGroupName;

    /**
     * @description 节点组类型。当NodeSelectType取值NodeGroup，且参数NodeGroupId为空时生效。数组元数个数N取值范围：0~10。
     *
     * @example ["CORE","TASK"]
     *
     * @var string[]
     */
    public $nodeGroupTypes;

    /**
     * @description 节点名称列表。当NodeSelectType取值Node时，该参数生效。
     *
     * @example ["core1-1"]
     *
     * @var string[]
     */
    public $nodeNames;

    /**
     * @description 节点选择类型。取值范围：
     * - NODE：节点。
     * @example CLUSTER
     *
     * @var string
     */
    public $nodeSelectType;
    protected $_name = [
        'nodeGroupId'    => 'NodeGroupId',
        'nodeGroupName'  => 'NodeGroupName',
        'nodeGroupTypes' => 'NodeGroupTypes',
        'nodeNames'      => 'NodeNames',
        'nodeSelectType' => 'NodeSelectType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeGroupId) {
            $res['NodeGroupId'] = $this->nodeGroupId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return NodeSelector
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeGroupId'])) {
            $model->nodeGroupId = $map['NodeGroupId'];
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

        return $model;
    }
}
