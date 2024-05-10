<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class DeleteProcessInstanceRequest extends Model
{
    /**
     * @description The ID of the Data Lakehouse Edition (V3.0) cluster.
     *
     * This parameter is required.
     * @example am-wz9rq819u71ig****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The ID of the workflow instance.
     *
     * This parameter is required.
     * @example 4017
     *
     * @var int
     */
    public $processInstanceId;

    /**
     * @description The project ID, which is the unique identifier of the project.
     *
     * This parameter is required.
     * @example 9839028042592
     *
     * @var int
     */
    public $projectCode;

    /**
     * @description The region ID of the cluster.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'DBClusterId'       => 'DBClusterId',
        'processInstanceId' => 'ProcessInstanceId',
        'projectCode'       => 'ProjectCode',
        'regionId'          => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->processInstanceId) {
            $res['ProcessInstanceId'] = $this->processInstanceId;
        }
        if (null !== $this->projectCode) {
            $res['ProjectCode'] = $this->projectCode;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteProcessInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['ProcessInstanceId'])) {
            $model->processInstanceId = $map['ProcessInstanceId'];
        }
        if (isset($map['ProjectCode'])) {
            $model->projectCode = $map['ProjectCode'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
