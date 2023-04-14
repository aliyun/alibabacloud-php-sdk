<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models;

use AlibabaCloud\Tea\Model;

class ListFlowControlTaskItemReportsRequest extends Model
{
    /**
     * @example 5
     *
     * @var string
     */
    public $count;

    /**
     * @example yesterDay
     *
     * @var string
     */
    public $selectTimeType;

    /**
     * @example invalidItem
     *
     * @var string
     */
    public $selectType;
    protected $_name = [
        'count'          => 'count',
        'selectTimeType' => 'selectTimeType',
        'selectType'     => 'selectType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }
        if (null !== $this->selectTimeType) {
            $res['selectTimeType'] = $this->selectTimeType;
        }
        if (null !== $this->selectType) {
            $res['selectType'] = $this->selectType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFlowControlTaskItemReportsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['count'])) {
            $model->count = $map['count'];
        }
        if (isset($map['selectTimeType'])) {
            $model->selectTimeType = $map['selectTimeType'];
        }
        if (isset($map['selectType'])) {
            $model->selectType = $map['selectType'];
        }

        return $model;
    }
}
