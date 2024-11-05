<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListOperationHostsResponseBody\hosts;
use AlibabaCloud\Tea\Model;

class ListOperationHostsResponseBody extends Model
{
    /**
     * @description The hosts returned.
     *
     * @var hosts[]
     */
    public $hosts;

    /**
     * @description The request ID.
     *
     * @example 4F6C075F-FC86-476E-943B-097BD4E12948
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of hosts returned.
     *
     * @example 5
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'hosts'      => 'Hosts',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hosts) {
            $res['Hosts'] = [];
            if (null !== $this->hosts && \is_array($this->hosts)) {
                $n = 0;
                foreach ($this->hosts as $item) {
                    $res['Hosts'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListOperationHostsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Hosts'])) {
            if (!empty($map['Hosts'])) {
                $model->hosts = [];
                $n            = 0;
                foreach ($map['Hosts'] as $item) {
                    $model->hosts[$n++] = null !== $item ? hosts::fromMap($item) : $item;
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
