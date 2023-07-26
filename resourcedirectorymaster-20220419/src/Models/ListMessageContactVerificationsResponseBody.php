<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models;

use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ListMessageContactVerificationsResponseBody\contactVerifications;
use AlibabaCloud\Tea\Model;

class ListMessageContactVerificationsResponseBody extends Model
{
    /**
     * @description The record for the contact to be verified.
     *
     * @var contactVerifications[]
     */
    public $contactVerifications;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The request ID.
     *
     * @example CD76D376-2517-4924-92C5-DBC52262F93A
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 48
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'contactVerifications' => 'ContactVerifications',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'requestId'            => 'RequestId',
        'totalCount'           => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactVerifications) {
            $res['ContactVerifications'] = [];
            if (null !== $this->contactVerifications && \is_array($this->contactVerifications)) {
                $n = 0;
                foreach ($this->contactVerifications as $item) {
                    $res['ContactVerifications'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return ListMessageContactVerificationsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactVerifications'])) {
            if (!empty($map['ContactVerifications'])) {
                $model->contactVerifications = [];
                $n                           = 0;
                foreach ($map['ContactVerifications'] as $item) {
                    $model->contactVerifications[$n++] = null !== $item ? contactVerifications::fromMap($item) : $item;
                }
            }
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
