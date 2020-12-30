<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models;

use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeDailyDetailsResponseBody\dailyDetails;
use AlibabaCloud\Tea\Model;

class DescribeDailyDetailsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var dailyDetails[]
     */
    public $dailyDetails;
    protected $_name = [
        'requestId'    => 'RequestId',
        'dailyDetails' => 'DailyDetails',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->dailyDetails) {
            $res['DailyDetails'] = [];
            if (null !== $this->dailyDetails && \is_array($this->dailyDetails)) {
                $n = 0;
                foreach ($this->dailyDetails as $item) {
                    $res['DailyDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDailyDetailsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DailyDetails'])) {
            if (!empty($map['DailyDetails'])) {
                $model->dailyDetails = [];
                $n                   = 0;
                foreach ($map['DailyDetails'] as $item) {
                    $model->dailyDetails[$n++] = null !== $item ? dailyDetails::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
