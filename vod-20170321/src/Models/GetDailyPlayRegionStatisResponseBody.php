<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetDailyPlayRegionStatisResponseBody\dailyPlayRegionStatisList;

class GetDailyPlayRegionStatisResponseBody extends Model
{
    /**
     * @var dailyPlayRegionStatisList[]
     */
    public $dailyPlayRegionStatisList;

    /**
     * @var string[]
     */
    public $emptyDates;

    /**
     * @var string[]
     */
    public $failDates;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dailyPlayRegionStatisList' => 'DailyPlayRegionStatisList',
        'emptyDates' => 'EmptyDates',
        'failDates' => 'FailDates',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->dailyPlayRegionStatisList)) {
            Model::validateArray($this->dailyPlayRegionStatisList);
        }
        if (\is_array($this->emptyDates)) {
            Model::validateArray($this->emptyDates);
        }
        if (\is_array($this->failDates)) {
            Model::validateArray($this->failDates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dailyPlayRegionStatisList) {
            if (\is_array($this->dailyPlayRegionStatisList)) {
                $res['DailyPlayRegionStatisList'] = [];
                $n1 = 0;
                foreach ($this->dailyPlayRegionStatisList as $item1) {
                    $res['DailyPlayRegionStatisList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->emptyDates) {
            if (\is_array($this->emptyDates)) {
                $res['EmptyDates'] = [];
                $n1 = 0;
                foreach ($this->emptyDates as $item1) {
                    $res['EmptyDates'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->failDates) {
            if (\is_array($this->failDates)) {
                $res['FailDates'] = [];
                $n1 = 0;
                foreach ($this->failDates as $item1) {
                    $res['FailDates'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DailyPlayRegionStatisList'])) {
            if (!empty($map['DailyPlayRegionStatisList'])) {
                $model->dailyPlayRegionStatisList = [];
                $n1 = 0;
                foreach ($map['DailyPlayRegionStatisList'] as $item1) {
                    $model->dailyPlayRegionStatisList[$n1++] = dailyPlayRegionStatisList::fromMap($item1);
                }
            }
        }

        if (isset($map['EmptyDates'])) {
            if (!empty($map['EmptyDates'])) {
                $model->emptyDates = [];
                $n1 = 0;
                foreach ($map['EmptyDates'] as $item1) {
                    $model->emptyDates[$n1++] = $item1;
                }
            }
        }

        if (isset($map['FailDates'])) {
            if (!empty($map['FailDates'])) {
                $model->failDates = [];
                $n1 = 0;
                foreach ($map['FailDates'] as $item1) {
                    $model->failDates[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
