<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\ListVirtualMFADevicesResponse\virtualMFADevices;
use AlibabaCloud\Tea\Model;

class ListVirtualMFADevicesResponse extends Model
{
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

    /**
     * @var virtualMFADevices
     */
    public $virtualMFADevices;
    protected $_name = [
        'requestId'         => 'RequestId',
        'isTruncated'       => 'IsTruncated',
        'marker'            => 'Marker',
        'virtualMFADevices' => 'VirtualMFADevices',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('isTruncated', $this->isTruncated, true);
        Model::validateRequired('marker', $this->marker, true);
        Model::validateRequired('virtualMFADevices', $this->virtualMFADevices, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->isTruncated) {
            $res['IsTruncated'] = $this->isTruncated;
        }
        if (null !== $this->marker) {
            $res['Marker'] = $this->marker;
        }
        if (null !== $this->virtualMFADevices) {
            $res['VirtualMFADevices'] = null !== $this->virtualMFADevices ? $this->virtualMFADevices->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListVirtualMFADevicesResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['IsTruncated'])) {
            $model->isTruncated = $map['IsTruncated'];
        }
        if (isset($map['Marker'])) {
            $model->marker = $map['Marker'];
        }
        if (isset($map['VirtualMFADevices'])) {
            $model->virtualMFADevices = virtualMFADevices::fromMap($map['VirtualMFADevices']);
        }

        return $model;
    }
}
