<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class CreateCustomizedFilterRequest extends Model
{
    /**
     * @var string
     */
    public $versionType;

    /**
     * @var string
     */
    public $blackWhiteType;

    /**
     * @var string
     */
    public $value;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $valueCompareType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $valueType;

    /**
     * @var string
     */
    public $versionId;
    protected $_name = [
        'versionType'      => 'VersionType',
        'blackWhiteType'   => 'BlackWhiteType',
        'value'            => 'Value',
        'projectId'        => 'ProjectId',
        'valueCompareType' => 'ValueCompareType',
        'name'             => 'Name',
        'valueType'        => 'ValueType',
        'versionId'        => 'VersionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->versionType) {
            $res['VersionType'] = $this->versionType;
        }
        if (null !== $this->blackWhiteType) {
            $res['BlackWhiteType'] = $this->blackWhiteType;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->valueCompareType) {
            $res['ValueCompareType'] = $this->valueCompareType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->valueType) {
            $res['ValueType'] = $this->valueType;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCustomizedFilterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VersionType'])) {
            $model->versionType = $map['VersionType'];
        }
        if (isset($map['BlackWhiteType'])) {
            $model->blackWhiteType = $map['BlackWhiteType'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ValueCompareType'])) {
            $model->valueCompareType = $map['ValueCompareType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ValueType'])) {
            $model->valueType = $map['ValueType'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
