<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class CreateHadoopDataSourceRequest extends Model
{
    /**
     * @description Instance ID.
     *
     * This parameter is required.
     * @example gp-xxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description Service description.
     *
     * @example pxf for hdfs data source
     *
     * @var string
     */
    public $dataSourceDescription;

    /**
     * @description Service name.
     *
     * @example hdfs_pxf
     *
     * @var string
     */
    public $dataSourceName;

    /**
     * @description Type of Hadoop external table to be enabled, with values:
     *
     * - Hive
     * @example HDFS
     *
     * @var string
     */
    public $dataSourceType;

    /**
     * @description When HadoopCreateType=Emr, this field should contain the EMR instance ID.
     *
     * @example c-1234567
     *
     * @var string
     */
    public $emrInstanceId;

    /**
     * @description Content string of the Hadoop hdfs-site.xml file. This field is required when enabling an HDFS external table.
     *
     * @example <?xml version="1.0" ?>
     * </configuration>
     * @var string
     */
    public $HDFSConf;

    /**
     * @description Content string of the Hadoop core-site.xml file.
     *
     * @example <?xml version="1.0" ?>
     * </configuration>
     * @var string
     */
    public $hadoopCoreConf;

    /**
     * @description External service type:
     *
     * - hadoop: Self-built Hadoop
     * @example emr
     *
     * @var string
     */
    public $hadoopCreateType;

    /**
     * @description Address and hostname of the Hadoop cluster\\"s source node in the /etc/hosts file.
     *
     * @example 192.168.220.128 master-1-1.c-xxx.cn-shanghai.emr.aliyuncs.com
     * 192.168.220.130 core-1-2.c-xxx.cn-shanghai.emr.aliyuncs.com
     * @var string
     */
    public $hadoopHostsAddress;

    /**
     * @description Content string of the Hadoop hive-site.xml file. This field is required when enabling a HIVE external table.
     *
     * @example <?xml version="1.0" ?>
     * </configuration>
     * @var string
     */
    public $hiveConf;

    /**
     * @description Content string of the Hadoop mapred-site.xml file. This field is required when enabling an HDFS external table.
     *
     * @example xxxxxx
     *
     * @var string
     */
    public $mapReduceConf;

    /**
     * @description Region ID.
     *
     * > You can call the [DescribeRegions](https://help.aliyun.com/document_detail/86912.html) interface to view available region IDs.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Content string of the Hadoop yarn-site.xml file. This field is required when enabling an HDFS external table.
     *
     * @example <?xml version="1.0" ?>
     * </configuration>
     * @var string
     */
    public $yarnConf;
    protected $_name = [
        'DBInstanceId'          => 'DBInstanceId',
        'dataSourceDescription' => 'DataSourceDescription',
        'dataSourceName'        => 'DataSourceName',
        'dataSourceType'        => 'DataSourceType',
        'emrInstanceId'         => 'EmrInstanceId',
        'HDFSConf'              => 'HDFSConf',
        'hadoopCoreConf'        => 'HadoopCoreConf',
        'hadoopCreateType'      => 'HadoopCreateType',
        'hadoopHostsAddress'    => 'HadoopHostsAddress',
        'hiveConf'              => 'HiveConf',
        'mapReduceConf'         => 'MapReduceConf',
        'regionId'              => 'RegionId',
        'yarnConf'              => 'YarnConf',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->dataSourceDescription) {
            $res['DataSourceDescription'] = $this->dataSourceDescription;
        }
        if (null !== $this->dataSourceName) {
            $res['DataSourceName'] = $this->dataSourceName;
        }
        if (null !== $this->dataSourceType) {
            $res['DataSourceType'] = $this->dataSourceType;
        }
        if (null !== $this->emrInstanceId) {
            $res['EmrInstanceId'] = $this->emrInstanceId;
        }
        if (null !== $this->HDFSConf) {
            $res['HDFSConf'] = $this->HDFSConf;
        }
        if (null !== $this->hadoopCoreConf) {
            $res['HadoopCoreConf'] = $this->hadoopCoreConf;
        }
        if (null !== $this->hadoopCreateType) {
            $res['HadoopCreateType'] = $this->hadoopCreateType;
        }
        if (null !== $this->hadoopHostsAddress) {
            $res['HadoopHostsAddress'] = $this->hadoopHostsAddress;
        }
        if (null !== $this->hiveConf) {
            $res['HiveConf'] = $this->hiveConf;
        }
        if (null !== $this->mapReduceConf) {
            $res['MapReduceConf'] = $this->mapReduceConf;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->yarnConf) {
            $res['YarnConf'] = $this->yarnConf;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateHadoopDataSourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DataSourceDescription'])) {
            $model->dataSourceDescription = $map['DataSourceDescription'];
        }
        if (isset($map['DataSourceName'])) {
            $model->dataSourceName = $map['DataSourceName'];
        }
        if (isset($map['DataSourceType'])) {
            $model->dataSourceType = $map['DataSourceType'];
        }
        if (isset($map['EmrInstanceId'])) {
            $model->emrInstanceId = $map['EmrInstanceId'];
        }
        if (isset($map['HDFSConf'])) {
            $model->HDFSConf = $map['HDFSConf'];
        }
        if (isset($map['HadoopCoreConf'])) {
            $model->hadoopCoreConf = $map['HadoopCoreConf'];
        }
        if (isset($map['HadoopCreateType'])) {
            $model->hadoopCreateType = $map['HadoopCreateType'];
        }
        if (isset($map['HadoopHostsAddress'])) {
            $model->hadoopHostsAddress = $map['HadoopHostsAddress'];
        }
        if (isset($map['HiveConf'])) {
            $model->hiveConf = $map['HiveConf'];
        }
        if (isset($map['MapReduceConf'])) {
            $model->mapReduceConf = $map['MapReduceConf'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['YarnConf'])) {
            $model->yarnConf = $map['YarnConf'];
        }

        return $model;
    }
}
