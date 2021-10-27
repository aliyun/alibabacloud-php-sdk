<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListFirewallRulesResponseBody\firewallRules;
use AlibabaCloud\Tea\Model;

class ListFirewallRulesResponseBody extends Model
{
    /**
     * @var firewallRules[]
     */
    public $firewallRules;

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
        'firewallRules' => 'FirewallRules',
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
        if (null !== $this->firewallRules) {
            $res['FirewallRules'] = [];
            if (null !== $this->firewallRules && \is_array($this->firewallRules)) {
                $n = 0;
                foreach ($this->firewallRules as $item) {
                    $res['FirewallRules'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListFirewallRulesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FirewallRules'])) {
            if (!empty($map['FirewallRules'])) {
                $model->firewallRules = [];
                $n                    = 0;
                foreach ($map['FirewallRules'] as $item) {
                    $model->firewallRules[$n++] = null !== $item ? firewallRules::fromMap($item) : $item;
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
