<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\ListShadowSchemasResponseBody\pageList;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $authTypeDesc;

    /**
     * @var int
     */
    public $deviceModelId;

    /**
     * @var int
     */
    public $authType;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $deviceModel;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $moduleSchema;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'authTypeDesc'  => 'AuthTypeDesc',
        'deviceModelId' => 'DeviceModelId',
        'authType'      => 'AuthType',
        'projectId'     => 'ProjectId',
        'gmtCreate'     => 'GmtCreate',
        'namespace'     => 'Namespace',
        'deviceModel'   => 'DeviceModel',
        'gmtModified'   => 'GmtModified',
        'moduleSchema'  => 'ModuleSchema',
        'id'            => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authTypeDesc) {
            $res['AuthTypeDesc'] = $this->authTypeDesc;
        }
        if (null !== $this->deviceModelId) {
            $res['DeviceModelId'] = $this->deviceModelId;
        }
        if (null !== $this->authType) {
            $res['AuthType'] = $this->authType;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->deviceModel) {
            $res['DeviceModel'] = $this->deviceModel;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->moduleSchema) {
            $res['ModuleSchema'] = $this->moduleSchema;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthTypeDesc'])) {
            $model->authTypeDesc = $map['AuthTypeDesc'];
        }
        if (isset($map['DeviceModelId'])) {
            $model->deviceModelId = $map['DeviceModelId'];
        }
        if (isset($map['AuthType'])) {
            $model->authType = $map['AuthType'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['DeviceModel'])) {
            $model->deviceModel = $map['DeviceModel'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['ModuleSchema'])) {
            $model->moduleSchema = $map['ModuleSchema'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
