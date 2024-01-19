<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models;

use AlibabaCloud\SDK\Smc\V20190601\Models\ListAccessTokensResponseBody\accessTokens;
use AlibabaCloud\Tea\Model;

class ListAccessTokensResponseBody extends Model
{
    /**
     * @description The activation codes returned.
     *
     * @var accessTokens
     */
    public $accessTokens;

    /**
     * @description The number of entries per page. Valid values:
     *
     *   10
     *   20
     *   50
     *
     * Default value: 20.
     * @example 20
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The request ID.
     *
     * @example E2DA3097-79B9-53AE-B0DF-281DC54F****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of migration sources returned.
     *
     * @example 2
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'accessTokens' => 'AccessTokens',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'requestId'    => 'RequestId',
        'totalCount'   => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessTokens) {
            $res['AccessTokens'] = null !== $this->accessTokens ? $this->accessTokens->toMap() : null;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAccessTokensResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessTokens'])) {
            $model->accessTokens = accessTokens::fromMap($map['AccessTokens']);
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
