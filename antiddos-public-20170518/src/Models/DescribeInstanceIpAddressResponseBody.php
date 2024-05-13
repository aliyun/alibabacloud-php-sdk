<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models;

use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeInstanceIpAddressResponseBody\instanceList;
use AlibabaCloud\Tea\Model;

class DescribeInstanceIpAddressResponseBody extends Model
{
    /**
     * @description An array that consists of details of the instance.
     *
     * @var instanceList[]
     */
    public $instanceList;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example BC0907F8-A9F3-5E11-977B-D59CD98C64ED
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of the assets.
     *
     * @example 1
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'instanceList' => 'InstanceList',
        'requestId'    => 'RequestId',
        'total'        => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceList) {
            $res['InstanceList'] = [];
            if (null !== $this->instanceList && \is_array($this->instanceList)) {
                $n = 0;
                foreach ($this->instanceList as $item) {
                    $res['InstanceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceIpAddressResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceList'])) {
            if (!empty($map['InstanceList'])) {
                $model->instanceList = [];
                $n                   = 0;
                foreach ($map['InstanceList'] as $item) {
                    $model->instanceList[$n++] = null !== $item ? instanceList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
