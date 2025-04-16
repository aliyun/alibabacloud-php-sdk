<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetEnterpriseVocAnalysisTaskResponseBody\data\statisticsOverview\filterDimensionStatistics;

use AlibabaCloud\Dara\Model;

class tagValueCountStatistic extends Model
{
    /**
     * @var string
     */
    public $tagName;

    /**
     * @var int
     */
    public $valueCount;
    protected $_name = [
        'tagName' => 'tagName',
        'valueCount' => 'valueCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tagName) {
            $res['tagName'] = $this->tagName;
        }

        if (null !== $this->valueCount) {
            $res['valueCount'] = $this->valueCount;
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
        if (isset($map['tagName'])) {
            $model->tagName = $map['tagName'];
        }

        if (isset($map['valueCount'])) {
            $model->valueCount = $map['valueCount'];
        }

        return $model;
    }
}
