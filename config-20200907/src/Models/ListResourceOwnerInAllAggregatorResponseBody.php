<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\ListResourceOwnerInAllAggregatorResponseBody\accountInAggregator;
use AlibabaCloud\Tea\Model;

class ListResourceOwnerInAllAggregatorResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var accountInAggregator[]
     */
    public $accountInAggregator;
    protected $_name = [
        'requestId'           => 'RequestId',
        'accountInAggregator' => 'AccountInAggregator',
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
        if (null !== $this->accountInAggregator) {
            $res['AccountInAggregator'] = [];
            if (null !== $this->accountInAggregator && \is_array($this->accountInAggregator)) {
                $n = 0;
                foreach ($this->accountInAggregator as $item) {
                    $res['AccountInAggregator'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListResourceOwnerInAllAggregatorResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AccountInAggregator'])) {
            if (!empty($map['AccountInAggregator'])) {
                $model->accountInAggregator = [];
                $n                          = 0;
                foreach ($map['AccountInAggregator'] as $item) {
                    $model->accountInAggregator[$n++] = null !== $item ? accountInAggregator::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
