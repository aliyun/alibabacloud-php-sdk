<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataServiceApiCallStatisticsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataServiceApiCallStatisticsResponseBody\pageResult\callStatisticsList;

class pageResult extends Model
{
    /**
     * @var callStatisticsList[]
     */
    public $callStatisticsList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'callStatisticsList' => 'CallStatisticsList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->callStatisticsList)) {
            Model::validateArray($this->callStatisticsList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callStatisticsList) {
            if (\is_array($this->callStatisticsList)) {
                $res['CallStatisticsList'] = [];
                $n1 = 0;
                foreach ($this->callStatisticsList as $item1) {
                    $res['CallStatisticsList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['CallStatisticsList'])) {
            if (!empty($map['CallStatisticsList'])) {
                $model->callStatisticsList = [];
                $n1 = 0;
                foreach ($map['CallStatisticsList'] as $item1) {
                    $model->callStatisticsList[$n1] = callStatisticsList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
