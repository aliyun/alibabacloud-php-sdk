<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudwifipop\V20191118\Models;

use AlibabaCloud\Dara\Model;

class UnRegisterApAssetRequest extends Model
{
    /**
     * @var string
     */
    public $appCode;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var int
     */
    public $assetApgroupId;

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
    public $serialNo;

    /**
     * @var int
     */
    public $useFor;
    protected $_name = [
        'appCode' => 'AppCode',
        'appName' => 'AppName',
        'assetApgroupId' => 'AssetApgroupId',
        'category' => 'Category',
        'id' => 'Id',
        'mac' => 'Mac',
        'serialNo' => 'SerialNo',
        'useFor' => 'UseFor',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->assetApgroupId) {
            $res['AssetApgroupId'] = $this->assetApgroupId;
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

        if (null !== $this->serialNo) {
            $res['SerialNo'] = $this->serialNo;
        }

        if (null !== $this->useFor) {
            $res['UseFor'] = $this->useFor;
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
        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['AssetApgroupId'])) {
            $model->assetApgroupId = $map['AssetApgroupId'];
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

        if (isset($map['SerialNo'])) {
            $model->serialNo = $map['SerialNo'];
        }

        if (isset($map['UseFor'])) {
            $model->useFor = $map['UseFor'];
        }

        return $model;
    }
}
