<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class CreateApsDatasoureShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;
    /**
     * @var string
     */
    public $databricksInfoShrink;
    /**
     * @var string
     */
    public $datasourceDescription;
    /**
     * @var string
     */
    public $datasourceName;
    /**
     * @var string
     */
    public $datasourceType;
    /**
     * @var string
     */
    public $hiveInfoShrink;
    /**
     * @var string
     */
    public $kafkaInfoShrink;
    /**
     * @var string
     */
    public $mode;
    /**
     * @var string
     */
    public $polarDBMysqlInfoShrink;
    /**
     * @var string
     */
    public $polarDBXInfoShrink;
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
        parent::validate();
    }

    public function toArray($noStream = false)
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
