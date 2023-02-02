<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOutlineBindingResponseBody;

use AlibabaCloud\Tea\Model;

class outlineBinding extends Model
{
    /**
     * @description The bound index.
     *
     * @example PRIMARY
     *
     * @var string
     */
    public $bindIndex;

    /**
     * @description The bound plan.
     *
     * @example PHY_TABLE_SCAN | bmsql_order_line | 40 ******
     *
     * @var string
     */
    public $bindPlan;

    /**
     * @description The maximum number of concurrent tasks.
     *
     * @example 2
     *
     * @var int
     */
    public $maxConcurrent;

    /**
     * @description OutlineID.
     *
     * @example -1
     *
     * @var int
     */
    public $outlineId;
    protected $_name = [
        'bindIndex'     => 'BindIndex',
        'bindPlan'      => 'BindPlan',
        'maxConcurrent' => 'MaxConcurrent',
        'outlineId'     => 'OutlineId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindIndex) {
            $res['BindIndex'] = $this->bindIndex;
        }
        if (null !== $this->bindPlan) {
            $res['BindPlan'] = $this->bindPlan;
        }
        if (null !== $this->maxConcurrent) {
            $res['MaxConcurrent'] = $this->maxConcurrent;
        }
        if (null !== $this->outlineId) {
            $res['OutlineId'] = $this->outlineId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return outlineBinding
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindIndex'])) {
            $model->bindIndex = $map['BindIndex'];
        }
        if (isset($map['BindPlan'])) {
            $model->bindPlan = $map['BindPlan'];
        }
        if (isset($map['MaxConcurrent'])) {
            $model->maxConcurrent = $map['MaxConcurrent'];
        }
        if (isset($map['OutlineId'])) {
            $model->outlineId = $map['OutlineId'];
        }

        return $model;
    }
}
