<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetAlertRecordAnalysisResultResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetAlertRecordAnalysisResultResponseBody\data\uniqueTagList;

class data extends Model
{
    /**
     * @var string
     */
    public $analysisCode;

    /**
     * @var uniqueTagList[]
     */
    public $uniqueTagList;
    protected $_name = [
        'analysisCode' => 'AnalysisCode',
        'uniqueTagList' => 'UniqueTagList',
    ];

    public function validate()
    {
        if (\is_array($this->uniqueTagList)) {
            Model::validateArray($this->uniqueTagList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->analysisCode) {
            $res['AnalysisCode'] = $this->analysisCode;
        }

        if (null !== $this->uniqueTagList) {
            if (\is_array($this->uniqueTagList)) {
                $res['UniqueTagList'] = [];
                $n1 = 0;
                foreach ($this->uniqueTagList as $item1) {
                    $res['UniqueTagList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AnalysisCode'])) {
            $model->analysisCode = $map['AnalysisCode'];
        }

        if (isset($map['UniqueTagList'])) {
            if (!empty($map['UniqueTagList'])) {
                $model->uniqueTagList = [];
                $n1 = 0;
                foreach ($map['UniqueTagList'] as $item1) {
                    $model->uniqueTagList[$n1] = uniqueTagList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
