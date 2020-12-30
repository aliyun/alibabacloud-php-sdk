<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models\CreateApplicationResponseBody;

use AlibabaCloud\Tea\Model;

class application extends Model
{
    /**
     * @var string
     */
    public $createUsername;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var string
     */
    public $updateUsername;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $categoryName;

    /**
     * @var bool
     */
    public $usingSharedStorage;

    /**
     * @var string
     */
    public $appDescription;
    protected $_name = [
        'createUsername'     => 'CreateUsername',
        'appName'            => 'AppName',
        'updateTime'         => 'UpdateTime',
        'updateUsername'     => 'UpdateUsername',
        'createTime'         => 'CreateTime',
        'appId'              => 'AppId',
        'categoryName'       => 'CategoryName',
        'usingSharedStorage' => 'UsingSharedStorage',
        'appDescription'     => 'AppDescription',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createUsername) {
            $res['CreateUsername'] = $this->createUsername;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->updateUsername) {
            $res['UpdateUsername'] = $this->updateUsername;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->categoryName) {
            $res['CategoryName'] = $this->categoryName;
        }
        if (null !== $this->usingSharedStorage) {
            $res['UsingSharedStorage'] = $this->usingSharedStorage;
        }
        if (null !== $this->appDescription) {
            $res['AppDescription'] = $this->appDescription;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return application
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateUsername'])) {
            $model->createUsername = $map['CreateUsername'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UpdateUsername'])) {
            $model->updateUsername = $map['UpdateUsername'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['CategoryName'])) {
            $model->categoryName = $map['CategoryName'];
        }
        if (isset($map['UsingSharedStorage'])) {
            $model->usingSharedStorage = $map['UsingSharedStorage'];
        }
        if (isset($map['AppDescription'])) {
            $model->appDescription = $map['AppDescription'];
        }

        return $model;
    }
}
