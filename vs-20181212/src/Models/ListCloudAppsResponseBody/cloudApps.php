<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\ListCloudAppsResponseBody;

use AlibabaCloud\Tea\Model;

class cloudApps extends Model
{
    /**
     * @example cap-b06b26edfhytbn b94a75ae1a79efc90eb
     *
     * @var string
     */
    public $appId;

    /**
     * @example com.aaa.bbb
     *
     * @var string
     */
    public $appName;

    /**
     * @example 1.5.0
     *
     * @var string
     */
    public $appVersion;

    /**
     * @example demo
     *
     * @var string
     */
    public $description;

    /**
     * @example Success
     *
     * @var string
     */
    public $status;

    /**
     * @example upload success
     *
     * @var string
     */
    public $statusDescription;

    /**
     * @example 2024-05-28T14:48:34+08:00
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example 2024-05-28T14:28:14+08:00
     *
     * @var string
     */
    public $uploadTime;
    protected $_name = [
        'appId'             => 'AppId',
        'appName'           => 'AppName',
        'appVersion'        => 'AppVersion',
        'description'       => 'Description',
        'status'            => 'Status',
        'statusDescription' => 'StatusDescription',
        'updateTime'        => 'UpdateTime',
        'uploadTime'        => 'UploadTime',
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
        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusDescription) {
            $res['StatusDescription'] = $this->statusDescription;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->uploadTime) {
            $res['UploadTime'] = $this->uploadTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cloudApps
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
        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusDescription'])) {
            $model->statusDescription = $map['StatusDescription'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UploadTime'])) {
            $model->uploadTime = $map['UploadTime'];
        }

        return $model;
    }
}
