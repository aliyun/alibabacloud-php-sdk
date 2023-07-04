<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\CreateRouteEntriesResponseBody;

use AlibabaCloud\Tea\Model;

class failedRouteEntries extends Model
{
    /**
     * @description The error message.
     *
     * @example 192.168.0.0/24
     *
     * @var string
     */
    public $dstCidrBlock;

    /**
     * @example VPC_ROUTE_ENTRY_CIDR_BLOCK_DUPLICATE
     *
     * @var string
     */
    public $failedCode;

    /**
     * @example Specified CIDR block is already exists, entry.cidrBlock=xxxx
     *
     * @var string
     */
    public $failedMessage;

    /**
     * @description The ID of the custom route entry that was successfully added.
     *
     * @example i-j6c2fp57q8rr4jlu****
     *
     * @var string
     */
    public $nextHop;
    protected $_name = [
        'dstCidrBlock'  => 'DstCidrBlock',
        'failedCode'    => 'FailedCode',
        'failedMessage' => 'FailedMessage',
        'nextHop'       => 'NextHop',
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

        return $model;
    }
}
