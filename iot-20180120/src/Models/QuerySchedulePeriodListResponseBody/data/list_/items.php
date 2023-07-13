<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QuerySchedulePeriodListResponseBody\data\list_;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @example 00:10
     *
     * @var string
     */
    public $endTime;

    /**
     * @example Md3ZiTL888K9llXDy7890***********
     *
     * @var string
     */
    public $periodCode;

    /**
     * @example www.taobao.com
     *
     * @var string
     */
    public $soundCodeContent;

    /**
     * @example 00:00
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'description'      => 'Description',
        'endTime'          => 'EndTime',
        'periodCode'       => 'PeriodCode',
        'soundCodeContent' => 'SoundCodeContent',
        'startTime'        => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->periodCode) {
            $res['PeriodCode'] = $this->periodCode;
        }
        if (null !== $this->soundCodeContent) {
            $res['SoundCodeContent'] = $this->soundCodeContent;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PeriodCode'])) {
            $model->periodCode = $map['PeriodCode'];
        }
        if (isset($map['SoundCodeContent'])) {
            $model->soundCodeContent = $map['SoundCodeContent'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
