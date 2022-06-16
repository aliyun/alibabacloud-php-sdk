<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models;

use AlibabaCloud\Tea\Model;

class DeletePersistentVolumeClaimRequest extends Model
{
    /**
     * @var int
     */
    public $appId;

    /**
     * @var int
     */
    public $envId;

    /**
     * @var string
     */
    public $persistentVolumeClaimName;
    protected $_name = [
        'appId'                     => 'AppId',
        'envId'                     => 'EnvId',
        'persistentVolumeClaimName' => 'PersistentVolumeClaimName',
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
        if (null !== $this->envId) {
            $res['EnvId'] = $this->envId;
        }
        if (null !== $this->persistentVolumeClaimName) {
            $res['PersistentVolumeClaimName'] = $this->persistentVolumeClaimName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeletePersistentVolumeClaimRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['EnvId'])) {
            $model->envId = $map['EnvId'];
        }
        if (isset($map['PersistentVolumeClaimName'])) {
            $model->persistentVolumeClaimName = $map['PersistentVolumeClaimName'];
        }

        return $model;
    }
}
