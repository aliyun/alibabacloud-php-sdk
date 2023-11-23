<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class NodeTypeStatistic extends Model
{
    /**
     * @example 4
     *
     * @var int
     */
    public $canBeBoundCount;

    /**
     * @example ecs.g6.4xlarge
     *
     * @var string
     */
    public $nodeType;

    /**
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'canBeBoundCount' => 'CanBeBoundCount',
        'nodeType'        => 'NodeType',
        'totalCount'      => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->canBeBoundCount) {
            $res['CanBeBoundCount'] = $this->canBeBoundCount;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return NodeTypeStatistic
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CanBeBoundCount'])) {
            $model->canBeBoundCount = $map['CanBeBoundCount'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
