<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videorecog\V20200320\Models\RecognizeVideoCastCrewListResponseBody\data;

use AlibabaCloud\SDK\Videorecog\V20200320\Models\RecognizeVideoCastCrewListResponseBody\data\videoOcrResults\detailInfo;
use AlibabaCloud\Tea\Model;

class videoOcrResults extends Model
{
    /**
     * @var detailInfo[]
     */
    public $detailInfo;

    /**
     * @var float
     */
    public $endTime;

    /**
     * @var float
     */
    public $startTime;
    protected $_name = [
        'detailInfo' => 'DetailInfo',
        'endTime'    => 'EndTime',
        'startTime'  => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detailInfo) {
            $res['DetailInfo'] = [];
            if (null !== $this->detailInfo && \is_array($this->detailInfo)) {
                $n = 0;
                foreach ($this->detailInfo as $item) {
                    $res['DetailInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoOcrResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DetailInfo'])) {
            if (!empty($map['DetailInfo'])) {
                $model->detailInfo = [];
                $n                 = 0;
                foreach ($map['DetailInfo'] as $item) {
                    $model->detailInfo[$n++] = null !== $item ? detailInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
