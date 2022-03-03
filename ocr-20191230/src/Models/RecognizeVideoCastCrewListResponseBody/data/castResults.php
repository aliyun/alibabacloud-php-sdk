<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVideoCastCrewListResponseBody\data;

use AlibabaCloud\Tea\Model;

class castResults extends Model
{
    /**
     * @var string[]
     */
    public $detailInfoes;

    /**
     * @var float
     */
    public $endTime;

    /**
     * @var float
     */
    public $startTime;
    protected $_name = [
        'detailInfoes' => 'DetailInfoes',
        'endTime'      => 'EndTime',
        'startTime'    => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detailInfoes) {
            $res['DetailInfoes'] = $this->detailInfoes;
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
     * @return castResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DetailInfoes'])) {
            $model->detailInfoes = $map['DetailInfoes'];
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
