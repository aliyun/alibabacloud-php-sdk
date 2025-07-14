<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class GetJobDataUploadParamsRequest extends Model
{
    /**
     * @example SCRIPT_RECORDING
     *
     * @var string
     */
    public $busiType;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $fileName;

    /**
     * @description This parameter is required.
     *
     * @example 4eee9bf8-1319-468f-ac82-83c50ae389f8
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example //airwaybill/1237185904146124802
     *
     * @var string
     */
    public $path;

    /**
     * @example sas_siema_1477832102462645_siem_f07e90c2c147cf8cf1549ccb974e1956
     *
     * @var string
     */
    public $uniqueId;
    protected $_name = [
        'busiType' => 'BusiType',
        'fileName' => 'FileName',
        'instanceId' => 'InstanceId',
        'path' => 'Path',
        'uniqueId' => 'UniqueId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->busiType) {
            $res['BusiType'] = $this->busiType;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->uniqueId) {
            $res['UniqueId'] = $this->uniqueId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetJobDataUploadParamsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusiType'])) {
            $model->busiType = $map['BusiType'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['UniqueId'])) {
            $model->uniqueId = $map['UniqueId'];
        }

        return $model;
    }
}
