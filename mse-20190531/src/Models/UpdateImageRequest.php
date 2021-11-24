<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class UpdateImageRequest extends Model
{
    /**
     * @description 目标集群的id
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description 想修改的镜像版本code
     *
     * @var string
     */
    public $versionCode;
    protected $_name = [
        'clusterId'   => 'ClusterId',
        'versionCode' => 'VersionCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->versionCode) {
            $res['VersionCode'] = $this->versionCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateImageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['VersionCode'])) {
            $model->versionCode = $map['VersionCode'];
        }

        return $model;
    }
}
