<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeVirtualMFADevicesResponse\virtualMFADevices;
use AlibabaCloud\Tea\Model;

class DescribeVirtualMFADevicesResponse extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
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
        Model::validateRequired('nextToken', $this->nextToken, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('virtualMFADevices', $this->virtualMFADevices, true);
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
     * @return DescribeVirtualMFADevicesResponse
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
