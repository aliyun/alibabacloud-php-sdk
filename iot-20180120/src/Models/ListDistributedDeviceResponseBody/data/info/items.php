<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ListDistributedDeviceResponseBody\data\info;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $sourceUid;

    /**
     * @var string
     */
    public $targetUid;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $sourceInstanceId;

    /**
     * @var string
     */
    public $targetInstanceId;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $targetAliyunId;

    /**
     * @var string
     */
    public $sourceRegion;

    /**
     * @var string
     */
    public $targetRegion;

    /**
     * @var string
     */
    public $sourceInstanceName;

    /**
     * @var string
     */
    public $targetInstanceName;

    /**
     * @var int
     */
    public $gmtModified;
    protected $_name = [
        'sourceUid'          => 'SourceUid',
        'targetUid'          => 'TargetUid',
        'productKey'         => 'ProductKey',
        'deviceName'         => 'DeviceName',
        'sourceInstanceId'   => 'SourceInstanceId',
        'targetInstanceId'   => 'TargetInstanceId',
        'gmtCreate'          => 'GmtCreate',
        'targetAliyunId'     => 'TargetAliyunId',
        'sourceRegion'       => 'SourceRegion',
        'targetRegion'       => 'TargetRegion',
        'sourceInstanceName' => 'SourceInstanceName',
        'targetInstanceName' => 'TargetInstanceName',
        'gmtModified'        => 'GmtModified',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceUid) {
            $res['SourceUid'] = $this->sourceUid;
        }
        if (null !== $this->targetUid) {
            $res['TargetUid'] = $this->targetUid;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->sourceInstanceId) {
            $res['SourceInstanceId'] = $this->sourceInstanceId;
        }
        if (null !== $this->targetInstanceId) {
            $res['TargetInstanceId'] = $this->targetInstanceId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->targetAliyunId) {
            $res['TargetAliyunId'] = $this->targetAliyunId;
        }
        if (null !== $this->sourceRegion) {
            $res['SourceRegion'] = $this->sourceRegion;
        }
        if (null !== $this->targetRegion) {
            $res['TargetRegion'] = $this->targetRegion;
        }
        if (null !== $this->sourceInstanceName) {
            $res['SourceInstanceName'] = $this->sourceInstanceName;
        }
        if (null !== $this->targetInstanceName) {
            $res['TargetInstanceName'] = $this->targetInstanceName;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceUid'])) {
            $model->sourceUid = $map['SourceUid'];
        }
        if (isset($map['TargetUid'])) {
            $model->targetUid = $map['TargetUid'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['SourceInstanceId'])) {
            $model->sourceInstanceId = $map['SourceInstanceId'];
        }
        if (isset($map['TargetInstanceId'])) {
            $model->targetInstanceId = $map['TargetInstanceId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['TargetAliyunId'])) {
            $model->targetAliyunId = $map['TargetAliyunId'];
        }
        if (isset($map['SourceRegion'])) {
            $model->sourceRegion = $map['SourceRegion'];
        }
        if (isset($map['TargetRegion'])) {
            $model->targetRegion = $map['TargetRegion'];
        }
        if (isset($map['SourceInstanceName'])) {
            $model->sourceInstanceName = $map['SourceInstanceName'];
        }
        if (isset($map['TargetInstanceName'])) {
            $model->targetInstanceName = $map['TargetInstanceName'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        return $model;
    }
}
