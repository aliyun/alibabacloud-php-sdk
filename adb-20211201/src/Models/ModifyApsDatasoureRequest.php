<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyApsDatasoureRequest\kafkaInfo;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyApsDatasoureRequest\lakehouseId;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyApsDatasoureRequest\polarDBMysqlInfo;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyApsDatasoureRequest\rdsMysqlInfo;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyApsDatasoureRequest\slsInfo;
use AlibabaCloud\Tea\Model;

class ModifyApsDatasoureRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example amv-*******
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @example test
     *
     * @var string
     */
    public $datasourceDescription;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $datasourceId;

    /**
     * @example sls-******
     *
     * @var string
     */
    public $datasourceName;

    /**
     * @description -
     *
     * @example -
     *
     * @var kafkaInfo
     */
    public $kafkaInfo;

    /**
     * @description Lakehouse ID。
     *
     * @example 123
     *
     * @var lakehouseId
     */
    public $lakehouseId;

    /**
     * @example -
     *
     * @var polarDBMysqlInfo
     */
    public $polarDBMysqlInfo;

    /**
     * @example -
     *
     * @var rdsMysqlInfo
     */
    public $rdsMysqlInfo;

    /**
     * @description This parameter is required.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @example -
     *
     * @var slsInfo
     */
    public $slsInfo;
    protected $_name = [
        'DBClusterId'           => 'DBClusterId',
        'datasourceDescription' => 'DatasourceDescription',
        'datasourceId'          => 'DatasourceId',
        'datasourceName'        => 'DatasourceName',
        'kafkaInfo'             => 'KafkaInfo',
        'lakehouseId'           => 'LakehouseId',
        'polarDBMysqlInfo'      => 'PolarDBMysqlInfo',
        'rdsMysqlInfo'          => 'RdsMysqlInfo',
        'regionId'              => 'RegionId',
        'slsInfo'               => 'SlsInfo',
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
        if (null !== $this->datasourceDescription) {
            $res['DatasourceDescription'] = $this->datasourceDescription;
        }
        if (null !== $this->datasourceId) {
            $res['DatasourceId'] = $this->datasourceId;
        }
        if (null !== $this->datasourceName) {
            $res['DatasourceName'] = $this->datasourceName;
        }
        if (null !== $this->kafkaInfo) {
            $res['KafkaInfo'] = null !== $this->kafkaInfo ? $this->kafkaInfo->toMap() : null;
        }
        if (null !== $this->lakehouseId) {
            $res['LakehouseId'] = null !== $this->lakehouseId ? $this->lakehouseId->toMap() : null;
        }
        if (null !== $this->polarDBMysqlInfo) {
            $res['PolarDBMysqlInfo'] = null !== $this->polarDBMysqlInfo ? $this->polarDBMysqlInfo->toMap() : null;
        }
        if (null !== $this->rdsMysqlInfo) {
            $res['RdsMysqlInfo'] = null !== $this->rdsMysqlInfo ? $this->rdsMysqlInfo->toMap() : null;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->slsInfo) {
            $res['SlsInfo'] = null !== $this->slsInfo ? $this->slsInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyApsDatasoureRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['DatasourceDescription'])) {
            $model->datasourceDescription = $map['DatasourceDescription'];
        }
        if (isset($map['DatasourceId'])) {
            $model->datasourceId = $map['DatasourceId'];
        }
        if (isset($map['DatasourceName'])) {
            $model->datasourceName = $map['DatasourceName'];
        }
        if (isset($map['KafkaInfo'])) {
            $model->kafkaInfo = kafkaInfo::fromMap($map['KafkaInfo']);
        }
        if (isset($map['LakehouseId'])) {
            $model->lakehouseId = lakehouseId::fromMap($map['LakehouseId']);
        }
        if (isset($map['PolarDBMysqlInfo'])) {
            $model->polarDBMysqlInfo = polarDBMysqlInfo::fromMap($map['PolarDBMysqlInfo']);
        }
        if (isset($map['RdsMysqlInfo'])) {
            $model->rdsMysqlInfo = rdsMysqlInfo::fromMap($map['RdsMysqlInfo']);
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SlsInfo'])) {
            $model->slsInfo = slsInfo::fromMap($map['SlsInfo']);
        }

        return $model;
    }
}
