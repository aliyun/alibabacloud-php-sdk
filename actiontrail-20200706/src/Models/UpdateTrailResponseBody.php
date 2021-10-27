<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models;

use AlibabaCloud\Tea\Model;

class UpdateTrailResponseBody extends Model
{
    /**
     * @var string
     */
    public $eventRW;

    /**
     * @var string
     */
    public $homeRegion;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ossBucketName;

    /**
     * @var string
     */
    public $ossKeyPrefix;

    /**
     * @var string
     */
    public $ossWriteRoleArn;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $slsProjectArn;

    /**
     * @var string
     */
    public $slsWriteRoleArn;

    /**
     * @var string
     */
    public $trailRegion;
    protected $_name = [
        'eventRW'         => 'EventRW',
        'homeRegion'      => 'HomeRegion',
        'name'            => 'Name',
        'ossBucketName'   => 'OssBucketName',
        'ossKeyPrefix'    => 'OssKeyPrefix',
        'ossWriteRoleArn' => 'OssWriteRoleArn',
        'requestId'       => 'RequestId',
        'slsProjectArn'   => 'SlsProjectArn',
        'slsWriteRoleArn' => 'SlsWriteRoleArn',
        'trailRegion'     => 'TrailRegion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventRW) {
            $res['EventRW'] = $this->eventRW;
        }
        if (null !== $this->homeRegion) {
            $res['HomeRegion'] = $this->homeRegion;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ossBucketName) {
            $res['OssBucketName'] = $this->ossBucketName;
        }
        if (null !== $this->ossKeyPrefix) {
            $res['OssKeyPrefix'] = $this->ossKeyPrefix;
        }
        if (null !== $this->ossWriteRoleArn) {
            $res['OssWriteRoleArn'] = $this->ossWriteRoleArn;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->slsProjectArn) {
            $res['SlsProjectArn'] = $this->slsProjectArn;
        }
        if (null !== $this->slsWriteRoleArn) {
            $res['SlsWriteRoleArn'] = $this->slsWriteRoleArn;
        }
        if (null !== $this->trailRegion) {
            $res['TrailRegion'] = $this->trailRegion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTrailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventRW'])) {
            $model->eventRW = $map['EventRW'];
        }
        if (isset($map['HomeRegion'])) {
            $model->homeRegion = $map['HomeRegion'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OssBucketName'])) {
            $model->ossBucketName = $map['OssBucketName'];
        }
        if (isset($map['OssKeyPrefix'])) {
            $model->ossKeyPrefix = $map['OssKeyPrefix'];
        }
        if (isset($map['OssWriteRoleArn'])) {
            $model->ossWriteRoleArn = $map['OssWriteRoleArn'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SlsProjectArn'])) {
            $model->slsProjectArn = $map['SlsProjectArn'];
        }
        if (isset($map['SlsWriteRoleArn'])) {
            $model->slsWriteRoleArn = $map['SlsWriteRoleArn'];
        }
        if (isset($map['TrailRegion'])) {
            $model->trailRegion = $map['TrailRegion'];
        }

        return $model;
    }
}
