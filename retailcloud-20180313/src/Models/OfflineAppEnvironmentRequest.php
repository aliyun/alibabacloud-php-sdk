<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models;

use AlibabaCloud\Tea\Model;

class OfflineAppEnvironmentRequest extends Model
{
    /**
     * @var int
     */
    public $appId;

    /**
     * @description 是否删除PVC，未传递默认不删除
     *
     * @var bool
     */
    public $deletePvc;

    /**
     * @var int
     */
    public $envId;
    protected $_name = [
        'appId'     => 'AppId',
        'deletePvc' => 'DeletePvc',
        'envId'     => 'EnvId',
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
        if (null !== $this->deletePvc) {
            $res['DeletePvc'] = $this->deletePvc;
        }
        if (null !== $this->envId) {
            $res['EnvId'] = $this->envId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OfflineAppEnvironmentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['DeletePvc'])) {
            $model->deletePvc = $map['DeletePvc'];
        }
        if (isset($map['EnvId'])) {
            $model->envId = $map['EnvId'];
        }

        return $model;
    }
}
