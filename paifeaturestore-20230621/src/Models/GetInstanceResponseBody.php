<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\GetInstanceResponseBody\featureDBInfo;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\GetInstanceResponseBody\featureDBInstanceInfo;

class GetInstanceResponseBody extends Model
{
    /**
     * @var featureDBInfo
     */
    public $featureDBInfo;

    /**
     * @var featureDBInstanceInfo
     */
    public $featureDBInstanceInfo;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @var string
     */
    public $message;

    /**
     * @var float
     */
    public $progress;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'featureDBInfo' => 'FeatureDBInfo',
        'featureDBInstanceInfo' => 'FeatureDBInstanceInfo',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'message' => 'Message',
        'progress' => 'Progress',
        'regionId' => 'RegionId',
        'requestId' => 'RequestId',
        'status' => 'Status',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->featureDBInfo) {
            $this->featureDBInfo->validate();
        }
        if (null !== $this->featureDBInstanceInfo) {
            $this->featureDBInstanceInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->featureDBInfo) {
            $res['FeatureDBInfo'] = null !== $this->featureDBInfo ? $this->featureDBInfo->toArray($noStream) : $this->featureDBInfo;
        }

        if (null !== $this->featureDBInstanceInfo) {
            $res['FeatureDBInstanceInfo'] = null !== $this->featureDBInstanceInfo ? $this->featureDBInstanceInfo->toArray($noStream) : $this->featureDBInstanceInfo;
        }

        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }

        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['FeatureDBInfo'])) {
            $model->featureDBInfo = featureDBInfo::fromMap($map['FeatureDBInfo']);
        }

        if (isset($map['FeatureDBInstanceInfo'])) {
            $model->featureDBInstanceInfo = featureDBInstanceInfo::fromMap($map['FeatureDBInstanceInfo']);
        }

        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }

        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
