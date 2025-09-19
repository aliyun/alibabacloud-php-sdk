<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageScanAuthCountResponseBody;

use AlibabaCloud\Dara\Model;

class imageScan extends Model
{
    /**
     * @var int
     */
    public $imageScanCapacity;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $scanCount;
    protected $_name = [
        'imageScanCapacity' => 'ImageScanCapacity',
        'instanceId' => 'InstanceId',
        'scanCount' => 'ScanCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageScanCapacity) {
            $res['ImageScanCapacity'] = $this->imageScanCapacity;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->scanCount) {
            $res['ScanCount'] = $this->scanCount;
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
        if (isset($map['ImageScanCapacity'])) {
            $model->imageScanCapacity = $map['ImageScanCapacity'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['ScanCount'])) {
            $model->scanCount = $map['ScanCount'];
        }

        return $model;
    }
}
