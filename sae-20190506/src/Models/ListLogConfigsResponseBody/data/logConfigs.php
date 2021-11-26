<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\ListLogConfigsResponseBody\data;

use AlibabaCloud\Tea\Model;

class logConfigs extends Model
{
    /**
     * @var string
     */
    public $configName;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $logDir;

    /**
     * @var string
     */
    public $logType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $slsLogStore;

    /**
     * @var string
     */
    public $slsProject;

    /**
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
