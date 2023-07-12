<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceProvisioningResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $aliyunUid;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $sourceIotInstanceId;

    /**
     * @var string
     */
    public $sourceRegion;

    /**
     * @var string
     */
    public $targetIotInstanceId;

    /**
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
        Model::validateRequired('aliyunUid', $this->aliyunUid, true);
        Model::validateRequired('deviceName', $this->deviceName, true);
        Model::validateRequired('gmtCreate', $this->gmtCreate, true);
        Model::validateRequired('gmtModified', $this->gmtModified, true);
        Model::validateRequired('productKey', $this->productKey, true);
        Model::validateRequired('sourceIotInstanceId', $this->sourceIotInstanceId, true);
        Model::validateRequired('sourceRegion', $this->sourceRegion, true);
        Model::validateRequired('targetIotInstanceId', $this->targetIotInstanceId, true);
        Model::validateRequired('targetRegion', $this->targetRegion, true);
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
