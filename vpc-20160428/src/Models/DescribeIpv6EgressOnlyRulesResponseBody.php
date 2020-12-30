<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIpv6EgressOnlyRulesResponseBody\ipv6EgressOnlyRules;
use AlibabaCloud\Tea\Model;

class DescribeIpv6EgressOnlyRulesResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var ipv6EgressOnlyRules
     */
    public $ipv6EgressOnlyRules;
    protected $_name = [
        'totalCount'          => 'TotalCount',
        'pageSize'            => 'PageSize',
        'requestId'           => 'RequestId',
        'pageNumber'          => 'PageNumber',
        'ipv6EgressOnlyRules' => 'Ipv6EgressOnlyRules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->ipv6EgressOnlyRules) {
            $res['Ipv6EgressOnlyRules'] = null !== $this->ipv6EgressOnlyRules ? $this->ipv6EgressOnlyRules->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeIpv6EgressOnlyRulesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['Ipv6EgressOnlyRules'])) {
            $model->ipv6EgressOnlyRules = ipv6EgressOnlyRules::fromMap($map['Ipv6EgressOnlyRules']);
        }

        return $model;
    }
}
