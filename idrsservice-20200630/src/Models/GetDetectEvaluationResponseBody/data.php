<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetDetectEvaluationResponseBody;

use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetDetectEvaluationResponseBody\data\evaluationItemList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $day;

    /**
     * @var evaluationItemList[]
     */
    public $evaluationItemList;
    protected $_name = [
        'day'                => 'Day',
        'evaluationItemList' => 'EvaluationItemList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->day) {
            $res['Day'] = $this->day;
        }
        if (null !== $this->evaluationItemList) {
            $res['EvaluationItemList'] = [];
            if (null !== $this->evaluationItemList && \is_array($this->evaluationItemList)) {
                $n = 0;
                foreach ($this->evaluationItemList as $item) {
                    $res['EvaluationItemList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Day'])) {
            $model->day = $map['Day'];
        }
        if (isset($map['EvaluationItemList'])) {
            if (!empty($map['EvaluationItemList'])) {
                $model->evaluationItemList = [];
                $n                         = 0;
                foreach ($map['EvaluationItemList'] as $item) {
                    $model->evaluationItemList[$n++] = null !== $item ? evaluationItemList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
