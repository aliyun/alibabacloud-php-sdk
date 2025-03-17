<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\CreateMseServiceApplicationResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The application ID.
     *
     * @example xxxxxxxx@xxxxxxxxxx
     *
     * @var string
     */
    public $appId;

    /**
     * @description The name of the application.
     *
     * @example spring-cloud-a
     *
     * @var string
     */
    public $appName;

    /**
     * @description The creation time.
     *
     * @example 1631001140913
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The additional information.
     *
     * @example {}
     *
     * @var string
     */
    public $extraInfo;

    /**
     * @description The programming language of the application.
     *
     * @example JAVA
     *
     * @var string
     */
    public $language;

    /**
     * @description The license key in use.
     *
     * @example xxxxxxxx@xxxxxxxxxx
     *
     * @var string
     */
    public $licenseKey;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The source type.
     *
     * @example edasmsc
     *
     * @var string
     */
    public $source;

    /**
     * @description The status. Valid values: 1: available; 2: deleted.
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The last modification time.
     *
     * @example 1632979237663
     *
     * @var int
     */
    public $updateTime;

    /**
     * @description The ID of the user.
     *
     * @example 1234567890
     *
     * @var string
     */
    public $userId;

    /**
     * @description The version information.
     *
     * @example 1.0.0
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'appId' => 'AppId',
        'appName' => 'AppName',
        'createTime' => 'CreateTime',
        'extraInfo' => 'ExtraInfo',
        'language' => 'Language',
        'licenseKey' => 'LicenseKey',
        'regionId' => 'RegionId',
        'source' => 'Source',
        'status' => 'Status',
        'updateTime' => 'UpdateTime',
        'userId' => 'UserId',
        'version' => 'Version',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->extraInfo) {
            $res['ExtraInfo'] = $this->extraInfo;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->licenseKey) {
            $res['LicenseKey'] = $this->licenseKey;
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
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ExtraInfo'])) {
            $model->extraInfo = $map['ExtraInfo'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['LicenseKey'])) {
            $model->licenseKey = $map['LicenseKey'];
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
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
