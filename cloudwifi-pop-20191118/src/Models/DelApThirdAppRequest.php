<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudwifipop\V20191118\Models;

use AlibabaCloud\Dara\Model;

class DelApThirdAppRequest extends Model
{
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
    public $appName;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $mac;
    protected $_name = [
        'apAssetId' => 'ApAssetId',
        'appCode' => 'AppCode',
        'appName' => 'AppName',
        'id' => 'Id',
        'mac' => 'Mac',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apAssetId) {
            $res['ApAssetId'] = $this->apAssetId;
        }

        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->mac) {
            $res['Mac'] = $this->mac;
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
        if (isset($map['ApAssetId'])) {
            $model->apAssetId = $map['ApAssetId'];
        }

        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Mac'])) {
            $model->mac = $map['Mac'];
        }

        return $model;
    }
}
