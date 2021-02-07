<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\ListVirtualMFADevicesResponseBody\virtualMFADevices;
use AlibabaCloud\Tea\Model;

class ListVirtualMFADevicesResponseBody extends Model
{
    /**
     * @var virtualMFADevices
     */
    public $virtualMFADevices;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $isTruncated;

    /**
     * @var string
     */
    public $marker;
    protected $_name = [
        'virtualMFADevices' => 'VirtualMFADevices',
        'requestId'         => 'RequestId',
        'isTruncated'       => 'IsTruncated',
        'marker'            => 'Marker',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->virtualMFADevices) {
            $res['VirtualMFADevices'] = null !== $this->virtualMFADevices ? $this->virtualMFADevices->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->isTruncated) {
            $res['IsTruncated'] = $this->isTruncated;
        }
        if (null !== $this->marker) {
            $res['Marker'] = $this->marker;
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
            $model->virtualMFADevices = virtualMFADevices::fromMap($map['VirtualMFADevices']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['IsTruncated'])) {
            $model->isTruncated = $map['IsTruncated'];
        }
        if (isset($map['Marker'])) {
            $model->marker = $map['Marker'];
        }

        return $model;
    }
}
