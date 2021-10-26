<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\SDK\Ga\V20191120\Models\ListSystemSecurityPoliciesResponseBody\securityPolicies;
use AlibabaCloud\Tea\Model;

class ListSystemSecurityPoliciesResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var securityPolicies[]
     */
    public $securityPolicies;
    protected $_name = [
        'requestId'        => 'RequestId',
        'totalCount'       => 'TotalCount',
        'pageSize'         => 'PageSize',
        'pageNumber'       => 'PageNumber',
        'securityPolicies' => 'SecurityPolicies',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->securityPolicies) {
            $res['SecurityPolicies'] = [];
            if (null !== $this->securityPolicies && \is_array($this->securityPolicies)) {
                $n = 0;
                foreach ($this->securityPolicies as $item) {
                    $res['SecurityPolicies'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSystemSecurityPoliciesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['SecurityPolicies'])) {
            if (!empty($map['SecurityPolicies'])) {
                $model->securityPolicies = [];
                $n                       = 0;
                foreach ($map['SecurityPolicies'] as $item) {
                    $model->securityPolicies[$n++] = null !== $item ? securityPolicies::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
