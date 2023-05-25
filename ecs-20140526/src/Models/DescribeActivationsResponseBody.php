<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeActivationsResponseBody\activationList;
use AlibabaCloud\Tea\Model;

class DescribeActivationsResponseBody extends Model
{
    /**
     * @description The number of instances that were deregistered.
     *
     * @var activationList[]
     */
    public $activationList;

    /**
     * @description Details about the activation code and its usage information.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The page number of the returned page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The total number of entries returned.
     *
     * @example 4ECEEE12-56F1-4FBC-9AB1-890F74625134
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The time when the activation code was created.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'activationList' => 'ActivationList',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'requestId'      => 'RequestId',
        'totalCount'     => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activationList) {
            $res['ActivationList'] = [];
            if (null !== $this->activationList && \is_array($this->activationList)) {
                $n = 0;
                foreach ($this->activationList as $item) {
                    $res['ActivationList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeActivationsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActivationList'])) {
            if (!empty($map['ActivationList'])) {
                $model->activationList = [];
                $n                     = 0;
                foreach ($map['ActivationList'] as $item) {
                    $model->activationList[$n++] = null !== $item ? activationList::fromMap($item) : $item;
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
