<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeVirtualMFADevicesResponseBody\virtualMFADevices;

class DescribeVirtualMFADevicesResponseBody extends Model
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
        if (\is_array($this->virtualMFADevices)) {
            Model::validateArray($this->virtualMFADevices);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->virtualMFADevices) {
            if (\is_array($this->virtualMFADevices)) {
                $res['VirtualMFADevices'] = [];
                $n1                       = 0;
                foreach ($this->virtualMFADevices as $item1) {
                    $res['VirtualMFADevices'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1                       = 0;
                foreach ($map['VirtualMFADevices'] as $item1) {
                    $model->virtualMFADevices[$n1++] = virtualMFADevices::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
