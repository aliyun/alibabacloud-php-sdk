<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveCenterStreamRateDataResponseBody\rateDatas;

class DescribeLiveCenterStreamRateDataResponseBody extends Model
{
    /**
     * @var rateDatas[]
     */
    public $rateDatas;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'rateDatas' => 'RateDatas',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->rateDatas)) {
            Model::validateArray($this->rateDatas);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->rateDatas) {
            if (\is_array($this->rateDatas)) {
                $res['RateDatas'] = [];
                $n1 = 0;
                foreach ($this->rateDatas as $item1) {
                    $res['RateDatas'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['RateDatas'])) {
            if (!empty($map['RateDatas'])) {
                $model->rateDatas = [];
                $n1 = 0;
                foreach ($map['RateDatas'] as $item1) {
                    $model->rateDatas[$n1] = rateDatas::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
