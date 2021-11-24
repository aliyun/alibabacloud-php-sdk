<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class GetImageRequest extends Model
{
    /**
     * @description 集群版本
     *
     * @var string
     */
    public $versionCode;
    protected $_name = [
        'versionCode' => 'VersionCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->versionCode) {
            $res['VersionCode'] = $this->versionCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetImageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VersionCode'])) {
            $model->versionCode = $map['VersionCode'];
        }

        return $model;
    }
}
