<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIpv6EgressOnlyRulesResponseBody\ipv6EgressOnlyRules;
use AlibabaCloud\Tea\Model;

class DescribeIpv6EgressOnlyRulesResponseBody extends Model
{
    /**
     * @var ipv6EgressOnlyRules
     */
    public $ipv6EgressOnlyRules;

    /**
     * @var int
     */
    public $pageNumber;

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
    public $totalCount;
    protected $_name = [
        'ipv6EgressOnlyRules' => 'Ipv6EgressOnlyRules',
        'pageNumber'          => 'PageNumber',
        'pageSize'            => 'PageSize',
        'requestId'           => 'RequestId',
        'totalCount'          => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipv6EgressOnlyRules) {
            $res['Ipv6EgressOnlyRules'] = null !== $this->ipv6EgressOnlyRules ? $this->ipv6EgressOnlyRules->toMap() : null;
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
     * @return DescribeIpv6EgressOnlyRulesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ipv6EgressOnlyRules'])) {
            $model->ipv6EgressOnlyRules = ipv6EgressOnlyRules::fromMap($map['Ipv6EgressOnlyRules']);
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
