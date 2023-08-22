<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepositoryResponseBody\repositories;
use AlibabaCloud\Tea\Model;

class ListRepositoryResponseBody extends Model
{
    /**
     * @example success
     *
     * @var string
     */
    public $code;

    /**
     * @example true
     *
     * @var bool
     */
    public $isSuccess;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var repositories[]
     */
    public $repositories;

    /**
     * @example 5241C090-DA69-4B0F-8E3F-2F24FDE1110E
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1
     *
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'code'         => 'Code',
        'isSuccess'    => 'IsSuccess',
        'pageNo'       => 'PageNo',
        'pageSize'     => 'PageSize',
        'repositories' => 'Repositories',
        'requestId'    => 'RequestId',
        'totalCount'   => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->repositories) {
            $res['Repositories'] = [];
            if (null !== $this->repositories && \is_array($this->repositories)) {
                $n = 0;
                foreach ($this->repositories as $item) {
                    $res['Repositories'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListRepositoryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Repositories'])) {
            if (!empty($map['Repositories'])) {
                $model->repositories = [];
                $n                   = 0;
                foreach ($map['Repositories'] as $item) {
                    $model->repositories[$n++] = null !== $item ? repositories::fromMap($item) : $item;
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
