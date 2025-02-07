<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\CreateAppSecretResponseBody;

use AlibabaCloud\Dara\Model;

class appSecret extends Model
{
    /**
     * @var string
     */
    public $appId;
    /**
     * @var string
     */
    public $appSecretId;
    /**
     * @var string
     */
    public $appSecretValue;
    /**
     * @var string
     */
    public $createDate;
    protected $_name = [
        'appId'          => 'AppId',
        'appSecretId'    => 'AppSecretId',
        'appSecretValue' => 'AppSecretValue',
        'createDate'     => 'CreateDate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->appSecretId) {
            $res['AppSecretId'] = $this->appSecretId;
        }

        if (null !== $this->appSecretValue) {
            $res['AppSecretValue'] = $this->appSecretValue;
        }

        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AppSecretId'])) {
            $model->appSecretId = $map['AppSecretId'];
        }

        if (isset($map['AppSecretValue'])) {
            $model->appSecretValue = $map['AppSecretValue'];
        }

        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }

        return $model;
    }
}
