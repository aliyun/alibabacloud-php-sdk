<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainFrameRateAndBitRateDataResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainFrameRateAndBitRateDataResponseBody\frameRateAndBitRateInfos\frameRateAndBitRateInfo;

class frameRateAndBitRateInfos extends Model
{
    /**
     * @var frameRateAndBitRateInfo[]
     */
    public $frameRateAndBitRateInfo;
    protected $_name = [
        'frameRateAndBitRateInfo' => 'FrameRateAndBitRateInfo',
    ];

    public function validate()
    {
        if (\is_array($this->frameRateAndBitRateInfo)) {
            Model::validateArray($this->frameRateAndBitRateInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->frameRateAndBitRateInfo) {
            if (\is_array($this->frameRateAndBitRateInfo)) {
                $res['FrameRateAndBitRateInfo'] = [];
                $n1 = 0;
                foreach ($this->frameRateAndBitRateInfo as $item1) {
                    $res['FrameRateAndBitRateInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['FrameRateAndBitRateInfo'])) {
            if (!empty($map['FrameRateAndBitRateInfo'])) {
                $model->frameRateAndBitRateInfo = [];
                $n1 = 0;
                foreach ($map['FrameRateAndBitRateInfo'] as $item1) {
                    $model->frameRateAndBitRateInfo[$n1] = frameRateAndBitRateInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
