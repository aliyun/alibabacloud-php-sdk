<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\GetAdvancedSearchFileResponseBody\resourceSearch;
use AlibabaCloud\Tea\Model;

class GetAdvancedSearchFileResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 9366FE45-3C83-54FB-8BB1-44176B200706
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
     * @return GetAdvancedSearchFileResponseBody
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
