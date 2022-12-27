<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkAclsResponseBody\networkAcls;
use AlibabaCloud\Tea\Model;

class DescribeNetworkAclsResponseBody extends Model
{
    /**
     * @var networkAcls[]
     */
    public $networkAcls;

    /**
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @example 2
     *
     * @var string
     */
    public $pageSize;

    /**
     * @example A1707FC0-430C-423A-B624-284046B20399
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 3
     *
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'networkAcls' => 'NetworkAcls',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'requestId'   => 'RequestId',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkAcls) {
            $res['NetworkAcls'] = [];
            if (null !== $this->networkAcls && \is_array($this->networkAcls)) {
                $n = 0;
                foreach ($this->networkAcls as $item) {
                    $res['NetworkAcls'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeNetworkAclsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkAcls'])) {
            if (!empty($map['NetworkAcls'])) {
                $model->networkAcls = [];
                $n                  = 0;
                foreach ($map['NetworkAcls'] as $item) {
                    $model->networkAcls[$n++] = null !== $item ? networkAcls::fromMap($item) : $item;
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
