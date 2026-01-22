<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ADBAI\V20250812\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\GetEmbodiedAIPlatformResourceUsageInfoResponseBody\gpuDetails;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\GetEmbodiedAIPlatformResourceUsageInfoResponseBody\slbTraffic;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\GetEmbodiedAIPlatformResourceUsageInfoResponseBody\storageUsage;

class GetEmbodiedAIPlatformResourceUsageInfoResponseBody extends Model
{
    /**
     * @var gpuDetails[]
     */
    public $gpuDetails;

    /**
     * @var int
     */
    public $maxRegisteredDevices;

    /**
     * @var int
     */
    public $registeredDeviceCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var slbTraffic
     */
    public $slbTraffic;

    /**
     * @var storageUsage
     */
    public $storageUsage;
    protected $_name = [
        'gpuDetails' => 'GpuDetails',
        'maxRegisteredDevices' => 'MaxRegisteredDevices',
        'registeredDeviceCount' => 'RegisteredDeviceCount',
        'requestId' => 'RequestId',
        'slbTraffic' => 'SlbTraffic',
        'storageUsage' => 'StorageUsage',
    ];

    public function validate()
    {
        if (\is_array($this->gpuDetails)) {
            Model::validateArray($this->gpuDetails);
        }
        if (null !== $this->slbTraffic) {
            $this->slbTraffic->validate();
        }
        if (null !== $this->storageUsage) {
            $this->storageUsage->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gpuDetails) {
            if (\is_array($this->gpuDetails)) {
                $res['GpuDetails'] = [];
                $n1 = 0;
                foreach ($this->gpuDetails as $item1) {
                    $res['GpuDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxRegisteredDevices) {
            $res['MaxRegisteredDevices'] = $this->maxRegisteredDevices;
        }

        if (null !== $this->registeredDeviceCount) {
            $res['RegisteredDeviceCount'] = $this->registeredDeviceCount;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->slbTraffic) {
            $res['SlbTraffic'] = null !== $this->slbTraffic ? $this->slbTraffic->toArray($noStream) : $this->slbTraffic;
        }

        if (null !== $this->storageUsage) {
            $res['StorageUsage'] = null !== $this->storageUsage ? $this->storageUsage->toArray($noStream) : $this->storageUsage;
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
        if (isset($map['GpuDetails'])) {
            if (!empty($map['GpuDetails'])) {
                $model->gpuDetails = [];
                $n1 = 0;
                foreach ($map['GpuDetails'] as $item1) {
                    $model->gpuDetails[$n1] = gpuDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['MaxRegisteredDevices'])) {
            $model->maxRegisteredDevices = $map['MaxRegisteredDevices'];
        }

        if (isset($map['RegisteredDeviceCount'])) {
            $model->registeredDeviceCount = $map['RegisteredDeviceCount'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SlbTraffic'])) {
            $model->slbTraffic = slbTraffic::fromMap($map['SlbTraffic']);
        }

        if (isset($map['StorageUsage'])) {
            $model->storageUsage = storageUsage::fromMap($map['StorageUsage']);
        }

        return $model;
    }
}
