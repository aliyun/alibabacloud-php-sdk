<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateApsDatasoureRequest\databricksInfo;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateApsDatasoureRequest\hiveInfo;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateApsDatasoureRequest\kafkaInfo;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateApsDatasoureRequest\polarDBMysqlInfo;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateApsDatasoureRequest\polarDBXInfo;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateApsDatasoureRequest\rdsMysqlInfo;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateApsDatasoureRequest\slsInfo;

class CreateApsDatasoureRequest extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;
    /**
     * @var databricksInfo
     */
    public $databricksInfo;
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
     * @var hiveInfo
     */
    public $hiveInfo;
    /**
     * @var kafkaInfo
     */
    public $kafkaInfo;
    /**
     * @var string
     */
    public $mode;
    /**
     * @var polarDBMysqlInfo
     */
    public $polarDBMysqlInfo;
    /**
     * @var polarDBXInfo
     */
    public $polarDBXInfo;
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
        if (null !== $this->databricksInfo) {
            $this->databricksInfo->validate();
        }
        if (null !== $this->hiveInfo) {
            $this->hiveInfo->validate();
        }
        if (null !== $this->kafkaInfo) {
            $this->kafkaInfo->validate();
        }
        if (null !== $this->polarDBMysqlInfo) {
            $this->polarDBMysqlInfo->validate();
        }
        if (null !== $this->polarDBXInfo) {
            $this->polarDBXInfo->validate();
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

        if (null !== $this->databricksInfo) {
            $res['DatabricksInfo'] = null !== $this->databricksInfo ? $this->databricksInfo->toArray($noStream) : $this->databricksInfo;
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
            $res['HiveInfo'] = null !== $this->hiveInfo ? $this->hiveInfo->toArray($noStream) : $this->hiveInfo;
        }

        if (null !== $this->kafkaInfo) {
            $res['KafkaInfo'] = null !== $this->kafkaInfo ? $this->kafkaInfo->toArray($noStream) : $this->kafkaInfo;
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->polarDBMysqlInfo) {
            $res['PolarDBMysqlInfo'] = null !== $this->polarDBMysqlInfo ? $this->polarDBMysqlInfo->toArray($noStream) : $this->polarDBMysqlInfo;
        }

        if (null !== $this->polarDBXInfo) {
            $res['PolarDBXInfo'] = null !== $this->polarDBXInfo ? $this->polarDBXInfo->toArray($noStream) : $this->polarDBXInfo;
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
