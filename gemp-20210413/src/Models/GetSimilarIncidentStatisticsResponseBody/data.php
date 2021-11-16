<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetSimilarIncidentStatisticsResponseBody;

use AlibabaCloud\SDK\GEMP\V20210413\Models\GetSimilarIncidentStatisticsResponseBody\data\dailySimilarIncidents;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetSimilarIncidentStatisticsResponseBody\data\topFiveIncidents;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 7天内相似事件数量
     *
     * @var int
     */
    public $countInSevenDays;

    /**
     * @description 6月内相似事件数量
     *
     * @var int
     */
    public $countInSixMonths;

    /**
     * @description 根据日期分类
     *
     * @var dailySimilarIncidents[]
     */
    public $dailySimilarIncidents;

    /**
     * @description id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @description topFiveIncidents
     *
     * @var topFiveIncidents[]
     */
    public $topFiveIncidents;
    protected $_name = [
        'countInSevenDays'      => 'countInSevenDays',
        'countInSixMonths'      => 'countInSixMonths',
        'dailySimilarIncidents' => 'dailySimilarIncidents',
        'requestId'             => 'requestId',
        'topFiveIncidents'      => 'topFiveIncidents',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->countInSevenDays) {
            $res['countInSevenDays'] = $this->countInSevenDays;
        }
        if (null !== $this->countInSixMonths) {
            $res['countInSixMonths'] = $this->countInSixMonths;
        }
        if (null !== $this->dailySimilarIncidents) {
            $res['dailySimilarIncidents'] = [];
            if (null !== $this->dailySimilarIncidents && \is_array($this->dailySimilarIncidents)) {
                $n = 0;
                foreach ($this->dailySimilarIncidents as $item) {
                    $res['dailySimilarIncidents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->topFiveIncidents) {
            $res['topFiveIncidents'] = [];
            if (null !== $this->topFiveIncidents && \is_array($this->topFiveIncidents)) {
                $n = 0;
                foreach ($this->topFiveIncidents as $item) {
                    $res['topFiveIncidents'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['countInSevenDays'])) {
            $model->countInSevenDays = $map['countInSevenDays'];
        }
        if (isset($map['countInSixMonths'])) {
            $model->countInSixMonths = $map['countInSixMonths'];
        }
        if (isset($map['dailySimilarIncidents'])) {
            if (!empty($map['dailySimilarIncidents'])) {
                $model->dailySimilarIncidents = [];
                $n                            = 0;
                foreach ($map['dailySimilarIncidents'] as $item) {
                    $model->dailySimilarIncidents[$n++] = null !== $item ? dailySimilarIncidents::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['topFiveIncidents'])) {
            if (!empty($map['topFiveIncidents'])) {
                $model->topFiveIncidents = [];
                $n                       = 0;
                foreach ($map['topFiveIncidents'] as $item) {
                    $model->topFiveIncidents[$n++] = null !== $item ? topFiveIncidents::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
