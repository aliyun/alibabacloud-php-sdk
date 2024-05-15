<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class CreateAdamBenchTaskRequest extends Model
{
    /**
     * @description The description of the stress testing task.
     *
     * This parameter is required.
     * @example test-das-bench-0501
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the destination instance. The instance must be an ApsaraDB RDS for MySQL instance or a PolarDB for MySQL instance. You can call the [GetInstanceInspections](https://help.aliyun.com/document_detail/202857.html) operation to query the ID.
     *
     * This parameter is required.
     * @example rm-2ze1jdv45i7l6****
     *
     * @var string
     */
    public $dstInstanceId;

    /**
     * @description The name of the privileged account for the destination instance.
     *
     * This parameter is required.
     * @example root***
     *
     * @var string
     */
    public $dstSuperAccount;

    /**
     * @description The password of the privileged account for the destination instance.
     *
     * This parameter is required.
     * @example root***1234
     *
     * @var string
     */
    public $dstSuperPassword;

    /**
     * @description The rate at which the traffic captured from the source database instance is replayed on the destination database instance. Valid values: 1 to 30. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $rate;

    /**
     * @description The duration of the stress testing task for which the traffic is captured from the source instance. Unit: milliseconds.
     *
     * This parameter is required.
     * @example 86400000
     *
     * @var int
     */
    public $requestDuration;

    /**
     * @description The start time of the stress testing task. Specify the time in the UNIX timestamp format. Unit: milliseconds.
     *
     * This parameter is required.
     * @example 1588819800000
     *
     * @var int
     */
    public $requestStartTime;

    /**
     * @description The database engine that the source database instance runs.
     *
     * @example MySQL
     *
     * @var string
     */
    public $srcEngine;

    /**
     * @description The version of the database engine that the source database instance runs.
     *
     * @example 9i
     *
     * @var string
     */
    public $srcEngineVersion;

    /**
     * @description The maximum number of queries per second (QPS) within the time period during which traffic on the source database instance is captured. The value must be accurate to two decimal places.
     *
     * This parameter is required.
     * @example 2013.22
     *
     * @var float
     */
    public $srcMaxQps;

    /**
     * @description The average QPS within the time period in which traffic on the source database instance is captured. The value must be accurate to two decimal places.
     *
     * This parameter is required.
     * @example 312.22
     *
     * @var float
     */
    public $srcMeanQps;

    /**
     * @description The URL of the Object Storage Service (OSS) folder in which the archived objects for SQL statements that run on the source database instance are stored. You can obtain the URL after you upload the archived files to OSS.
     *
     * This parameter is required.
     * @example http://rdslog-hz-v3.oss-cn-hangzhou.aliyuncs.com/custins4131****
     *
     * @var string
     */
    public $srcSqlOssAddr;
    protected $_name = [
        'description'      => 'Description',
        'dstInstanceId'    => 'DstInstanceId',
        'dstSuperAccount'  => 'DstSuperAccount',
        'dstSuperPassword' => 'DstSuperPassword',
        'rate'             => 'Rate',
        'requestDuration'  => 'RequestDuration',
        'requestStartTime' => 'RequestStartTime',
        'srcEngine'        => 'SrcEngine',
        'srcEngineVersion' => 'SrcEngineVersion',
        'srcMaxQps'        => 'SrcMaxQps',
        'srcMeanQps'       => 'SrcMeanQps',
        'srcSqlOssAddr'    => 'SrcSqlOssAddr',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->dstInstanceId) {
            $res['DstInstanceId'] = $this->dstInstanceId;
        }
        if (null !== $this->dstSuperAccount) {
            $res['DstSuperAccount'] = $this->dstSuperAccount;
        }
        if (null !== $this->dstSuperPassword) {
            $res['DstSuperPassword'] = $this->dstSuperPassword;
        }
        if (null !== $this->rate) {
            $res['Rate'] = $this->rate;
        }
        if (null !== $this->requestDuration) {
            $res['RequestDuration'] = $this->requestDuration;
        }
        if (null !== $this->requestStartTime) {
            $res['RequestStartTime'] = $this->requestStartTime;
        }
        if (null !== $this->srcEngine) {
            $res['SrcEngine'] = $this->srcEngine;
        }
        if (null !== $this->srcEngineVersion) {
            $res['SrcEngineVersion'] = $this->srcEngineVersion;
        }
        if (null !== $this->srcMaxQps) {
            $res['SrcMaxQps'] = $this->srcMaxQps;
        }
        if (null !== $this->srcMeanQps) {
            $res['SrcMeanQps'] = $this->srcMeanQps;
        }
        if (null !== $this->srcSqlOssAddr) {
            $res['SrcSqlOssAddr'] = $this->srcSqlOssAddr;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAdamBenchTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DstInstanceId'])) {
            $model->dstInstanceId = $map['DstInstanceId'];
        }
        if (isset($map['DstSuperAccount'])) {
            $model->dstSuperAccount = $map['DstSuperAccount'];
        }
        if (isset($map['DstSuperPassword'])) {
            $model->dstSuperPassword = $map['DstSuperPassword'];
        }
        if (isset($map['Rate'])) {
            $model->rate = $map['Rate'];
        }
        if (isset($map['RequestDuration'])) {
            $model->requestDuration = $map['RequestDuration'];
        }
        if (isset($map['RequestStartTime'])) {
            $model->requestStartTime = $map['RequestStartTime'];
        }
        if (isset($map['SrcEngine'])) {
            $model->srcEngine = $map['SrcEngine'];
        }
        if (isset($map['SrcEngineVersion'])) {
            $model->srcEngineVersion = $map['SrcEngineVersion'];
        }
        if (isset($map['SrcMaxQps'])) {
            $model->srcMaxQps = $map['SrcMaxQps'];
        }
        if (isset($map['SrcMeanQps'])) {
            $model->srcMeanQps = $map['SrcMeanQps'];
        }
        if (isset($map['SrcSqlOssAddr'])) {
            $model->srcSqlOssAddr = $map['SrcSqlOssAddr'];
        }

        return $model;
    }
}
