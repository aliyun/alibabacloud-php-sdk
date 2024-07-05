<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\ListCloudAppInstallationsResponseBody;

use AlibabaCloud\Tea\Model;

class installationInfos extends Model
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
     * @example 2024-05-28T14:48:34+08:00
     *
     * @var string
     */
    public $installationTime;

    /**
     * @example render-9f8c57355d224ad7beaf95e145f22111
     *
     * @var string
     */
    public $renderingInstanceId;

    /**
     * @example installed
     *
     * @var string
     */
    public $status;

    /**
     * @example install success
     *
     * @var string
     */
    public $statusDescription;

    /**
     * @example 2024-05-28T14:50:04+08:00
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'appId'               => 'AppId',
        'appName'             => 'AppName',
        'appVersion'          => 'AppVersion',
        'installationTime'    => 'InstallationTime',
        'renderingInstanceId' => 'RenderingInstanceId',
        'status'              => 'Status',
        'statusDescription'   => 'StatusDescription',
        'updateTime'          => 'UpdateTime',
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
        if (null !== $this->installationTime) {
            $res['InstallationTime'] = $this->installationTime;
        }
        if (null !== $this->renderingInstanceId) {
            $res['RenderingInstanceId'] = $this->renderingInstanceId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return installationInfos
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
        if (isset($map['InstallationTime'])) {
            $model->installationTime = $map['InstallationTime'];
        }
        if (isset($map['RenderingInstanceId'])) {
            $model->renderingInstanceId = $map['RenderingInstanceId'];
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

        return $model;
    }
}
