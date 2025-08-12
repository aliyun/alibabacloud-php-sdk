<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamPushMetricDetailDataResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamPushMetricDetailDataResponseBody\streamDetailData\streamData;

class streamDetailData extends Model
{
    /**
     * @var streamData[]
     */
    public $streamData;
    protected $_name = [
        'streamData' => 'StreamData',
    ];

    public function validate()
    {
        if (\is_array($this->streamData)) {
            Model::validateArray($this->streamData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->streamData) {
            if (\is_array($this->streamData)) {
                $res['StreamData'] = [];
                $n1 = 0;
                foreach ($this->streamData as $item1) {
                    $res['StreamData'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['StreamData'])) {
            if (!empty($map['StreamData'])) {
                $model->streamData = [];
                $n1 = 0;
                foreach ($map['StreamData'] as $item1) {
                    $model->streamData[$n1] = streamData::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
