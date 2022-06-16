<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models\ListAppEnvironmentResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
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
     * @var int
     */
    public $envId;

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
    public $envTypeName;

    /**
     * @var string
     */
    public $region;
    protected $_name = [
        'appId'       => 'AppId',
        'appSchemaId' => 'AppSchemaId',
        'envId'       => 'EnvId',
        'envName'     => 'EnvName',
        'envType'     => 'EnvType',
        'envTypeName' => 'EnvTypeName',
        'region'      => 'Region',
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
        if (null !== $this->envId) {
            $res['EnvId'] = $this->envId;
        }
        if (null !== $this->envName) {
            $res['EnvName'] = $this->envName;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->envTypeName) {
            $res['EnvTypeName'] = $this->envTypeName;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
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
        if (isset($map['EnvId'])) {
            $model->envId = $map['EnvId'];
        }
        if (isset($map['EnvName'])) {
            $model->envName = $map['EnvName'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['EnvTypeName'])) {
            $model->envTypeName = $map['EnvTypeName'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        return $model;
    }
}
