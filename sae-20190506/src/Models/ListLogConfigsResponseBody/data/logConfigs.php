<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\ListLogConfigsResponseBody\data;

use AlibabaCloud\Tea\Model;

class logConfigs extends Model
{
    /**
     * @description The path of logs.
     *
     * @example sae-1f240907a6faf58c653f09e81b7e****
     *
     * @var string
     */
    public $configName;

    /**
     * @description The storage type of logs.
     *
     * @example 2019-08-29 17:18:00
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The name of the Logstore in Log Service.
     *
     * @example /root/logs/hsf/hsf.log
     *
     * @var string
     */
    public $logDir;

    /**
     * @description The ID of the region.
     *
     * @example file_log
     *
     * @var string
     */
    public $logType;

    /**
     * @description The number of the returned page.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The time when the configuration was created.
     *
     * @example sae-1f240907a6faf58c653f09e81b7e****
     *
     * @var string
     */
    public $slsLogStore;

    /**
     * @description The type of the log. Set this value to **file_log**.
     *
     * @example sae-56f77b65-788d-442a-9885-7f20d91f****
     *
     * @var string
     */
    public $slsProject;

    /**
     * @description The ID of the Log Service project.
     *
     * @example sls
     *
     * @var string
     */
    public $storeType;
    protected $_name = [
        'configName'  => 'ConfigName',
        'createTime'  => 'CreateTime',
        'logDir'      => 'LogDir',
        'logType'     => 'LogType',
        'regionId'    => 'RegionId',
        'slsLogStore' => 'SlsLogStore',
        'slsProject'  => 'SlsProject',
        'storeType'   => 'StoreType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configName) {
            $res['ConfigName'] = $this->configName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->logDir) {
            $res['LogDir'] = $this->logDir;
        }
        if (null !== $this->logType) {
            $res['LogType'] = $this->logType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->slsLogStore) {
            $res['SlsLogStore'] = $this->slsLogStore;
        }
        if (null !== $this->slsProject) {
            $res['SlsProject'] = $this->slsProject;
        }
        if (null !== $this->storeType) {
            $res['StoreType'] = $this->storeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigName'])) {
            $model->configName = $map['ConfigName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['LogDir'])) {
            $model->logDir = $map['LogDir'];
        }
        if (isset($map['LogType'])) {
            $model->logType = $map['LogType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SlsLogStore'])) {
            $model->slsLogStore = $map['SlsLogStore'];
        }
        if (isset($map['SlsProject'])) {
            $model->slsProject = $map['SlsProject'];
        }
        if (isset($map['StoreType'])) {
            $model->storeType = $map['StoreType'];
        }

        return $model;
    }
}
