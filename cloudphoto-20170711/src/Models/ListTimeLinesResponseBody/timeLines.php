<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudPhoto\V20170711\Models\ListTimeLinesResponseBody;

use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\ListTimeLinesResponseBody\timeLines\photos;
use AlibabaCloud\Tea\Model;

class timeLines extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $photosCount;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var photos[]
     */
    public $photos;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'endTime'     => 'EndTime',
        'photosCount' => 'PhotosCount',
        'startTime'   => 'StartTime',
        'photos'      => 'Photos',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->photosCount) {
            $res['PhotosCount'] = $this->photosCount;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->photos) {
            $res['Photos'] = [];
            if (null !== $this->photos && \is_array($this->photos)) {
                $n = 0;
                foreach ($this->photos as $item) {
                    $res['Photos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return timeLines
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PhotosCount'])) {
            $model->photosCount = $map['PhotosCount'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Photos'])) {
            if (!empty($map['Photos'])) {
                $model->photos = [];
                $n             = 0;
                foreach ($map['Photos'] as $item) {
                    $model->photos[$n++] = null !== $item ? photos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
