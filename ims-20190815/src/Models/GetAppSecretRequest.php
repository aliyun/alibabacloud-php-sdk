<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class GetAppSecretRequest extends Model
{
    /**
     * @example 472457090344041****
     *
     * @var string
     */
    public $appId;

    /**
     * @example 2efd5004-005c-4f05-83c6-5b1dd176****
     *
     * @var string
     */
    public $appSecretId;
    protected $_name = [
        'appId'       => 'AppId',
        'appSecretId' => 'AppSecretId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appSecretId) {
            $res['AppSecretId'] = $this->appSecretId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAppSecretRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppSecretId'])) {
            $model->appSecretId = $map['AppSecretId'];
        }

        return $model;
    }
}
