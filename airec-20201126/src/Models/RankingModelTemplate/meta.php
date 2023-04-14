<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\RankingModelTemplate;

use AlibabaCloud\Tea\Model;

class meta extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $authorized;

    /**
     * @example true
     *
     * @var bool
     */
    public $autoRun;

    /**
     * @example 1
     *
     * @var int
     */
    public $autoRunTime;

    /**
     * @example DAY
     *
     * @var string
     */
    public $autoRunType;

    /**
     * @example true
     *
     * @var bool
     */
    public $canDeploy;

    /**
     * @example train_config {}
     *
     * @var string
     */
    public $conf;

    /**
     * @example NOT_DEPLOYED
     *
     * @var string
     */
    public $deployStatus;

    /**
     * @example 2021-12-06T03:01:41.217Z
     *
     * @var string
     */
    public $lastEditTime;

    /**
     * @example 模型A
     *
     * @var string
     */
    public $name;

    /**
     * @example acs:ram::111:role/aliyunodpspaidefaultrole
     *
     * @var string
     */
    public $ossArn;

    /**
     * @example bucket-a
     *
     * @var string
     */
    public $ossBucket;

    /**
     * @example oss-cn-beijing.aliyuncs.com
     *
     * @var string
     */
    public $ossEndpoint;

    /**
     * @example 1111
     *
     * @var string
     */
    public $sampleId;

    /**
     * @example 样本1
     *
     * @var string
     */
    public $sampleName;

    /**
     * @example 3
     *
     * @var int
     */
    public $sampleTimeWindow;

    /**
     * @example DAY
     *
     * @var string
     */
    public $sampleTimeWindowType;

    /**
     * @example MULTI_TOWER
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'authorized'           => 'Authorized',
        'autoRun'              => 'AutoRun',
        'autoRunTime'          => 'AutoRunTime',
        'autoRunType'          => 'AutoRunType',
        'canDeploy'            => 'CanDeploy',
        'conf'                 => 'Conf',
        'deployStatus'         => 'DeployStatus',
        'lastEditTime'         => 'LastEditTime',
        'name'                 => 'Name',
        'ossArn'               => 'OssArn',
        'ossBucket'            => 'OssBucket',
        'ossEndpoint'          => 'OssEndpoint',
        'sampleId'             => 'SampleId',
        'sampleName'           => 'SampleName',
        'sampleTimeWindow'     => 'SampleTimeWindow',
        'sampleTimeWindowType' => 'SampleTimeWindowType',
        'type'                 => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorized) {
            $res['Authorized'] = $this->authorized;
        }
        if (null !== $this->autoRun) {
            $res['AutoRun'] = $this->autoRun;
        }
        if (null !== $this->autoRunTime) {
            $res['AutoRunTime'] = $this->autoRunTime;
        }
        if (null !== $this->autoRunType) {
            $res['AutoRunType'] = $this->autoRunType;
        }
        if (null !== $this->canDeploy) {
            $res['CanDeploy'] = $this->canDeploy;
        }
        if (null !== $this->conf) {
            $res['Conf'] = $this->conf;
        }
        if (null !== $this->deployStatus) {
            $res['DeployStatus'] = $this->deployStatus;
        }
        if (null !== $this->lastEditTime) {
            $res['LastEditTime'] = $this->lastEditTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ossArn) {
            $res['OssArn'] = $this->ossArn;
        }
        if (null !== $this->ossBucket) {
            $res['OssBucket'] = $this->ossBucket;
        }
        if (null !== $this->ossEndpoint) {
            $res['OssEndpoint'] = $this->ossEndpoint;
        }
        if (null !== $this->sampleId) {
            $res['SampleId'] = $this->sampleId;
        }
        if (null !== $this->sampleName) {
            $res['SampleName'] = $this->sampleName;
        }
        if (null !== $this->sampleTimeWindow) {
            $res['SampleTimeWindow'] = $this->sampleTimeWindow;
        }
        if (null !== $this->sampleTimeWindowType) {
            $res['SampleTimeWindowType'] = $this->sampleTimeWindowType;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return meta
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Authorized'])) {
            $model->authorized = $map['Authorized'];
        }
        if (isset($map['AutoRun'])) {
            $model->autoRun = $map['AutoRun'];
        }
        if (isset($map['AutoRunTime'])) {
            $model->autoRunTime = $map['AutoRunTime'];
        }
        if (isset($map['AutoRunType'])) {
            $model->autoRunType = $map['AutoRunType'];
        }
        if (isset($map['CanDeploy'])) {
            $model->canDeploy = $map['CanDeploy'];
        }
        if (isset($map['Conf'])) {
            $model->conf = $map['Conf'];
        }
        if (isset($map['DeployStatus'])) {
            $model->deployStatus = $map['DeployStatus'];
        }
        if (isset($map['LastEditTime'])) {
            $model->lastEditTime = $map['LastEditTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OssArn'])) {
            $model->ossArn = $map['OssArn'];
        }
        if (isset($map['OssBucket'])) {
            $model->ossBucket = $map['OssBucket'];
        }
        if (isset($map['OssEndpoint'])) {
            $model->ossEndpoint = $map['OssEndpoint'];
        }
        if (isset($map['SampleId'])) {
            $model->sampleId = $map['SampleId'];
        }
        if (isset($map['SampleName'])) {
            $model->sampleName = $map['SampleName'];
        }
        if (isset($map['SampleTimeWindow'])) {
            $model->sampleTimeWindow = $map['SampleTimeWindow'];
        }
        if (isset($map['SampleTimeWindowType'])) {
            $model->sampleTimeWindowType = $map['SampleTimeWindowType'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
