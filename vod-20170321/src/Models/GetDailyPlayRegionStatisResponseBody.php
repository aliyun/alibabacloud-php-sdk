<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetDailyPlayRegionStatisResponseBody\dailyPlayRegionStatisList;
use AlibabaCloud\Tea\Model;

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
     * @example 67720502-CDDB-3F1C-8A91-12258*******
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dailyPlayRegionStatisList' => 'DailyPlayRegionStatisList',
        'emptyDates' => 'EmptyDates',
        'failDates' => 'FailDates',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dailyPlayRegionStatisList) {
            $res['DailyPlayRegionStatisList'] = [];
            if (null !== $this->dailyPlayRegionStatisList && \is_array($this->dailyPlayRegionStatisList)) {
                $n = 0;
                foreach ($this->dailyPlayRegionStatisList as $item) {
                    $res['DailyPlayRegionStatisList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->emptyDates) {
            $res['EmptyDates'] = $this->emptyDates;
        }
        if (null !== $this->failDates) {
            $res['FailDates'] = $this->failDates;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDailyPlayRegionStatisResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DailyPlayRegionStatisList'])) {
            if (!empty($map['DailyPlayRegionStatisList'])) {
                $model->dailyPlayRegionStatisList = [];
                $n = 0;
                foreach ($map['DailyPlayRegionStatisList'] as $item) {
                    $model->dailyPlayRegionStatisList[$n++] = null !== $item ? dailyPlayRegionStatisList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EmptyDates'])) {
            if (!empty($map['EmptyDates'])) {
                $model->emptyDates = $map['EmptyDates'];
            }
        }
        if (isset($map['FailDates'])) {
            if (!empty($map['FailDates'])) {
                $model->failDates = $map['FailDates'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
