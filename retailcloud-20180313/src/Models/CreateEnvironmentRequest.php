<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models;

use AlibabaCloud\Tea\Model;

class CreateEnvironmentRequest extends Model
{
    /**
     * @var int
     */
    public $appId;

    /**
     * @var int
     */
    public $appSchemaId;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $envName;

    /**
     * @var int
     */
    public $envType;

    /**
     * @var string
     */
    public $region;

    /**
     * @var int
     */
    public $replicas;
    protected $_name = [
        'appId'       => 'AppId',
        'appSchemaId' => 'AppSchemaId',
        'clusterId'   => 'ClusterId',
        'envName'     => 'EnvName',
        'envType'     => 'EnvType',
        'region'      => 'Region',
        'replicas'    => 'Replicas',
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
        if (null !== $this->appSchemaId) {
            $res['AppSchemaId'] = $this->appSchemaId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->envName) {
            $res['EnvName'] = $this->envName;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->replicas) {
            $res['Replicas'] = $this->replicas;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateEnvironmentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppSchemaId'])) {
            $model->appSchemaId = $map['AppSchemaId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['EnvName'])) {
            $model->envName = $map['EnvName'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Replicas'])) {
            $model->replicas = $map['Replicas'];
        }

        return $model;
    }
}
