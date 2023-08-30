<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetApplicationListResponseBody\data;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example hkhon1po62@5f1b08becb*****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The name of the application.
     *
     * @example finance
     *
     * @var string
     */
    public $appName;

    /**
     * @description The additional information.
     *
     * @example {}
     *
     * @var string
     */
    public $extraInfo;

    /**
     * @description The number of instances.
     *
     * @example 1
     *
     * @var int
     */
    public $instancesNumber;

    /**
     * @description The programming language of the application.
     *
     * @example JAVA
     *
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @description The region ID of the instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The source of the application.
     *
     * @example edasmsc
     *
     * @var string
     */
    public $source;

    /**
     * @description The status.
     *
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $tagCount;

    /**
     * @description The ID of the user.
     *
     * @example 1234567890
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'appId'           => 'AppId',
        'appName'         => 'AppName',
        'extraInfo'       => 'ExtraInfo',
        'instancesNumber' => 'InstancesNumber',
        'language'        => 'Language',
        'namespace'       => 'Namespace',
        'regionId'        => 'RegionId',
        'source'          => 'Source',
        'status'          => 'Status',
        'tagCount'        => 'TagCount',
        'userId'          => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->extraInfo) {
            $res['ExtraInfo'] = $this->extraInfo;
        }
        if (null !== $this->instancesNumber) {
            $res['InstancesNumber'] = $this->instancesNumber;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tagCount) {
            $res['TagCount'] = $this->tagCount;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['ExtraInfo'])) {
            $model->extraInfo = $map['ExtraInfo'];
        }
        if (isset($map['InstancesNumber'])) {
            $model->instancesNumber = $map['InstancesNumber'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TagCount'])) {
            $model->tagCount = $map['TagCount'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
