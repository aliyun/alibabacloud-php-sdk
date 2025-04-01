<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOutlineBindingResponseBody;

use AlibabaCloud\Dara\Model;

class outlineBinding extends Model
{
    /**
     * @var string
     */
    public $bindIndex;

    /**
     * @var string
     */
    public $bindPlan;

    /**
     * @var int
     */
    public $maxConcurrent;

    /**
     * @var int
     */
    public $outlineId;

    /**
     * @var string
     */
    public $tableName;
    protected $_name = [
        'bindIndex' => 'BindIndex',
        'bindPlan' => 'BindPlan',
        'maxConcurrent' => 'MaxConcurrent',
        'outlineId' => 'OutlineId',
        'tableName' => 'TableName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
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

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
