<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models\DescribeTrailsResponseBody;

use AlibabaCloud\Tea\Model;

class trailList extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $eventRW;

    /**
     * @var string
     */
    public $homeRegion;

    /**
     * @var bool
     */
    public $isOrganizationTrail;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $organizationId;

    /**
     * @var string
     */
    public $ossBucketLocation;

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
    public $region;

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
    public $startLoggingTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $stopLoggingTime;

    /**
     * @var string
     */
    public $trailArn;

    /**
     * @var string
     */
    public $trailRegion;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime'          => 'CreateTime',
        'eventRW'             => 'EventRW',
        'homeRegion'          => 'HomeRegion',
        'isOrganizationTrail' => 'IsOrganizationTrail',
        'name'                => 'Name',
        'organizationId'      => 'OrganizationId',
        'ossBucketLocation'   => 'OssBucketLocation',
        'ossBucketName'       => 'OssBucketName',
        'ossKeyPrefix'        => 'OssKeyPrefix',
        'ossWriteRoleArn'     => 'OssWriteRoleArn',
        'region'              => 'Region',
        'slsProjectArn'       => 'SlsProjectArn',
        'slsWriteRoleArn'     => 'SlsWriteRoleArn',
        'startLoggingTime'    => 'StartLoggingTime',
        'status'              => 'Status',
        'stopLoggingTime'     => 'StopLoggingTime',
        'trailArn'            => 'TrailArn',
        'trailRegion'         => 'TrailRegion',
        'updateTime'          => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->eventRW) {
            $res['EventRW'] = $this->eventRW;
        }
        if (null !== $this->homeRegion) {
            $res['HomeRegion'] = $this->homeRegion;
        }
        if (null !== $this->isOrganizationTrail) {
            $res['IsOrganizationTrail'] = $this->isOrganizationTrail;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }
        if (null !== $this->ossBucketLocation) {
            $res['OssBucketLocation'] = $this->ossBucketLocation;
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
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->slsProjectArn) {
            $res['SlsProjectArn'] = $this->slsProjectArn;
        }
        if (null !== $this->slsWriteRoleArn) {
            $res['SlsWriteRoleArn'] = $this->slsWriteRoleArn;
        }
        if (null !== $this->startLoggingTime) {
            $res['StartLoggingTime'] = $this->startLoggingTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->stopLoggingTime) {
            $res['StopLoggingTime'] = $this->stopLoggingTime;
        }
        if (null !== $this->trailArn) {
            $res['TrailArn'] = $this->trailArn;
        }
        if (null !== $this->trailRegion) {
            $res['TrailRegion'] = $this->trailRegion;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EventRW'])) {
            $model->eventRW = $map['EventRW'];
        }
        if (isset($map['HomeRegion'])) {
            $model->homeRegion = $map['HomeRegion'];
        }
        if (isset($map['IsOrganizationTrail'])) {
            $model->isOrganizationTrail = $map['IsOrganizationTrail'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }
        if (isset($map['OssBucketLocation'])) {
            $model->ossBucketLocation = $map['OssBucketLocation'];
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
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['SlsProjectArn'])) {
            $model->slsProjectArn = $map['SlsProjectArn'];
        }
        if (isset($map['SlsWriteRoleArn'])) {
            $model->slsWriteRoleArn = $map['SlsWriteRoleArn'];
        }
        if (isset($map['StartLoggingTime'])) {
            $model->startLoggingTime = $map['StartLoggingTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StopLoggingTime'])) {
            $model->stopLoggingTime = $map['StopLoggingTime'];
        }
        if (isset($map['TrailArn'])) {
            $model->trailArn = $map['TrailArn'];
        }
        if (isset($map['TrailRegion'])) {
            $model->trailRegion = $map['TrailRegion'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
