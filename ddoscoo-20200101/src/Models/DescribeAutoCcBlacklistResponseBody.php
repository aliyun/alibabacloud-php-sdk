<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeAutoCcBlacklistResponseBody\autoCcBlacklist;
use AlibabaCloud\Tea\Model;

class DescribeAutoCcBlacklistResponseBody extends Model
{
    /**
     * @description An array that consists of the details of the IP addresses in the blacklist of the instance.
     *
     * @var autoCcBlacklist[]
     */
    public $autoCcBlacklist;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example E78C8472-0B15-42D5-AF22-A32A78818AB2
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of returned IP addresses in the blacklist.
     *
     * @example 2
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'autoCcBlacklist' => 'AutoCcBlacklist',
        'requestId'       => 'RequestId',
        'totalCount'      => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoCcBlacklist) {
            $res['AutoCcBlacklist'] = [];
            if (null !== $this->autoCcBlacklist && \is_array($this->autoCcBlacklist)) {
                $n = 0;
                foreach ($this->autoCcBlacklist as $item) {
                    $res['AutoCcBlacklist'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeAutoCcBlacklistResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoCcBlacklist'])) {
            if (!empty($map['AutoCcBlacklist'])) {
                $model->autoCcBlacklist = [];
                $n                      = 0;
                foreach ($map['AutoCcBlacklist'] as $item) {
                    $model->autoCcBlacklist[$n++] = null !== $item ? autoCcBlacklist::fromMap($item) : $item;
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
