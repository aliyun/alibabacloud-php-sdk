<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class NodeTypeStatistic extends Model
{
    /**
     * @var int
     */
    public $canBeBoundCount;
    /**
     * @var string
     */
    public $nodeType;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
