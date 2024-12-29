<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class ModifyApsDatasoureShrinkRequest extends Model
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
     * @var string
     */
    public $kafkaInfoShrink;

    /**
     * @description Lakehouse ID。
     *
     * @example 123
     *
     * @var string
     */
    public $lakehouseIdShrink;

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
        'datasourceDescription'  => 'DatasourceDescription',
        'datasourceId'           => 'DatasourceId',
        'datasourceName'         => 'DatasourceName',
        'kafkaInfoShrink'        => 'KafkaInfo',
        'lakehouseIdShrink'      => 'LakehouseId',
        'polarDBMysqlInfoShrink' => 'PolarDBMysqlInfo',
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
        if (null !== $this->datasourceDescription) {
            $res['DatasourceDescription'] = $this->datasourceDescription;
        }
        if (null !== $this->datasourceId) {
            $res['DatasourceId'] = $this->datasourceId;
        }
        if (null !== $this->datasourceName) {
            $res['DatasourceName'] = $this->datasourceName;
        }
        if (null !== $this->kafkaInfoShrink) {
            $res['KafkaInfo'] = $this->kafkaInfoShrink;
        }
        if (null !== $this->lakehouseIdShrink) {
            $res['LakehouseId'] = $this->lakehouseIdShrink;
        }
        if (null !== $this->polarDBMysqlInfoShrink) {
            $res['PolarDBMysqlInfo'] = $this->polarDBMysqlInfoShrink;
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
     * @return ModifyApsDatasoureShrinkRequest
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
            $model->kafkaInfoShrink = $map['KafkaInfo'];
        }
        if (isset($map['LakehouseId'])) {
            $model->lakehouseIdShrink = $map['LakehouseId'];
        }
        if (isset($map['PolarDBMysqlInfo'])) {
            $model->polarDBMysqlInfoShrink = $map['PolarDBMysqlInfo'];
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
