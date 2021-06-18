<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageScanAuthCountResponseBody;

use AlibabaCloud\Tea\Model;

class imageScan extends Model
{
    /**
     * @var int
     */
    public $scanCount;

    /**
     * @var int
     */
    public $imageScanCapacity;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'scanCount'         => 'ScanCount',
        'imageScanCapacity' => 'ImageScanCapacity',
        'instanceId'        => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scanCount) {
            $res['ScanCount'] = $this->scanCount;
        }
        if (null !== $this->imageScanCapacity) {
            $res['ImageScanCapacity'] = $this->imageScanCapacity;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageScan
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ScanCount'])) {
            $model->scanCount = $map['ScanCount'];
        }
        if (isset($map['ImageScanCapacity'])) {
            $model->imageScanCapacity = $map['ImageScanCapacity'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
