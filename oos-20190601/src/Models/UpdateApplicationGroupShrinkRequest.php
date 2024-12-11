<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class UpdateApplicationGroupShrinkRequest extends Model
{
    /**
     * @description The application name.
     *
     * This parameter is required.
     * @example MyApplication
     *
     * @var string
     */
    public $applicationName;

    /**
     * @description The name of the application group.
     *
     * This parameter is required.
     * @example MyApplicationGroup
     *
     * @var string
     */
    public $name;

    /**
     * @description The new name of the application group.
     *
     * @example UpdateMyApplicationGroup
     *
     * @var string
     */
    public $newName;

    /**
     * @description The name of the configuration update operation.
     *
     * @example /business/v1/product/spus/{spu_id}
     *
     * @var string
     */
    public $operationName;

    /**
     * @description The JSON string that consists of a set of parameters. Default value: {}.
     *
     * @example {"username": "xx"}
     *
     * @var string
     */
    public $parametersShrink;

    /**
     * @description The region ID. Set the value to cn-hangzhou.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'applicationName'  => 'ApplicationName',
        'name'             => 'Name',
        'newName'          => 'NewName',
        'operationName'    => 'OperationName',
        'parametersShrink' => 'Parameters',
        'regionId'         => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->newName) {
            $res['NewName'] = $this->newName;
        }
        if (null !== $this->operationName) {
            $res['OperationName'] = $this->operationName;
        }
        if (null !== $this->parametersShrink) {
            $res['Parameters'] = $this->parametersShrink;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateApplicationGroupShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NewName'])) {
            $model->newName = $map['NewName'];
        }
        if (isset($map['OperationName'])) {
            $model->operationName = $map['OperationName'];
        }
        if (isset($map['Parameters'])) {
            $model->parametersShrink = $map['Parameters'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
