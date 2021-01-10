<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetDetectEvaluationResponseBody\data;

use AlibabaCloud\Tea\Model;

class evaluationItemList extends Model
{
    /**
     * @var string
     */
    public $successRate;

    /**
     * @var int
     */
    public $handleCount;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $successCount;
    protected $_name = [
        'successRate'  => 'SuccessRate',
        'handleCount'  => 'HandleCount',
        'name'         => 'Name',
        'successCount' => 'SuccessCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->successRate) {
            $res['SuccessRate'] = $this->successRate;
        }
        if (null !== $this->handleCount) {
            $res['HandleCount'] = $this->handleCount;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return evaluationItemList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SuccessRate'])) {
            $model->successRate = $map['SuccessRate'];
        }
        if (isset($map['HandleCount'])) {
            $model->handleCount = $map['HandleCount'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
        }

        return $model;
    }
}
