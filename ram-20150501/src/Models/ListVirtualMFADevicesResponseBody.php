<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\SDK\Ram\V20150501\Models\ListVirtualMFADevicesResponseBody\virtualMFADevices;
use AlibabaCloud\Tea\Model;

class ListVirtualMFADevicesResponseBody extends Model
{
    /**
     * @var virtualMFADevices[]
     */
    public $virtualMFADevices;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'virtualMFADevices' => 'VirtualMFADevices',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListVirtualMFADevicesResponseBody
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
