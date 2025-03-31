<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyApsDatasoureRequest\kafkaInfo;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyApsDatasoureRequest\lakehouseId;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyApsDatasoureRequest\polarDBMysqlInfo;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyApsDatasoureRequest\rdsMysqlInfo;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyApsDatasoureRequest\slsInfo;

class ModifyApsDatasoureRequest extends Model
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
     * @var kafkaInfo
     */
    public $kafkaInfo;

    /**
     * @var lakehouseId
     */
    public $lakehouseId;

    /**
     * @var polarDBMysqlInfo
     */
    public $polarDBMysqlInfo;

    /**
     * @var rdsMysqlInfo
     */
    public $rdsMysqlInfo;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var slsInfo
     */
    public $slsInfo;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'datasourceDescription' => 'DatasourceDescription',
        'datasourceId' => 'DatasourceId',
        'datasourceName' => 'DatasourceName',
        'kafkaInfo' => 'KafkaInfo',
        'lakehouseId' => 'LakehouseId',
        'polarDBMysqlInfo' => 'PolarDBMysqlInfo',
        'rdsMysqlInfo' => 'RdsMysqlInfo',
        'regionId' => 'RegionId',
        'slsInfo' => 'SlsInfo',
    ];

    public function validate()
    {
        if (null !== $this->kafkaInfo) {
            $this->kafkaInfo->validate();
        }
        if (null !== $this->lakehouseId) {
            $this->lakehouseId->validate();
        }
        if (null !== $this->polarDBMysqlInfo) {
            $this->polarDBMysqlInfo->validate();
        }
        if (null !== $this->rdsMysqlInfo) {
            $this->rdsMysqlInfo->validate();
        }
        if (null !== $this->slsInfo) {
            $this->slsInfo->validate();
        }
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

        if (null !== $this->kafkaInfo) {
            $res['KafkaInfo'] = null !== $this->kafkaInfo ? $this->kafkaInfo->toArray($noStream) : $this->kafkaInfo;
        }

        if (null !== $this->lakehouseId) {
            $res['LakehouseId'] = null !== $this->lakehouseId ? $this->lakehouseId->toArray($noStream) : $this->lakehouseId;
        }

        if (null !== $this->polarDBMysqlInfo) {
            $res['PolarDBMysqlInfo'] = null !== $this->polarDBMysqlInfo ? $this->polarDBMysqlInfo->toArray($noStream) : $this->polarDBMysqlInfo;
        }

        if (null !== $this->rdsMysqlInfo) {
            $res['RdsMysqlInfo'] = null !== $this->rdsMysqlInfo ? $this->rdsMysqlInfo->toArray($noStream) : $this->rdsMysqlInfo;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->slsInfo) {
            $res['SlsInfo'] = null !== $this->slsInfo ? $this->slsInfo->toArray($noStream) : $this->slsInfo;
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
