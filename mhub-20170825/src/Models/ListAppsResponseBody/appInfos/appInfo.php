<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mhub\V20170825\Models\ListAppsResponseBody\appInfos;

use AlibabaCloud\Dara\Model;

class appInfo extends Model
{
    /**
     * @var string
     */
    public $appKey;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $bundleId;

    /**
     * @var string
     */
    public $encodedIcon;

    /**
     * @var int
     */
    public $industryId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $packageName;

    /**
     * @var bool
     */
    public $readonly;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'appKey' => 'AppKey',
        'appName' => 'AppName',
        'bundleId' => 'BundleId',
        'encodedIcon' => 'EncodedIcon',
        'industryId' => 'IndustryId',
        'name' => 'Name',
        'packageName' => 'PackageName',
        'readonly' => 'Readonly',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->bundleId) {
            $res['BundleId'] = $this->bundleId;
        }

        if (null !== $this->encodedIcon) {
            $res['EncodedIcon'] = $this->encodedIcon;
        }

        if (null !== $this->industryId) {
            $res['IndustryId'] = $this->industryId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->packageName) {
            $res['PackageName'] = $this->packageName;
        }

        if (null !== $this->readonly) {
            $res['Readonly'] = $this->readonly;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['BundleId'])) {
            $model->bundleId = $map['BundleId'];
        }

        if (isset($map['EncodedIcon'])) {
            $model->encodedIcon = $map['EncodedIcon'];
        }

        if (isset($map['IndustryId'])) {
            $model->industryId = $map['IndustryId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PackageName'])) {
            $model->packageName = $map['PackageName'];
        }

        if (isset($map['Readonly'])) {
            $model->readonly = $map['Readonly'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
