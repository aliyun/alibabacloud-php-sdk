<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pcdn\V20170411\Models\GetTrafficDataResponseBody;

use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetTrafficDataResponseBody\dataList\usageData;
use AlibabaCloud\Tea\Model;

class dataList extends Model
{
    /**
     * @var usageData[]
     */
    public $usageData;
    protected $_name = [
        'usageData' => 'UsageData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->usageData) {
            $res['UsageData'] = [];
            if (null !== $this->usageData && \is_array($this->usageData)) {
                $n = 0;
                foreach ($this->usageData as $item) {
                    $res['UsageData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UsageData'])) {
            if (!empty($map['UsageData'])) {
                $model->usageData = [];
                $n                = 0;
                foreach ($map['UsageData'] as $item) {
                    $model->usageData[$n++] = null !== $item ? usageData::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
