<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeVirtualMFADevicesResponseBody\virtualMFADevices;
use AlibabaCloud\Tea\Model;

class DescribeVirtualMFADevicesResponseBody extends Model
{
    /**
     * @description The token that determines the start point of the next query. This parameter is empty if no additional results exist.
     *
     * @example AAAAAV3MpHK1AP0pfERHZN5pu6nmB7qrRFJ8vmttjxPL23as
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the request.
     *
     * @example FB550AAB-FB36-4A91-93F6-F4374AF65403
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Details of the virtual MFA devices.
     *
     * @var virtualMFADevices[]
     */
    public $virtualMFADevices;
    protected $_name = [
        'nextToken'         => 'NextToken',
        'requestId'         => 'RequestId',
        'virtualMFADevices' => 'VirtualMFADevices',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->virtualMFADevices) {
            $res['VirtualMFADevices'] = [];
            if (null !== $this->virtualMFADevices && \is_array($this->virtualMFADevices)) {
                $n = 0;
                foreach ($this->virtualMFADevices as $item) {
                    $res['VirtualMFADevices'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VirtualMFADevices'])) {
            if (!empty($map['VirtualMFADevices'])) {
                $model->virtualMFADevices = [];
                $n                        = 0;
                foreach ($map['VirtualMFADevices'] as $item) {
                    $model->virtualMFADevices[$n++] = null !== $item ? virtualMFADevices::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
