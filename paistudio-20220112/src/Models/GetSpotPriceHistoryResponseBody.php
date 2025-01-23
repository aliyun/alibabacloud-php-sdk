<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class GetSpotPriceHistoryResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var SpotPriceItem[]
     */
    public $spotPriceHistory;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId'        => 'RequestId',
        'spotPriceHistory' => 'SpotPriceHistory',
        'totalCount'       => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->spotPriceHistory)) {
            Model::validateArray($this->spotPriceHistory);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->spotPriceHistory) {
            if (\is_array($this->spotPriceHistory)) {
                $res['SpotPriceHistory'] = [];
                $n1                      = 0;
                foreach ($this->spotPriceHistory as $item1) {
                    $res['SpotPriceHistory'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SpotPriceHistory'])) {
            if (!empty($map['SpotPriceHistory'])) {
                $model->spotPriceHistory = [];
                $n1                      = 0;
                foreach ($map['SpotPriceHistory'] as $item1) {
                    $model->spotPriceHistory[$n1++] = SpotPriceItem::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
