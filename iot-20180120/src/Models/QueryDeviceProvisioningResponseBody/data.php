<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceProvisioningResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example io****@example.com
     *
     * @var string
     */
    public $aliyunUid;

    /**
     * @example testDevcieBwT3Un
     *
     * @var string
     */
    public $deviceName;

    /**
     * @example 1676297683000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example 1676297683000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @example a1ji*****
     *
     * @var string
     */
    public $productKey;

    /**
     * @example iot-6ja****
     *
     * @var string
     */
    public $sourceIotInstanceId;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $sourceRegion;

    /**
     * @example iot-09k****
     *
     * @var string
     */
    public $targetIotInstanceId;

    /**
     * @example ap-southeast-1
     *
     * @var string
     */
    public $targetRegion;
    protected $_name = [
        'aliyunUid'           => 'AliyunUid',
        'deviceName'          => 'DeviceName',
        'gmtCreate'           => 'GmtCreate',
        'gmtModified'         => 'GmtModified',
        'productKey'          => 'ProductKey',
        'sourceIotInstanceId' => 'SourceIotInstanceId',
        'sourceRegion'        => 'SourceRegion',
        'targetIotInstanceId' => 'TargetIotInstanceId',
        'targetRegion'        => 'TargetRegion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunUid) {
            $res['AliyunUid'] = $this->aliyunUid;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->sourceIotInstanceId) {
            $res['SourceIotInstanceId'] = $this->sourceIotInstanceId;
        }
        if (null !== $this->sourceRegion) {
            $res['SourceRegion'] = $this->sourceRegion;
        }
        if (null !== $this->targetIotInstanceId) {
            $res['TargetIotInstanceId'] = $this->targetIotInstanceId;
        }
        if (null !== $this->targetRegion) {
            $res['TargetRegion'] = $this->targetRegion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunUid'])) {
            $model->aliyunUid = $map['AliyunUid'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['SourceIotInstanceId'])) {
            $model->sourceIotInstanceId = $map['SourceIotInstanceId'];
        }
        if (isset($map['SourceRegion'])) {
            $model->sourceRegion = $map['SourceRegion'];
        }
        if (isset($map['TargetIotInstanceId'])) {
            $model->targetIotInstanceId = $map['TargetIotInstanceId'];
        }
        if (isset($map['TargetRegion'])) {
            $model->targetRegion = $map['TargetRegion'];
        }

        return $model;
    }
}
