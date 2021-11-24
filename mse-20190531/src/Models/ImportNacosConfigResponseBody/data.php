<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ImportNacosConfigResponseBody;

use AlibabaCloud\SDK\Mse\V20190531\Models\ImportNacosConfigResponseBody\data\failData;
use AlibabaCloud\SDK\Mse\V20190531\Models\ImportNacosConfigResponseBody\data\skipData;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var failData[]
     */
    public $failData;

    /**
     * @var int
     */
    public $skipCount;

    /**
     * @var skipData[]
     */
    public $skipData;

    /**
     * @var int
     */
    public $succCount;
    protected $_name = [
        'failData'  => 'FailData',
        'skipCount' => 'SkipCount',
        'skipData'  => 'SkipData',
        'succCount' => 'SuccCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failData) {
            $res['FailData'] = [];
            if (null !== $this->failData && \is_array($this->failData)) {
                $n = 0;
                foreach ($this->failData as $item) {
                    $res['FailData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->skipCount) {
            $res['SkipCount'] = $this->skipCount;
        }
        if (null !== $this->skipData) {
            $res['SkipData'] = [];
            if (null !== $this->skipData && \is_array($this->skipData)) {
                $n = 0;
                foreach ($this->skipData as $item) {
                    $res['SkipData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->succCount) {
            $res['SuccCount'] = $this->succCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailData'])) {
            if (!empty($map['FailData'])) {
                $model->failData = [];
                $n               = 0;
                foreach ($map['FailData'] as $item) {
                    $model->failData[$n++] = null !== $item ? failData::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SkipCount'])) {
            $model->skipCount = $map['SkipCount'];
        }
        if (isset($map['SkipData'])) {
            if (!empty($map['SkipData'])) {
                $model->skipData = [];
                $n               = 0;
                foreach ($map['SkipData'] as $item) {
                    $model->skipData[$n++] = null !== $item ? skipData::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SuccCount'])) {
            $model->succCount = $map['SuccCount'];
        }

        return $model;
    }
}
