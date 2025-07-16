<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainRealTimeSrcHttpCodeDataResponseBody;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainRealTimeSrcHttpCodeDataResponseBody\realTimeSrcHttpCodeData\usageData;
use AlibabaCloud\Tea\Model;

class realTimeSrcHttpCodeData extends Model
{
    /**
     * @var usageData[]
     */
    public $usageData;
    protected $_name = [
        'usageData' => 'UsageData',
    ];

    public function validate() {}

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
     * @return realTimeSrcHttpCodeData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UsageData'])) {
            if (!empty($map['UsageData'])) {
                $model->usageData = [];
                $n = 0;
                foreach ($map['UsageData'] as $item) {
                    $model->usageData[$n++] = null !== $item ? usageData::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
