<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedInstanceListResponseBody\exposedInstances;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedInstanceListResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

class DescribeExposedInstanceListResponseBody extends Model
{
    /**
     * @description The port that is exposed on the Internet.
     *
     * @var exposedInstances[]
     */
    public $exposedInstances;

    /**
     * @description The public IP address of the server.
     *
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @description The resource from which the asset is exposed. Valid values:
     *
     *   **INTERNET_IP**: the public IP address of an ECS instance
     *   **SLB**: the public IP address of a Server Load Balancer (SLB) instance
     *   **EIP**: an elastic IP address (EIP)
     *   **DNAT**: the NAT gateway that connects to the Internet by using the DNAT feature
     *
     * @example 598A4A61-ABA7-456B-8725-7378258276D9
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'exposedInstances' => 'ExposedInstances',
        'pageInfo'         => 'PageInfo',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->exposedInstances) {
            $res['ExposedInstances'] = [];
            if (null !== $this->exposedInstances && \is_array($this->exposedInstances)) {
                $n = 0;
                foreach ($this->exposedInstances as $item) {
                    $res['ExposedInstances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeExposedInstanceListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExposedInstances'])) {
            if (!empty($map['ExposedInstances'])) {
                $model->exposedInstances = [];
                $n                       = 0;
                foreach ($map['ExposedInstances'] as $item) {
                    $model->exposedInstances[$n++] = null !== $item ? exposedInstances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
