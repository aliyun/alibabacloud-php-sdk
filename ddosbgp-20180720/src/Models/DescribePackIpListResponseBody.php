<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribePackIpListResponseBody\ipList;
use AlibabaCloud\Tea\Model;

class DescribePackIpListResponseBody extends Model
{
    /**
     * @description The HTTP status code of the request.
     *
     * For more information about status codes, see [Common parameters](https://help.aliyun.com/document_detail/118841.html).
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The IP addresses that are protected by the instance.
     *
     * @var ipList[]
     */
    public $ipList;

    /**
     * @description The ID of the request.
     *
     * @example 4FD1578A-BD77-50B7-A969-45A374A7ED22
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request is successful. Valid values:
     *
     *   **true**: The call is successful.
     *   **false**: The call fails.
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The number of protected IP addresses.
     *
     * @example 1
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'code'      => 'Code',
        'ipList'    => 'IpList',
        'requestId' => 'RequestId',
        'success'   => 'Success',
        'total'     => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->ipList) {
            $res['IpList'] = [];
            if (null !== $this->ipList && \is_array($this->ipList)) {
                $n = 0;
                foreach ($this->ipList as $item) {
                    $res['IpList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePackIpListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['IpList'])) {
            if (!empty($map['IpList'])) {
                $model->ipList = [];
                $n             = 0;
                foreach ($map['IpList'] as $item) {
                    $model->ipList[$n++] = null !== $item ? ipList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
