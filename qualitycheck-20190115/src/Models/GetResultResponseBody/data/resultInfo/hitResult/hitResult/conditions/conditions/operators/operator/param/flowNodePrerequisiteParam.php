<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\conditions\conditions\operators\operator\param;

use AlibabaCloud\Tea\Model;

class flowNodePrerequisiteParam extends Model
{
    /**
     * @description 节点id
     *
     * @var int
     */
    public $nodeId;

    /**
     * @description 节点匹配状态。
     *
     * @var int
     */
    public $nodeMatchStatus;

    /**
     * @description 冗余的节点名称
     *
     * @var string
     */
    public $nodeName;
    protected $_name = [
        'nodeId'          => 'NodeId',
        'nodeMatchStatus' => 'NodeMatchStatus',
        'nodeName'        => 'NodeName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeMatchStatus) {
            $res['NodeMatchStatus'] = $this->nodeMatchStatus;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flowNodePrerequisiteParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeMatchStatus'])) {
            $model->nodeMatchStatus = $map['NodeMatchStatus'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }

        return $model;
    }
}
