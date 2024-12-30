<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\SDK\Adb\V20211201\Models\CreateApsDatasoureRequest\databricksInfo;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateApsDatasoureRequest\hiveInfo;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateApsDatasoureRequest\kafkaInfo;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateApsDatasoureRequest\polarDBMysqlInfo;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateApsDatasoureRequest\polarDBXInfo;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateApsDatasoureRequest\rdsMysqlInfo;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateApsDatasoureRequest\slsInfo;
use AlibabaCloud\Tea\Model;

class CreateApsDatasoureRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example amv-xxxxx
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @example -
     *
     * @var databricksInfo
     */
    public $databricksInfo;

    /**
     * @example description
     *
     * @var string
     */
    public $datasourceDescription;

    /**
     * @description This parameter is required.
     *
     * @example sls-******
     *
     * @var string
     */
    public $datasourceName;

    /**
     * @description This parameter is required.
     *
     * @example KAFKA
     *
     * @var string
     */
    public $datasourceType;

    /**
     * @example -
     *
     * @var hiveInfo
     */
    public $hiveInfo;

    /**
     * @example -
     *
     * @var kafkaInfo
     */
    public $kafkaInfo;

    /**
     * @example ALI_CLOUD_INSTANCE
     *
     * @var string
     */
    public $mode;

    /**
     * @example -
     *
     * @var polarDBMysqlInfo
     */
    public $polarDBMysqlInfo;

    /**
     * @example -
     *
     * @var polarDBXInfo
     */
    public $polarDBXInfo;

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
        'databricksInfo'        => 'DatabricksInfo',
        'datasourceDescription' => 'DatasourceDescription',
        'datasourceName'        => 'DatasourceName',
        'datasourceType'        => 'DatasourceType',
        'hiveInfo'              => 'HiveInfo',
        'kafkaInfo'             => 'KafkaInfo',
        'mode'                  => 'Mode',
        'polarDBMysqlInfo'      => 'PolarDBMysqlInfo',
        'polarDBXInfo'          => 'PolarDBXInfo',
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
        if (null !== $this->databricksInfo) {
            $res['DatabricksInfo'] = null !== $this->databricksInfo ? $this->databricksInfo->toMap() : null;
        }
        if (null !== $this->datasourceDescription) {
            $res['DatasourceDescription'] = $this->datasourceDescription;
        }
        if (null !== $this->datasourceName) {
            $res['DatasourceName'] = $this->datasourceName;
        }
        if (null !== $this->datasourceType) {
            $res['DatasourceType'] = $this->datasourceType;
        }
        if (null !== $this->hiveInfo) {
            $res['HiveInfo'] = null !== $this->hiveInfo ? $this->hiveInfo->toMap() : null;
        }
        if (null !== $this->kafkaInfo) {
            $res['KafkaInfo'] = null !== $this->kafkaInfo ? $this->kafkaInfo->toMap() : null;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->polarDBMysqlInfo) {
            $res['PolarDBMysqlInfo'] = null !== $this->polarDBMysqlInfo ? $this->polarDBMysqlInfo->toMap() : null;
        }
        if (null !== $this->polarDBXInfo) {
            $res['PolarDBXInfo'] = null !== $this->polarDBXInfo ? $this->polarDBXInfo->toMap() : null;
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
     * @return CreateApsDatasoureRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['DatabricksInfo'])) {
            $model->databricksInfo = databricksInfo::fromMap($map['DatabricksInfo']);
        }
        if (isset($map['DatasourceDescription'])) {
            $model->datasourceDescription = $map['DatasourceDescription'];
        }
        if (isset($map['DatasourceName'])) {
            $model->datasourceName = $map['DatasourceName'];
        }
        if (isset($map['DatasourceType'])) {
            $model->datasourceType = $map['DatasourceType'];
        }
        if (isset($map['HiveInfo'])) {
            $model->hiveInfo = hiveInfo::fromMap($map['HiveInfo']);
        }
        if (isset($map['KafkaInfo'])) {
            $model->kafkaInfo = kafkaInfo::fromMap($map['KafkaInfo']);
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['PolarDBMysqlInfo'])) {
            $model->polarDBMysqlInfo = polarDBMysqlInfo::fromMap($map['PolarDBMysqlInfo']);
        }
        if (isset($map['PolarDBXInfo'])) {
            $model->polarDBXInfo = polarDBXInfo::fromMap($map['PolarDBXInfo']);
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
