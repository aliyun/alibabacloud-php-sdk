<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ImportNacosConfigResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\ImportNacosConfigResponseBody\data\failData;
use AlibabaCloud\SDK\Mse\V20190531\Models\ImportNacosConfigResponseBody\data\skipData;

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
        'failData' => 'FailData',
        'skipCount' => 'SkipCount',
        'skipData' => 'SkipData',
        'succCount' => 'SuccCount',
    ];

    public function validate()
    {
        if (\is_array($this->failData)) {
            Model::validateArray($this->failData);
        }
        if (\is_array($this->skipData)) {
            Model::validateArray($this->skipData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failData) {
            if (\is_array($this->failData)) {
                $res['FailData'] = [];
                $n1 = 0;
                foreach ($this->failData as $item1) {
                    $res['FailData'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->skipCount) {
            $res['SkipCount'] = $this->skipCount;
        }

        if (null !== $this->skipData) {
            if (\is_array($this->skipData)) {
                $res['SkipData'] = [];
                $n1 = 0;
                foreach ($this->skipData as $item1) {
                    $res['SkipData'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->succCount) {
            $res['SuccCount'] = $this->succCount;
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
        if (isset($map['FailData'])) {
            if (!empty($map['FailData'])) {
                $model->failData = [];
                $n1 = 0;
                foreach ($map['FailData'] as $item1) {
                    $model->failData[$n1] = failData::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SkipCount'])) {
            $model->skipCount = $map['SkipCount'];
        }

        if (isset($map['SkipData'])) {
            if (!empty($map['SkipData'])) {
                $model->skipData = [];
                $n1 = 0;
                foreach ($map['SkipData'] as $item1) {
                    $model->skipData[$n1] = skipData::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SuccCount'])) {
            $model->succCount = $map['SuccCount'];
        }

        return $model;
    }
}
