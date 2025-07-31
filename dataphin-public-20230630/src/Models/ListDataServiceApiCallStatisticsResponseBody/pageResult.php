<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataServiceApiCallStatisticsResponseBody;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataServiceApiCallStatisticsResponseBody\pageResult\callStatisticsList;
use AlibabaCloud\Tea\Model;

class pageResult extends Model
{
    /**
     * @var callStatisticsList[]
     */
    public $callStatisticsList;

    /**
     * @example 68
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'callStatisticsList' => 'CallStatisticsList',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->callStatisticsList) {
            $res['CallStatisticsList'] = [];
            if (null !== $this->callStatisticsList && \is_array($this->callStatisticsList)) {
                $n = 0;
                foreach ($this->callStatisticsList as $item) {
                    $res['CallStatisticsList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return pageResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallStatisticsList'])) {
            if (!empty($map['CallStatisticsList'])) {
                $model->callStatisticsList = [];
                $n = 0;
                foreach ($map['CallStatisticsList'] as $item) {
                    $model->callStatisticsList[$n++] = null !== $item ? callStatisticsList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
