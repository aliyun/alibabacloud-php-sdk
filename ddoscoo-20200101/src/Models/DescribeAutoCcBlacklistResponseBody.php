<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeAutoCcBlacklistResponseBody\autoCcBlacklist;
use AlibabaCloud\Tea\Model;

class DescribeAutoCcBlacklistResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var autoCcBlacklist[]
     */
    public $autoCcBlacklist;
    protected $_name = [
        'totalCount'      => 'TotalCount',
        'requestId'       => 'RequestId',
        'autoCcBlacklist' => 'AutoCcBlacklist',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->autoCcBlacklist) {
            $res['AutoCcBlacklist'] = [];
            if (null !== $this->autoCcBlacklist && \is_array($this->autoCcBlacklist)) {
                $n = 0;
                foreach ($this->autoCcBlacklist as $item) {
                    $res['AutoCcBlacklist'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AutoCcBlacklist'])) {
            if (!empty($map['AutoCcBlacklist'])) {
                $model->autoCcBlacklist = [];
                $n                      = 0;
                foreach ($map['AutoCcBlacklist'] as $item) {
                    $model->autoCcBlacklist[$n++] = null !== $item ? autoCcBlacklist::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
