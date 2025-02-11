<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class ModifyApsDatasoureShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;
    /**
     * @var string
     */
    public $datasourceDescription;
    /**
     * @var int
     */
    public $datasourceId;
    /**
     * @var string
     */
    public $datasourceName;
    /**
     * @var string
     */
    public $kafkaInfoShrink;
    /**
     * @var string
     */
    public $lakehouseIdShrink;
    /**
     * @var string
     */
    public $polarDBMysqlInfoShrink;
    /**
     * @var string
     */
    public $rdsMysqlInfoShrink;
    /**
     * @var string
     */
    public $regionId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
