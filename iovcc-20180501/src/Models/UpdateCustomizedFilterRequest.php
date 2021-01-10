<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class UpdateCustomizedFilterRequest extends Model
{
    /**
     * @var string
     */
    public $blackWhiteType;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $value;

    /**
     * @var string
     */
    public $valueType;

    /**
     * @var string
     */
    public $valueCompareType;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'blackWhiteType'   => 'BlackWhiteType',
        'projectId'        => 'ProjectId',
        'name'             => 'Name',
        'value'            => 'Value',
        'valueType'        => 'ValueType',
        'valueCompareType' => 'ValueCompareType',
        'id'               => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blackWhiteType) {
            $res['BlackWhiteType'] = $this->blackWhiteType;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->valueType) {
            $res['ValueType'] = $this->valueType;
        }
        if (null !== $this->valueCompareType) {
            $res['ValueCompareType'] = $this->valueCompareType;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateCustomizedFilterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlackWhiteType'])) {
            $model->blackWhiteType = $map['BlackWhiteType'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['ValueType'])) {
            $model->valueType = $map['ValueType'];
        }
        if (isset($map['ValueCompareType'])) {
            $model->valueCompareType = $map['ValueCompareType'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
