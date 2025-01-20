<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\CreateApplicationResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $appId;
    /**
     * @var string
     */
    public $appName;
    /**
     * @var int
     */
    public $createTime;
    /**
     * @var string
     */
    public $extraInfo;
    /**
     * @var string
     */
    public $language;
    /**
     * @var string
     */
    public $licenseKey;
    /**
     * @var string
     */
    public $namespace;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $source;
    /**
     * @var int
     */
    public $status;
    /**
     * @var int
     */
    public $updateTime;
    /**
     * @var string
     */
    public $userId;
    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'appId'      => 'AppId',
        'appName'    => 'AppName',
        'createTime' => 'CreateTime',
        'extraInfo'  => 'ExtraInfo',
        'language'   => 'Language',
        'licenseKey' => 'LicenseKey',
        'namespace'  => 'Namespace',
        'regionId'   => 'RegionId',
        'source'     => 'Source',
        'status'     => 'Status',
        'updateTime' => 'UpdateTime',
        'userId'     => 'UserId',
        'version'    => 'Version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
