<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaClipByFaceResponseBody\mediaClipList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaClipByFaceResponseBody\mediaClipList\occurrencesInfos\trackData;

class occurrencesInfos extends Model
{
    /**
     * @var float
     */
    public $endTime;
    /**
     * @var string
     */
    public $expression;
    /**
     * @var float
     */
    public $startTime;
    /**
     * @var trackData[]
     */
    public $trackData;
    protected $_name = [
        'endTime'    => 'EndTime',
        'expression' => 'Expression',
        'startTime'  => 'StartTime',
        'trackData'  => 'TrackData',
    ];

    public function validate()
    {
        if (\is_array($this->trackData)) {
            Model::validateArray($this->trackData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->expression) {
            $res['Expression'] = $this->expression;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->trackData) {
            if (\is_array($this->trackData)) {
                $res['TrackData'] = [];
                $n1               = 0;
                foreach ($this->trackData as $item1) {
                    $res['TrackData'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Expression'])) {
            $model->expression = $map['Expression'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['TrackData'])) {
            if (!empty($map['TrackData'])) {
                $model->trackData = [];
                $n1               = 0;
                foreach ($map['TrackData'] as $item1) {
                    $model->trackData[$n1++] = trackData::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
