<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class CreateApsDatasoureShrinkRequest extends Model
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
     * @var string
     */
    public $databricksInfoShrink;

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
     * @var string
     */
    public $hiveInfoShrink;

    /**
     * @example -
     *
     * @var string
     */
    public $kafkaInfoShrink;

    /**
     * @example ALI_CLOUD_INSTANCE
     *
     * @var string
     */
    public $mode;

    /**
     * @example -
     *
     * @var string
     */
    public $polarDBMysqlInfoShrink;

    /**
     * @example -
     *
     * @var string
     */
    public $polarDBXInfoShrink;

    /**
     * @example -
     *
     * @var string
     */
    public $rdsMysqlInfoShrink;

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
     * @var string
     */
    public $slsInfoShrink;
    protected $_name = [
        'DBClusterId'            => 'DBClusterId',
        'databricksInfoShrink'   => 'DatabricksInfo',
        'datasourceDescription'  => 'DatasourceDescription',
        'datasourceName'         => 'DatasourceName',
        'datasourceType'         => 'DatasourceType',
        'hiveInfoShrink'         => 'HiveInfo',
        'kafkaInfoShrink'        => 'KafkaInfo',
        'mode'                   => 'Mode',
        'polarDBMysqlInfoShrink' => 'PolarDBMysqlInfo',
        'polarDBXInfoShrink'     => 'PolarDBXInfo',
        'rdsMysqlInfoShrink'     => 'RdsMysqlInfo',
        'regionId'               => 'RegionId',
        'slsInfoShrink'          => 'SlsInfo',
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
        if (null !== $this->databricksInfoShrink) {
            $res['DatabricksInfo'] = $this->databricksInfoShrink;
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
        if (null !== $this->hiveInfoShrink) {
            $res['HiveInfo'] = $this->hiveInfoShrink;
        }
        if (null !== $this->kafkaInfoShrink) {
            $res['KafkaInfo'] = $this->kafkaInfoShrink;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->polarDBMysqlInfoShrink) {
            $res['PolarDBMysqlInfo'] = $this->polarDBMysqlInfoShrink;
        }
        if (null !== $this->polarDBXInfoShrink) {
            $res['PolarDBXInfo'] = $this->polarDBXInfoShrink;
        }
        if (null !== $this->rdsMysqlInfoShrink) {
            $res['RdsMysqlInfo'] = $this->rdsMysqlInfoShrink;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->slsInfoShrink) {
            $res['SlsInfo'] = $this->slsInfoShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateApsDatasoureShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['DatabricksInfo'])) {
            $model->databricksInfoShrink = $map['DatabricksInfo'];
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
            $model->hiveInfoShrink = $map['HiveInfo'];
        }
        if (isset($map['KafkaInfo'])) {
            $model->kafkaInfoShrink = $map['KafkaInfo'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['PolarDBMysqlInfo'])) {
            $model->polarDBMysqlInfoShrink = $map['PolarDBMysqlInfo'];
        }
        if (isset($map['PolarDBXInfo'])) {
            $model->polarDBXInfoShrink = $map['PolarDBXInfo'];
        }
        if (isset($map['RdsMysqlInfo'])) {
            $model->rdsMysqlInfoShrink = $map['RdsMysqlInfo'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SlsInfo'])) {
            $model->slsInfoShrink = $map['SlsInfo'];
        }

        return $model;
    }
}
