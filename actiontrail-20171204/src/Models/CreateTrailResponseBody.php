<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20171204\Models;

use AlibabaCloud\Tea\Model;

class CreateTrailResponseBody extends Model
{
    /**
     * @var string
     */
    public $mnsTopicArn;

    /**
     * @var string
     */
    public $slsProjectArn;

    /**
     * @var string
     */
    public $roleName;

    /**
     * @var string
     */
    public $eventRW;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $homeRegion;

    /**
     * @var string
     */
    public $ossKeyPrefix;

    /**
     * @var string
     */
    public $ossBucketName;

    /**
     * @var string
     */
    public $slsWriteRoleArn;

    /**
     * @var string
     */
    public $trailRegion;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'mnsTopicArn'     => 'MnsTopicArn',
        'slsProjectArn'   => 'SlsProjectArn',
        'roleName'        => 'RoleName',
        'eventRW'         => 'EventRW',
        'requestId'       => 'RequestId',
        'homeRegion'      => 'HomeRegion',
        'ossKeyPrefix'    => 'OssKeyPrefix',
        'ossBucketName'   => 'OssBucketName',
        'slsWriteRoleArn' => 'SlsWriteRoleArn',
        'trailRegion'     => 'TrailRegion',
        'name'            => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mnsTopicArn) {
            $res['MnsTopicArn'] = $this->mnsTopicArn;
        }
        if (null !== $this->slsProjectArn) {
            $res['SlsProjectArn'] = $this->slsProjectArn;
        }
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }
        if (null !== $this->eventRW) {
            $res['EventRW'] = $this->eventRW;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->homeRegion) {
            $res['HomeRegion'] = $this->homeRegion;
        }
        if (null !== $this->ossKeyPrefix) {
            $res['OssKeyPrefix'] = $this->ossKeyPrefix;
        }
        if (null !== $this->ossBucketName) {
            $res['OssBucketName'] = $this->ossBucketName;
        }
        if (null !== $this->slsWriteRoleArn) {
            $res['SlsWriteRoleArn'] = $this->slsWriteRoleArn;
        }
        if (null !== $this->trailRegion) {
            $res['TrailRegion'] = $this->trailRegion;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTrailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MnsTopicArn'])) {
            $model->mnsTopicArn = $map['MnsTopicArn'];
        }
        if (isset($map['SlsProjectArn'])) {
            $model->slsProjectArn = $map['SlsProjectArn'];
        }
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }
        if (isset($map['EventRW'])) {
            $model->eventRW = $map['EventRW'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['HomeRegion'])) {
            $model->homeRegion = $map['HomeRegion'];
        }
        if (isset($map['OssKeyPrefix'])) {
            $model->ossKeyPrefix = $map['OssKeyPrefix'];
        }
        if (isset($map['OssBucketName'])) {
            $model->ossBucketName = $map['OssBucketName'];
        }
        if (isset($map['SlsWriteRoleArn'])) {
            $model->slsWriteRoleArn = $map['SlsWriteRoleArn'];
        }
        if (isset($map['TrailRegion'])) {
            $model->trailRegion = $map['TrailRegion'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
