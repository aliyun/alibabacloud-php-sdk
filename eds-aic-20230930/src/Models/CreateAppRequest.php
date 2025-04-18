<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateAppRequest\customAppInfo;

class CreateAppRequest extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $bizRegionId;

    /**
     * @var customAppInfo
     */
    public $customAppInfo;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $filePath;

    /**
     * @var string
     */
    public $iconUrl;

    /**
     * @var string
     */
    public $installParam;

    /**
     * @var string
     */
    public $ossAppUrl;

    /**
     * @var string
     */
    public $signApk;
    protected $_name = [
        'appName' => 'AppName',
        'bizRegionId' => 'BizRegionId',
        'customAppInfo' => 'CustomAppInfo',
        'description' => 'Description',
        'fileName' => 'FileName',
        'filePath' => 'FilePath',
        'iconUrl' => 'IconUrl',
        'installParam' => 'InstallParam',
        'ossAppUrl' => 'OssAppUrl',
        'signApk' => 'SignApk',
    ];

    public function validate()
    {
        if (null !== $this->customAppInfo) {
            $this->customAppInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->bizRegionId) {
            $res['BizRegionId'] = $this->bizRegionId;
        }

        if (null !== $this->customAppInfo) {
            $res['CustomAppInfo'] = null !== $this->customAppInfo ? $this->customAppInfo->toArray($noStream) : $this->customAppInfo;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
        }

        if (null !== $this->iconUrl) {
            $res['IconUrl'] = $this->iconUrl;
        }

        if (null !== $this->installParam) {
            $res['InstallParam'] = $this->installParam;
        }

        if (null !== $this->ossAppUrl) {
            $res['OssAppUrl'] = $this->ossAppUrl;
        }

        if (null !== $this->signApk) {
            $res['SignApk'] = $this->signApk;
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
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['BizRegionId'])) {
            $model->bizRegionId = $map['BizRegionId'];
        }

        if (isset($map['CustomAppInfo'])) {
            $model->customAppInfo = customAppInfo::fromMap($map['CustomAppInfo']);
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }

        if (isset($map['IconUrl'])) {
            $model->iconUrl = $map['IconUrl'];
        }

        if (isset($map['InstallParam'])) {
            $model->installParam = $map['InstallParam'];
        }

        if (isset($map['OssAppUrl'])) {
            $model->ossAppUrl = $map['OssAppUrl'];
        }

        if (isset($map['SignApk'])) {
            $model->signApk = $map['SignApk'];
        }

        return $model;
    }
}
