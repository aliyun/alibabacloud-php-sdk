<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20171204\Models\DescribeTrailsResponseBody;

use AlibabaCloud\Tea\Model;

class trailList extends Model
{
    /**
     * @var string
     */
    public $trailRegion;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $homeRegion;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $ossKeyPrefix;

    /**
     * @var string
     */
    public $eventRW;

    /**
     * @var string
     */
    public $startLoggingTime;

    /**
     * @var string
     */
    public $mnsTopicArn;

    /**
     * @var string
     */
    public $roleName;

    /**
     * @var string
     */
    public $slsProjectArn;

    /**
     * @var bool
     */
    public $isOrganizationTrail;

    /**
     * @var string
     */
    public $slsWriteRoleArn;

    /**
     * @var string
     */
    public $stopLoggingTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ossBucketName;
    protected $_name = [
        'trailRegion'         => 'TrailRegion',
        'status'              => 'Status',
        'updateTime'          => 'UpdateTime',
        'homeRegion'          => 'HomeRegion',
        'createTime'          => 'CreateTime',
        'ossKeyPrefix'        => 'OssKeyPrefix',
        'eventRW'             => 'EventRW',
        'startLoggingTime'    => 'StartLoggingTime',
        'mnsTopicArn'         => 'MnsTopicArn',
        'roleName'            => 'RoleName',
        'slsProjectArn'       => 'SlsProjectArn',
        'isOrganizationTrail' => 'IsOrganizationTrail',
        'slsWriteRoleArn'     => 'SlsWriteRoleArn',
        'stopLoggingTime'     => 'StopLoggingTime',
        'name'                => 'Name',
        'ossBucketName'       => 'OssBucketName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->trailRegion) {
            $res['TrailRegion'] = $this->trailRegion;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->homeRegion) {
            $res['HomeRegion'] = $this->homeRegion;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->ossKeyPrefix) {
            $res['OssKeyPrefix'] = $this->ossKeyPrefix;
        }
        if (null !== $this->eventRW) {
            $res['EventRW'] = $this->eventRW;
        }
        if (null !== $this->startLoggingTime) {
            $res['StartLoggingTime'] = $this->startLoggingTime;
        }
        if (null !== $this->mnsTopicArn) {
            $res['MnsTopicArn'] = $this->mnsTopicArn;
        }
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }
        if (null !== $this->slsProjectArn) {
            $res['SlsProjectArn'] = $this->slsProjectArn;
        }
        if (null !== $this->isOrganizationTrail) {
            $res['IsOrganizationTrail'] = $this->isOrganizationTrail;
        }
        if (null !== $this->slsWriteRoleArn) {
            $res['SlsWriteRoleArn'] = $this->slsWriteRoleArn;
        }
        if (null !== $this->stopLoggingTime) {
            $res['StopLoggingTime'] = $this->stopLoggingTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ossBucketName) {
            $res['OssBucketName'] = $this->ossBucketName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trailList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TrailRegion'])) {
            $model->trailRegion = $map['TrailRegion'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['HomeRegion'])) {
            $model->homeRegion = $map['HomeRegion'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['OssKeyPrefix'])) {
            $model->ossKeyPrefix = $map['OssKeyPrefix'];
        }
        if (isset($map['EventRW'])) {
            $model->eventRW = $map['EventRW'];
        }
        if (isset($map['StartLoggingTime'])) {
            $model->startLoggingTime = $map['StartLoggingTime'];
        }
        if (isset($map['MnsTopicArn'])) {
            $model->mnsTopicArn = $map['MnsTopicArn'];
        }
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }
        if (isset($map['SlsProjectArn'])) {
            $model->slsProjectArn = $map['SlsProjectArn'];
        }
        if (isset($map['IsOrganizationTrail'])) {
            $model->isOrganizationTrail = $map['IsOrganizationTrail'];
        }
        if (isset($map['SlsWriteRoleArn'])) {
            $model->slsWriteRoleArn = $map['SlsWriteRoleArn'];
        }
        if (isset($map['StopLoggingTime'])) {
            $model->stopLoggingTime = $map['StopLoggingTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OssBucketName'])) {
            $model->ossBucketName = $map['OssBucketName'];
        }

        return $model;
    }
}
