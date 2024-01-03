<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models;

use AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\ListAuthenticationLogsResponseBody\authenticationLogContent;
use AlibabaCloud\Tea\Model;

class ListAuthenticationLogsResponseBody extends Model
{
    /**
     * @var authenticationLogContent[]
     */
    public $authenticationLogContent;

    /**
     * @example 1
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
     * @example F620E712-F325-520D-BE1A-E2421B062F57
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 3
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'authenticationLogContent' => 'AuthenticationLogContent',
        'pageNumber'               => 'PageNumber',
        'pageSize'                 => 'PageSize',
        'requestId'                => 'RequestId',
        'totalCount'               => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authenticationLogContent) {
            $res['AuthenticationLogContent'] = [];
            if (null !== $this->authenticationLogContent && \is_array($this->authenticationLogContent)) {
                $n = 0;
                foreach ($this->authenticationLogContent as $item) {
                    $res['AuthenticationLogContent'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListAuthenticationLogsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthenticationLogContent'])) {
            if (!empty($map['AuthenticationLogContent'])) {
                $model->authenticationLogContent = [];
                $n                               = 0;
                foreach ($map['AuthenticationLogContent'] as $item) {
                    $model->authenticationLogContent[$n++] = null !== $item ? authenticationLogContent::fromMap($item) : $item;
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
