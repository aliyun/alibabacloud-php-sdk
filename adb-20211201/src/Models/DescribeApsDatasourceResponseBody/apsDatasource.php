<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsDatasourceResponseBody;

use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsDatasourceResponseBody\apsDatasource\databricksInfo;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsDatasourceResponseBody\apsDatasource\hiveInfo;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsDatasourceResponseBody\apsDatasource\kafkaInfo;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsDatasourceResponseBody\apsDatasource\polarDBMysqlInfo;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsDatasourceResponseBody\apsDatasource\rdsMysqlInfo;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsDatasourceResponseBody\apsDatasource\slsInfo;
use AlibabaCloud\Tea\Model;

class apsDatasource extends Model
{
    /**
     * @example 2024-04-12T15:03:38Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example amv-******
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
     * @example test
     *
     * @var string
     */
    public $datasourceDescription;

    /**
     * @example kafka-2024***
     *
     * @var string
     */
    public $datasourceName;

    /**
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
     * @example -
     *
     * @var slsInfo
     */
    public $slsInfo;
    protected $_name = [
        'createTime'            => 'CreateTime',
        'DBClusterId'           => 'DBClusterId',
        'databricksInfo'        => 'DatabricksInfo',
        'datasourceDescription' => 'DatasourceDescription',
        'datasourceName'        => 'DatasourceName',
        'datasourceType'        => 'DatasourceType',
        'hiveInfo'              => 'HiveInfo',
        'kafkaInfo'             => 'KafkaInfo',
        'polarDBMysqlInfo'      => 'PolarDBMysqlInfo',
        'rdsMysqlInfo'          => 'RdsMysqlInfo',
        'slsInfo'               => 'SlsInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
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
        if (null !== $this->polarDBMysqlInfo) {
            $res['PolarDBMysqlInfo'] = null !== $this->polarDBMysqlInfo ? $this->polarDBMysqlInfo->toMap() : null;
        }
        if (null !== $this->rdsMysqlInfo) {
            $res['RdsMysqlInfo'] = null !== $this->rdsMysqlInfo ? $this->rdsMysqlInfo->toMap() : null;
        }
        if (null !== $this->slsInfo) {
            $res['SlsInfo'] = null !== $this->slsInfo ? $this->slsInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apsDatasource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
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
        if (isset($map['PolarDBMysqlInfo'])) {
            $model->polarDBMysqlInfo = polarDBMysqlInfo::fromMap($map['PolarDBMysqlInfo']);
        }
        if (isset($map['RdsMysqlInfo'])) {
            $model->rdsMysqlInfo = rdsMysqlInfo::fromMap($map['RdsMysqlInfo']);
        }
        if (isset($map['SlsInfo'])) {
            $model->slsInfo = slsInfo::fromMap($map['SlsInfo']);
        }

        return $model;
    }
}
