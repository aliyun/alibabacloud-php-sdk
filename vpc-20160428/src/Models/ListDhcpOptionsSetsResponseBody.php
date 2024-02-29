<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ListDhcpOptionsSetsResponseBody\dhcpOptionsSets;
use AlibabaCloud\Tea\Model;

class ListDhcpOptionsSetsResponseBody extends Model
{
    /**
     * @description The list of the DHCP options sets.
     *
     * @var dhcpOptionsSets[]
     */
    public $dhcpOptionsSets;

    /**
     * @description A pagination token. It can be used in the next request to retrieve a new page of results. Valid values:
     *
     *   If **NextToken** is empty, no next page exists.
     *   If a value is returned for **NextToken**, the value is used to retrieve a new page of results.
     *
     * @example FFmyTO70tTpLG6I3FmYAXGKPd********
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The request ID.
     *
     * @example 0ED8D006-F706-4D23-88ED-E11ED28DCAC0
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of entries.
     *
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
