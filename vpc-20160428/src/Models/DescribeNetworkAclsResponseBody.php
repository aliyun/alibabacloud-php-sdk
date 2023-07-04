<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNetworkAclsResponseBody\networkAcls;
use AlibabaCloud\Tea\Model;

class DescribeNetworkAclsResponseBody extends Model
{
    /**
     * @description The destination port range of the inbound traffic.
     *
     *   If **Protocol** of the inbound rule is set to **all**, **icmp**, or **gre**, the port range is **-1/-1**, which indicates all ports.
     *   If **Protocol** of the inbound rule is set to **tcp** or **udp**, the port range is in the following format: **1/200** or **80/80**. 1/200 indicates port 1 to port 200. 80/80 indicates port 80. Valid values for a port: **1** to **65535**.
     *
     * @var networkAcls
     */
    public $networkAcls;

    /**
     * @description The source CIDR block.
     *
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @description The action to be performed on network traffic that matches the rule. Valid values:
     *
     *   **accept**: allows network traffic.
     *   **drop**: blocks network traffic.
     *
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The description of the inbound rule.
     *
     * @example F7DDDC17-FA06-4AC2-8F35-59D2470FCFC1
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The protocol. Valid values:
     *
     *   **icmp**: ICMP
     *   **gre**: GRE
     *   **tcp**: TCP
     *   **udp**: UDP
     *   **all**: all protocols
     *
     * @example 2
     *
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'networkAcls' => 'NetworkAcls',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'requestId'   => 'RequestId',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkAcls) {
            $res['NetworkAcls'] = null !== $this->networkAcls ? $this->networkAcls->toMap() : null;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
     * @return DescribeNetworkAclsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkAcls'])) {
            $model->networkAcls = networkAcls::fromMap($map['NetworkAcls']);
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
