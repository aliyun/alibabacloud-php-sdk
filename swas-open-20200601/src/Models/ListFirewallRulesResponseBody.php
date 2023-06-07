<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListFirewallRulesResponseBody\firewallRules;
use AlibabaCloud\Tea\Model;

class ListFirewallRulesResponseBody extends Model
{
    /**
     * @description Details about the firewall rules.
     *
     * @var firewallRules[]
     */
    public $firewallRules;

    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the request.
     *
     * @example 20758A-585D-4A41-A9B2-28DA8F4F534F
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of firewall rules.
     *
     * @example 4
     *
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
