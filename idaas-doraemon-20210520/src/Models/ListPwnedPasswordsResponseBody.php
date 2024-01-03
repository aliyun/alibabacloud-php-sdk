<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models;

use AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\ListPwnedPasswordsResponseBody\pwnedPasswordInfos;
use AlibabaCloud\Tea\Model;

class ListPwnedPasswordsResponseBody extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var pwnedPasswordInfos[]
     */
    public $pwnedPasswordInfos;

    /**
     * @description Id of the request
     *
     * @example D0F570B0-89CE-07F2-B41E-F97E089E13C6
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 80
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNumber'         => 'PageNumber',
        'pageSize'           => 'PageSize',
        'pwnedPasswordInfos' => 'PwnedPasswordInfos',
        'requestId'          => 'RequestId',
        'totalCount'         => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pwnedPasswordInfos) {
            $res['PwnedPasswordInfos'] = [];
            if (null !== $this->pwnedPasswordInfos && \is_array($this->pwnedPasswordInfos)) {
                $n = 0;
                foreach ($this->pwnedPasswordInfos as $item) {
                    $res['PwnedPasswordInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return ListPwnedPasswordsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PwnedPasswordInfos'])) {
            if (!empty($map['PwnedPasswordInfos'])) {
                $model->pwnedPasswordInfos = [];
                $n                         = 0;
                foreach ($map['PwnedPasswordInfos'] as $item) {
                    $model->pwnedPasswordInfos[$n++] = null !== $item ? pwnedPasswordInfos::fromMap($item) : $item;
                }
            }
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
