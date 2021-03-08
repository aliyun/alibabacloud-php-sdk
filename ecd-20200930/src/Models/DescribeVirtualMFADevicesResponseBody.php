<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeVirtualMFADevicesResponseBody\virtualMFADevices;
use AlibabaCloud\Tea\Model;

class DescribeVirtualMFADevicesResponseBody extends Model
{
    /**
     * @var virtualMFADevices[]
     */
    public $virtualMFADevices;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'virtualMFADevices' => 'VirtualMFADevices',
        'nextToken'         => 'NextToken',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->virtualMFADevices) {
            $res['VirtualMFADevices'] = [];
            if (null !== $this->virtualMFADevices && \is_array($this->virtualMFADevices)) {
                $n = 0;
                foreach ($this->virtualMFADevices as $item) {
                    $res['VirtualMFADevices'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVirtualMFADevicesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VirtualMFADevices'])) {
            if (!empty($map['VirtualMFADevices'])) {
                $model->virtualMFADevices = [];
                $n                        = 0;
                foreach ($map['VirtualMFADevices'] as $item) {
                    $model->virtualMFADevices[$n++] = null !== $item ? virtualMFADevices::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
