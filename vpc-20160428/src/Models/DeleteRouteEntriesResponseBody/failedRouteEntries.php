<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteRouteEntriesResponseBody;

use AlibabaCloud\Tea\Model;

class failedRouteEntries extends Model
{
    /**
     * @description The destination CIDR block of the route entry that failed to be deleted. IPv4 and IPv6 CIDR blocks are supported.
     *
     * @example 47.100.XX.XX/24
     *
     * @var string
     */
    public $dstCidrBlock;

    /**
     * @description The error code.
     *
     * @example VPC_ROUTER_ENTRY_NOT_EXIST
     *
     * @var string
     */
    public $failedCode;

    /**
     * @description The error message.
     *
     * @example vRouterEntry not exists
     *
     * @var string
     */
    public $failedMessage;

    /**
     * @description The ID of the next hop that failed to be deleted.
     *
     * @example i-j6c2fp57q8rr4jlu****
     *
     * @var string
     */
    public $nextHop;

    /**
     * @description The ID of the route entry that failed to be deleted.
     *
     * @example rte-bp1mnnr2al0naomnpv****
     *
     * @var string
     */
    public $routeEntryId;
    protected $_name = [
        'dstCidrBlock'  => 'DstCidrBlock',
        'failedCode'    => 'FailedCode',
        'failedMessage' => 'FailedMessage',
        'nextHop'       => 'NextHop',
        'routeEntryId'  => 'RouteEntryId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dstCidrBlock) {
            $res['DstCidrBlock'] = $this->dstCidrBlock;
        }
        if (null !== $this->failedCode) {
            $res['FailedCode'] = $this->failedCode;
        }
        if (null !== $this->failedMessage) {
            $res['FailedMessage'] = $this->failedMessage;
        }
        if (null !== $this->nextHop) {
            $res['NextHop'] = $this->nextHop;
        }
        if (null !== $this->routeEntryId) {
            $res['RouteEntryId'] = $this->routeEntryId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return failedRouteEntries
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DstCidrBlock'])) {
            $model->dstCidrBlock = $map['DstCidrBlock'];
        }
        if (isset($map['FailedCode'])) {
            $model->failedCode = $map['FailedCode'];
        }
        if (isset($map['FailedMessage'])) {
            $model->failedMessage = $map['FailedMessage'];
        }
        if (isset($map['NextHop'])) {
            $model->nextHop = $map['NextHop'];
        }
        if (isset($map['RouteEntryId'])) {
            $model->routeEntryId = $map['RouteEntryId'];
        }

        return $model;
    }
}
