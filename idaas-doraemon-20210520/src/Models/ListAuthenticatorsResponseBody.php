<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models;

use AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\ListAuthenticatorsResponseBody\authenticator;
use AlibabaCloud\Tea\Model;

class ListAuthenticatorsResponseBody extends Model
{
    /**
     * @var authenticator[]
     */
    public $authenticator;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 5
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 531FA210-6F3D-5368-9AE2-AD7B9D1D5CAA
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 13
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'authenticator' => 'Authenticator',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'requestId'     => 'RequestId',
        'totalCount'    => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authenticator) {
            $res['Authenticator'] = [];
            if (null !== $this->authenticator && \is_array($this->authenticator)) {
                $n = 0;
                foreach ($this->authenticator as $item) {
                    $res['Authenticator'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListAuthenticatorsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Authenticator'])) {
            if (!empty($map['Authenticator'])) {
                $model->authenticator = [];
                $n                    = 0;
                foreach ($map['Authenticator'] as $item) {
                    $model->authenticator[$n++] = null !== $item ? authenticator::fromMap($item) : $item;
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
