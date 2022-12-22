<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeControlPolicyResponseBody\policys;
use AlibabaCloud\Tea\Model;

class DescribeControlPolicyResponseBody extends Model
{
    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var string
     */
    public $pageNo;

    /**
     * @description The number of entries returned per page.
     *
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The details about the access control policy.
     *
     * @var policys[]
     */
    public $policys;

    /**
     * @description The ID of the request.
     *
     * @example CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of the returned access control policies.
     *
     * @example 100
     *
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'pageNo'     => 'PageNo',
        'pageSize'   => 'PageSize',
        'policys'    => 'Policys',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->policys) {
            $res['Policys'] = [];
            if (null !== $this->policys && \is_array($this->policys)) {
                $n = 0;
                foreach ($this->policys as $item) {
                    $res['Policys'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeControlPolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Policys'])) {
            if (!empty($map['Policys'])) {
                $model->policys = [];
                $n              = 0;
                foreach ($map['Policys'] as $item) {
                    $model->policys[$n++] = null !== $item ? policys::fromMap($item) : $item;
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
