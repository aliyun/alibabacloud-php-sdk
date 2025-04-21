<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videorecog\V20200320\Models\RecognizeVideoCastCrewListResponseBody\data;

use AlibabaCloud\Dara\Model;

class castResults extends Model
{
    /**
     * @var string[]
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
        'endTime' => 'EndTime',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        if (\is_array($this->detailInfo)) {
            Model::validateArray($this->detailInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->detailInfo) {
            if (\is_array($this->detailInfo)) {
                $res['DetailInfo'] = [];
                foreach ($this->detailInfo as $key1 => $value1) {
                    $res['DetailInfo'][$key1] = $value1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DetailInfo'])) {
            if (!empty($map['DetailInfo'])) {
                $model->detailInfo = [];
                foreach ($map['DetailInfo'] as $key1 => $value1) {
                    $model->detailInfo[$key1] = $value1;
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
