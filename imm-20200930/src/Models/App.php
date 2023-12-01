<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class App extends Model
{
    /**
     * @var string
     */
    public $appDescription;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appKey;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var int
     */
    public $appRegion;

    /**
     * @var int
     */
    public $appType;

    /**
     * @var string
     */
    public $englishName;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $packageName;
    protected $_name = [
        'appDescription' => 'AppDescription',
        'appId'          => 'AppId',
        'appKey'         => 'AppKey',
        'appName'        => 'AppName',
        'appRegion'      => 'AppRegion',
        'appType'        => 'AppType',
        'englishName'    => 'EnglishName',
        'ownerId'        => 'OwnerId',
        'packageName'    => 'PackageName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appDescription) {
            $res['AppDescription'] = $this->appDescription;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appRegion) {
            $res['AppRegion'] = $this->appRegion;
        }
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }
        if (null !== $this->englishName) {
            $res['EnglishName'] = $this->englishName;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->packageName) {
            $res['PackageName'] = $this->packageName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return App
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppDescription'])) {
            $model->appDescription = $map['AppDescription'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppRegion'])) {
            $model->appRegion = $map['AppRegion'];
        }
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }
        if (isset($map['EnglishName'])) {
            $model->englishName = $map['EnglishName'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PackageName'])) {
            $model->packageName = $map['PackageName'];
        }

        return $model;
    }
}
