<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models;

use AlibabaCloud\Tea\Model;

class UpdateEnvironmentRequest extends Model
{
    /**
     * @var int
     */
    public $appEnvId;

    /**
     * @var int
     */
    public $appId;

    /**
     * @var int
     */
    public $appSchemaId;

    /**
     * @var int
     */
    public $replicas;
    protected $_name = [
        'appEnvId'    => 'AppEnvId',
        'appId'       => 'AppId',
        'appSchemaId' => 'AppSchemaId',
        'replicas'    => 'Replicas',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appEnvId) {
            $res['AppEnvId'] = $this->appEnvId;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appSchemaId) {
            $res['AppSchemaId'] = $this->appSchemaId;
        }
        if (null !== $this->replicas) {
            $res['Replicas'] = $this->replicas;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateEnvironmentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppEnvId'])) {
            $model->appEnvId = $map['AppEnvId'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppSchemaId'])) {
            $model->appSchemaId = $map['AppSchemaId'];
        }
        if (isset($map['Replicas'])) {
            $model->replicas = $map['Replicas'];
        }

        return $model;
    }
}
