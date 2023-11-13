<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeAutoCcWhitelistResponseBody\autoCcWhitelist;
use AlibabaCloud\Tea\Model;

class DescribeAutoCcWhitelistResponseBody extends Model
{
    /**
     * @description An array that consists of details of the IP address in the whitelist of the instance.
     *
     * @var autoCcWhitelist[]
     */
    public $autoCcWhitelist;

    /**
     * @description The ID of the request.
     *
     * @example F09D085E-5E0F-4FF2-B32E-F4A644049162
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of returned IP addresses in the whitelist.
     *
     * @example 2
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'autoCcWhitelist' => 'AutoCcWhitelist',
        'requestId'       => 'RequestId',
        'totalCount'      => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoCcWhitelist) {
            $res['AutoCcWhitelist'] = [];
            if (null !== $this->autoCcWhitelist && \is_array($this->autoCcWhitelist)) {
                $n = 0;
                foreach ($this->autoCcWhitelist as $item) {
                    $res['AutoCcWhitelist'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return DescribeAutoCcWhitelistResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoCcWhitelist'])) {
            if (!empty($map['AutoCcWhitelist'])) {
                $model->autoCcWhitelist = [];
                $n                      = 0;
                foreach ($map['AutoCcWhitelist'] as $item) {
                    $model->autoCcWhitelist[$n++] = null !== $item ? autoCcWhitelist::fromMap($item) : $item;
                }
            }
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
