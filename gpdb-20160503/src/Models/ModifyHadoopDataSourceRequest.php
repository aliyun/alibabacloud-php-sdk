<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class ModifyHadoopDataSourceRequest extends Model
{
    /**
     * @description Instance ID.
     *
     * This parameter is required.
     *
     * @example gp-xxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description Service description, with a maximum length of 256 characters.
     *
     * @example pxf for hdfs data source
     *
     * @var string
     */
    public $dataSourceDescription;

    /**
     * @description The data source ID.
     *
     * @example 123
     *
     * @var string
     */
    public $dataSourceId;

    /**
     * @description The type of the data source. Valid values:
     *
     *   mysql
     *
     * - postgresql
     *
     *   hdfs
     *
     * - hive
     *
     * @example mysql
     *
     * @var string
     */
    public $dataSourceType;

    /**
     * @description When HadoopCreateType is Emr, the value of this field is the EMR instance ID.
     *
     * @example c-1234567
     *
     * @var string
     */
    public $emrInstanceId;

    /**
     * @description The content of the Hadoop hdfs-site.xml file. This parameter must be specified when DataSourceType is set to HDFS.
     *
     * @example xxxxxx
     *
     * @var string
     */
    public $HDFSConf;

    /**
     * @description The content of the Hadoop core-site.xml file.
     *
     * @example xxxxxx
     *
     * @var string
     */
    public $hadoopCoreConf;

    /**
     * @description The type of the external service. Valid values:
     *
     *   emr: E-MapReduce (EMR) Hadoop cluster.
     *   selfCreate: self-managed Hadoop cluster.
     *
     * @example emr
     *
     * @var string
     */
    public $hadoopCreateType;

    /**
     * @description The IP address and hostname of the Hadoop cluster (data source) in the /etc/hosts file.
     *
     * @example 127.0.0.1 localhost
     *
     * @var string
     */
    public $hadoopHostsAddress;

    /**
     * @description The content of the Hadoop hive-site.xml file. This parameter must be specified when DataSourceType is set to Hive.
     *
     * @example xxxxxx
     *
     * @var string
     */
    public $hiveConf;

    /**
     * @description The content of the Hadoop mapred-site.xml file. This parameter must be specified when DataSourceType is set to HDFS.
     *
     * @example <?xml version="1.0" ?>
     * <!-- Created at 2023-08-15 13:53:28.962 -->
     * <configuration>
     * <property>
     * <name>mapreduce.map.speculative</name>
     * <value>true</value>
     * </property>
     * <property>
     * <name>mapreduce.jobhistory.keytab</name>
     * <value></value>
     * </property>
     * </configuration>
     *
     * @var string
     */
    public $mapReduceConf;

    /**
     * @description The region ID.
     *
     * >  You can call the [DescribeRegions](https://help.aliyun.com/document_detail/86912.html) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The content of the Hadoop yarn-site.xml file. This parameter must be specified when DataSourceType is set to HDFS.
     *
     * @example xxxxxx
     *
     * @var string
     */
    public $yarnConf;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'dataSourceDescription' => 'DataSourceDescription',
        'dataSourceId' => 'DataSourceId',
        'dataSourceType' => 'DataSourceType',
        'emrInstanceId' => 'EmrInstanceId',
        'HDFSConf' => 'HDFSConf',
        'hadoopCoreConf' => 'HadoopCoreConf',
        'hadoopCreateType' => 'HadoopCreateType',
        'hadoopHostsAddress' => 'HadoopHostsAddress',
        'hiveConf' => 'HiveConf',
        'mapReduceConf' => 'MapReduceConf',
        'regionId' => 'RegionId',
        'yarnConf' => 'YarnConf',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->dataSourceDescription) {
            $res['DataSourceDescription'] = $this->dataSourceDescription;
        }
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
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
     * @return ModifyHadoopDataSourceRequest
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
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
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
