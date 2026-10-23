<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class ApplyLakebaseMountParameterGroupRequest extends Model
{
    /**
     * @var string
     */
    public $parameterGroupId;

    /**
     * @var string
     */
    public $polarFsInstanceId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'parameterGroupId' => 'ParameterGroupId',
        'polarFsInstanceId' => 'PolarFsInstanceId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->parameterGroupId) {
            $res['ParameterGroupId'] = $this->parameterGroupId;
        }

        if (null !== $this->polarFsInstanceId) {
            $res['PolarFsInstanceId'] = $this->polarFsInstanceId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParameterGroupId'])) {
            $model->parameterGroupId = $map['ParameterGroupId'];
        }

        if (isset($map['PolarFsInstanceId'])) {
            $model->polarFsInstanceId = $map['PolarFsInstanceId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
