<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateAdvancedSearchFileResponseBody\resourceSearch;
use AlibabaCloud\Tea\Model;

class GetAggregateAdvancedSearchFileResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 6DB86284-DB7F-5936-B210-3B53D6D41B03
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the resource file.
     *
     * @var resourceSearch
     */
    public $resourceSearch;
    protected $_name = [
        'requestId'      => 'RequestId',
        'resourceSearch' => 'ResourceSearch',
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
        if (null !== $this->resourceSearch) {
            $res['ResourceSearch'] = null !== $this->resourceSearch ? $this->resourceSearch->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAggregateAdvancedSearchFileResponseBody
     */
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
