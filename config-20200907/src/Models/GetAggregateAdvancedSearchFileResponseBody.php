<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateAdvancedSearchFileResponseBody\resourceSearch;

class GetAggregateAdvancedSearchFileResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var resourceSearch
     */
    public $resourceSearch;
    protected $_name = [
        'requestId'      => 'RequestId',
        'resourceSearch' => 'ResourceSearch',
    ];

    public function validate()
    {
        if (null !== $this->resourceSearch) {
            $this->resourceSearch->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceSearch) {
            $res['ResourceSearch'] = null !== $this->resourceSearch ? $this->resourceSearch->toArray($noStream) : $this->resourceSearch;
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

        if (isset($map['ResourceSearch'])) {
            $model->resourceSearch = resourceSearch::fromMap($map['ResourceSearch']);
        }

        return $model;
    }
}
