<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class CreateAppRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $bizRegionId;

    /**
     * @var string
     */
    public $description;

    /**
     * @example testApp.apk
     *
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $filePath;

    /**
     * @example https://test.png
     *
     * @var string
     */
    public $iconUrl;

    /**
     * @example -d
     *
     * @var string
     */
    public $installParam;

    /**
     * @example http://testApp.apk
     *
     * @var string
     */
    public $ossAppUrl;
    protected $_name = [
        'appName'      => 'AppName',
        'bizRegionId'  => 'BizRegionId',
        'description'  => 'Description',
        'fileName'     => 'FileName',
        'filePath'     => 'FilePath',
        'iconUrl'      => 'IconUrl',
        'installParam' => 'InstallParam',
        'ossAppUrl'    => 'OssAppUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->bizRegionId) {
            $res['BizRegionId'] = $this->bizRegionId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAppRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['BizRegionId'])) {
            $model->bizRegionId = $map['BizRegionId'];
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

        return $model;
    }
}
