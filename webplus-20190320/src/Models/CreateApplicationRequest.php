<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models;

use AlibabaCloud\Tea\Model;

class CreateApplicationRequest extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $appDescription;

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
    public $regionId;
    protected $_name = [
        'appName'            => 'AppName',
        'appDescription'     => 'AppDescription',
        'categoryName'       => 'CategoryName',
        'usingSharedStorage' => 'UsingSharedStorage',
        'regionId'           => 'RegionId',
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
        if (null !== $this->appDescription) {
            $res['AppDescription'] = $this->appDescription;
        }
        if (null !== $this->categoryName) {
            $res['CategoryName'] = $this->categoryName;
        }
        if (null !== $this->usingSharedStorage) {
            $res['UsingSharedStorage'] = $this->usingSharedStorage;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateApplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppDescription'])) {
            $model->appDescription = $map['AppDescription'];
        }
        if (isset($map['CategoryName'])) {
            $model->categoryName = $map['CategoryName'];
        }
        if (isset($map['UsingSharedStorage'])) {
            $model->usingSharedStorage = $map['UsingSharedStorage'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
