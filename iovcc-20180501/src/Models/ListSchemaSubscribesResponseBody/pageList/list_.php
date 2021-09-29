<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\ListSchemaSubscribesResponseBody\pageList;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var int
     */
    public $deviceModelId;

    /**
     * @var string
     */
    public $version;

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
    public $validitySchema;

    /**
     * @var string
     */
    public $deviceModel;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'deviceModelId'  => 'DeviceModelId',
        'version'        => 'Version',
        'projectId'      => 'ProjectId',
        'gmtCreate'      => 'GmtCreate',
        'namespace'      => 'Namespace',
        'validitySchema' => 'ValiditySchema',
        'deviceModel'    => 'DeviceModel',
        'gmtModified'    => 'GmtModified',
        'id'             => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceModelId) {
            $res['DeviceModelId'] = $this->deviceModelId;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (null !== $this->validitySchema) {
            $res['ValiditySchema'] = $this->validitySchema;
        }
        if (null !== $this->deviceModel) {
            $res['DeviceModel'] = $this->deviceModel;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceModelId'])) {
            $model->deviceModelId = $map['DeviceModelId'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
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
        if (isset($map['ValiditySchema'])) {
            $model->validitySchema = $map['ValiditySchema'];
        }
        if (isset($map['DeviceModel'])) {
            $model->deviceModel = $map['DeviceModel'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
