<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\SDK\Kms\V20160120\Models\ListAliasesResponseBody\aliases;
use AlibabaCloud\Tea\Model;

class ListAliasesResponseBody extends Model
{
    /**
     * @description The alias of the user.
     *
     * @var aliases
     */
    public $aliases;

    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the request.
     *
     * @example 1b57992c-834b-4811-a889-f8bac1ba0353
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of returned aliases.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'aliases'    => 'Aliases',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliases) {
            $res['Aliases'] = null !== $this->aliases ? $this->aliases->toMap() : null;
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
     * @return ListAliasesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Aliases'])) {
            $model->aliases = aliases::fromMap($map['Aliases']);
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
