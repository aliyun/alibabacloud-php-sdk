<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudwifipop\V20191118\Models;

use AlibabaCloud\Dara\Model;

class SaveApThirdAppRequest extends Model
{
    /**
     * @var int
     */
    public $addStyle;

    /**
     * @var int
     */
    public $apAssetId;

    /**
     * @var string
     */
    public $appCode;

    /**
     * @var string
     */
    public $appData;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var int
     */
    public $category;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $mac;

    /**
     * @var string
     */
    public $thirdAppName;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'addStyle' => 'AddStyle',
        'apAssetId' => 'ApAssetId',
        'appCode' => 'AppCode',
        'appData' => 'AppData',
        'appName' => 'AppName',
        'category' => 'Category',
        'id' => 'Id',
        'mac' => 'Mac',
        'thirdAppName' => 'ThirdAppName',
        'version' => 'Version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addStyle) {
            $res['AddStyle'] = $this->addStyle;
        }

        if (null !== $this->apAssetId) {
            $res['ApAssetId'] = $this->apAssetId;
        }

        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }

        if (null !== $this->appData) {
            $res['AppData'] = $this->appData;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->mac) {
            $res['Mac'] = $this->mac;
        }

        if (null !== $this->thirdAppName) {
            $res['ThirdAppName'] = $this->thirdAppName;
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
        if (isset($map['AddStyle'])) {
            $model->addStyle = $map['AddStyle'];
        }

        if (isset($map['ApAssetId'])) {
            $model->apAssetId = $map['ApAssetId'];
        }

        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }

        if (isset($map['AppData'])) {
            $model->appData = $map['AppData'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Mac'])) {
            $model->mac = $map['Mac'];
        }

        if (isset($map['ThirdAppName'])) {
            $model->thirdAppName = $map['ThirdAppName'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
