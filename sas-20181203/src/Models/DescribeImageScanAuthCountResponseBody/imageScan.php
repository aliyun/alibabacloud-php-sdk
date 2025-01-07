<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageScanAuthCountResponseBody;

use AlibabaCloud\Tea\Model;

class imageScan extends Model
{
    /**
     * @description The quota for container image scan.
     *
     * @example 15340
     *
     * @var int
     */
    public $imageScanCapacity;

    /**
     * @description The instance ID of Security Center.
     *
     * @example sas-qdl123412****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The consumed quota for container image scan.
     *
     * @example 5489
     *
     * @var int
     */
    public $scanCount;
    protected $_name = [
        'imageScanCapacity' => 'ImageScanCapacity',
        'instanceId'        => 'InstanceId',
        'scanCount'         => 'ScanCount',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return imageScan
     */
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
