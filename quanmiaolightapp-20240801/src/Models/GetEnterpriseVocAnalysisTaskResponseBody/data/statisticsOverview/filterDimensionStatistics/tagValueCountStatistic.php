<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetEnterpriseVocAnalysisTaskResponseBody\data\statisticsOverview\filterDimensionStatistics;

use AlibabaCloud\Tea\Model;

class tagValueCountStatistic extends Model
{
    /**
     * @var string
     */
    public $tagName;

    /**
     * @example 10
     *
     * @var int
     */
    public $valueCount;
    protected $_name = [
        'tagName' => 'tagName',
        'valueCount' => 'valueCount',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return tagValueCountStatistic
     */
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
