<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetEnterpriseVocAnalysisTaskResponseBody\data\statisticsOverview\tagDimensionStatistics;

use AlibabaCloud\Dara\Model;

class tagValueCountStatistic extends Model
{
    /**
     * @var string
     */
    public $tagName;
    /**
     * @var string
     */
    public $tagTaskType;
    /**
     * @var int
     */
    public $valueCount;
    protected $_name = [
        'tagName'     => 'TagName',
        'tagTaskType' => 'TagTaskType',
        'valueCount'  => 'ValueCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tagName) {
            $res['TagName'] = $this->tagName;
        }

        if (null !== $this->tagTaskType) {
            $res['TagTaskType'] = $this->tagTaskType;
        }

        if (null !== $this->valueCount) {
            $res['ValueCount'] = $this->valueCount;
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
        if (isset($map['TagName'])) {
            $model->tagName = $map['TagName'];
        }

        if (isset($map['TagTaskType'])) {
            $model->tagTaskType = $map['TagTaskType'];
        }

        if (isset($map['ValueCount'])) {
            $model->valueCount = $map['ValueCount'];
        }

        return $model;
    }
}
