<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ListDhcpOptionsSetsResponseBody\dhcpOptionsSets;
use AlibabaCloud\Tea\Model;

class ListDhcpOptionsSetsResponseBody extends Model
{
    /**
     * @description The number of VPCs with which the DHCP options set is associated.
     *
     * @var dhcpOptionsSets[]
     */
    public $dhcpOptionsSets;

    /**
     * @description The ID of the DHCP options set.
     *
     * @example FFmyTO70tTpLG6I3FmYAXGKPd********
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The name of the DHCP options set.
     *
     * @example 0ED8D006-F706-4D23-88ED-E11ED28DCAC0
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 10
     *
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'dhcpOptionsSets' => 'DhcpOptionsSets',
        'nextToken'       => 'NextToken',
        'requestId'       => 'RequestId',
        'totalCount'      => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dhcpOptionsSets) {
            $res['DhcpOptionsSets'] = [];
            if (null !== $this->dhcpOptionsSets && \is_array($this->dhcpOptionsSets)) {
                $n = 0;
                foreach ($this->dhcpOptionsSets as $item) {
                    $res['DhcpOptionsSets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
     * @return ListDhcpOptionsSetsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DhcpOptionsSets'])) {
            if (!empty($map['DhcpOptionsSets'])) {
                $model->dhcpOptionsSets = [];
                $n                      = 0;
                foreach ($map['DhcpOptionsSets'] as $item) {
                    $model->dhcpOptionsSets[$n++] = null !== $item ? dhcpOptionsSets::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
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
