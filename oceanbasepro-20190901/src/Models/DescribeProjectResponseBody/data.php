<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectResponseBody;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectResponseBody\data\alarmStats;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectResponseBody\data\commonTransferConfig;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectResponseBody\data\extraInfo;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectResponseBody\data\fullTransferConfig;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectResponseBody\data\incrTransferConfig;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectResponseBody\data\labels;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectResponseBody\data\reverseIncrTransferConfig;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectResponseBody\data\sinkConnectInfo;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectResponseBody\data\sourceConnectInfo;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectResponseBody\data\steps;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectResponseBody\data\structTransferConfig;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectResponseBody\data\transferMapping;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectResponseBody\data\workerGradeInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var alarmStats
     */
    public $alarmStats;

    /**
     * @var commonTransferConfig
     */
    public $commonTransferConfig;

    /**
     * @example c_deg***
     *
     * @var string
     */
    public $destConnId;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableFullTransfer;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableFullVerify;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableIncrTransfer;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableIncrVerify;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableReverseIncrTransfer;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableStructTransfer;

    /**
     * @var extraInfo
     */
    public $extraInfo;

    /**
     * @var fullTransferConfig
     */
    public $fullTransferConfig;

    /**
     * @example 2023-07-13T06:26:15
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2023-07-13T07:02:27
     *
     * @var string
     */
    public $gmtFinish;

    /**
     * @example 2023-07-13T06:26:15
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 2023-07-13T07:02:27
     *
     * @var string
     */
    public $gmtStart;

    /**
     * @example np_fe****
     *
     * @var string
     */
    public $id;

    /**
     * @example HIGH
     *
     * @var string
     */
    public $importance;

    /**
     * @var incrTransferConfig
     */
    public $incrTransferConfig;

    /**
     * @example false
     *
     * @var bool
     */
    public $isMerging;

    /**
     * @example false
     *
     * @var bool
     */
    public $isModifying;

    /**
     * @example false
     *
     * @var bool
     */
    public $isSubProject;

    /**
     * @var labels[]
     */
    public $labels;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @example omsefry***
     *
     * @var string
     */
    public $owner;

    /**
     * @var reverseIncrTransferConfig
     */
    public $reverseIncrTransferConfig;

    /**
     * @var sinkConnectInfo
     */
    public $sinkConnectInfo;

    /**
     * @example MYSQL
     *
     * @var string
     */
    public $sinkEndpointType;

    /**
     * @var sourceConnectInfo
     */
    public $sourceConnectInfo;

    /**
     * @example OB_MYSQL
     *
     * @var string
     */
    public $sourceEndpointType;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $status;

    /**
     * @var steps[]
     */
    public $steps;

    /**
     * @var structTransferConfig
     */
    public $structTransferConfig;

    /**
     * @var transferMapping
     */
    public $transferMapping;

    /**
     * @example SYNC
     *
     * @var string
     */
    public $type;

    /**
     * @example g_i4wa7XXX
     *
     * @var string
     */
    public $workerGradeId;

    /**
     * @var workerGradeInfo
     */
    public $workerGradeInfo;
    protected $_name = [
        'alarmStats'                => 'AlarmStats',
        'commonTransferConfig'      => 'CommonTransferConfig',
        'destConnId'                => 'DestConnId',
        'enableFullTransfer'        => 'EnableFullTransfer',
        'enableFullVerify'          => 'EnableFullVerify',
        'enableIncrTransfer'        => 'EnableIncrTransfer',
        'enableIncrVerify'          => 'EnableIncrVerify',
        'enableReverseIncrTransfer' => 'EnableReverseIncrTransfer',
        'enableStructTransfer'      => 'EnableStructTransfer',
        'extraInfo'                 => 'ExtraInfo',
        'fullTransferConfig'        => 'FullTransferConfig',
        'gmtCreate'                 => 'GmtCreate',
        'gmtFinish'                 => 'GmtFinish',
        'gmtModified'               => 'GmtModified',
        'gmtStart'                  => 'GmtStart',
        'id'                        => 'Id',
        'importance'                => 'Importance',
        'incrTransferConfig'        => 'IncrTransferConfig',
        'isMerging'                 => 'IsMerging',
        'isModifying'               => 'IsModifying',
        'isSubProject'              => 'IsSubProject',
        'labels'                    => 'Labels',
        'name'                      => 'Name',
        'owner'                     => 'Owner',
        'reverseIncrTransferConfig' => 'ReverseIncrTransferConfig',
        'sinkConnectInfo'           => 'SinkConnectInfo',
        'sinkEndpointType'          => 'SinkEndpointType',
        'sourceConnectInfo'         => 'SourceConnectInfo',
        'sourceEndpointType'        => 'SourceEndpointType',
        'status'                    => 'Status',
        'steps'                     => 'Steps',
        'structTransferConfig'      => 'StructTransferConfig',
        'transferMapping'           => 'TransferMapping',
        'type'                      => 'Type',
        'workerGradeId'             => 'WorkerGradeId',
        'workerGradeInfo'           => 'WorkerGradeInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmStats) {
            $res['AlarmStats'] = null !== $this->alarmStats ? $this->alarmStats->toMap() : null;
        }
        if (null !== $this->commonTransferConfig) {
            $res['CommonTransferConfig'] = null !== $this->commonTransferConfig ? $this->commonTransferConfig->toMap() : null;
        }
        if (null !== $this->destConnId) {
            $res['DestConnId'] = $this->destConnId;
        }
        if (null !== $this->enableFullTransfer) {
            $res['EnableFullTransfer'] = $this->enableFullTransfer;
        }
        if (null !== $this->enableFullVerify) {
            $res['EnableFullVerify'] = $this->enableFullVerify;
        }
        if (null !== $this->enableIncrTransfer) {
            $res['EnableIncrTransfer'] = $this->enableIncrTransfer;
        }
        if (null !== $this->enableIncrVerify) {
            $res['EnableIncrVerify'] = $this->enableIncrVerify;
        }
        if (null !== $this->enableReverseIncrTransfer) {
            $res['EnableReverseIncrTransfer'] = $this->enableReverseIncrTransfer;
        }
        if (null !== $this->enableStructTransfer) {
            $res['EnableStructTransfer'] = $this->enableStructTransfer;
        }
        if (null !== $this->extraInfo) {
            $res['ExtraInfo'] = null !== $this->extraInfo ? $this->extraInfo->toMap() : null;
        }
        if (null !== $this->fullTransferConfig) {
            $res['FullTransferConfig'] = null !== $this->fullTransferConfig ? $this->fullTransferConfig->toMap() : null;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtFinish) {
            $res['GmtFinish'] = $this->gmtFinish;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->gmtStart) {
            $res['GmtStart'] = $this->gmtStart;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->importance) {
            $res['Importance'] = $this->importance;
        }
        if (null !== $this->incrTransferConfig) {
            $res['IncrTransferConfig'] = null !== $this->incrTransferConfig ? $this->incrTransferConfig->toMap() : null;
        }
        if (null !== $this->isMerging) {
            $res['IsMerging'] = $this->isMerging;
        }
        if (null !== $this->isModifying) {
            $res['IsModifying'] = $this->isModifying;
        }
        if (null !== $this->isSubProject) {
            $res['IsSubProject'] = $this->isSubProject;
        }
        if (null !== $this->labels) {
            $res['Labels'] = [];
            if (null !== $this->labels && \is_array($this->labels)) {
                $n = 0;
                foreach ($this->labels as $item) {
                    $res['Labels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->reverseIncrTransferConfig) {
            $res['ReverseIncrTransferConfig'] = null !== $this->reverseIncrTransferConfig ? $this->reverseIncrTransferConfig->toMap() : null;
        }
        if (null !== $this->sinkConnectInfo) {
            $res['SinkConnectInfo'] = null !== $this->sinkConnectInfo ? $this->sinkConnectInfo->toMap() : null;
        }
        if (null !== $this->sinkEndpointType) {
            $res['SinkEndpointType'] = $this->sinkEndpointType;
        }
        if (null !== $this->sourceConnectInfo) {
            $res['SourceConnectInfo'] = null !== $this->sourceConnectInfo ? $this->sourceConnectInfo->toMap() : null;
        }
        if (null !== $this->sourceEndpointType) {
            $res['SourceEndpointType'] = $this->sourceEndpointType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->steps) {
            $res['Steps'] = [];
            if (null !== $this->steps && \is_array($this->steps)) {
                $n = 0;
                foreach ($this->steps as $item) {
                    $res['Steps'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->structTransferConfig) {
            $res['StructTransferConfig'] = null !== $this->structTransferConfig ? $this->structTransferConfig->toMap() : null;
        }
        if (null !== $this->transferMapping) {
            $res['TransferMapping'] = null !== $this->transferMapping ? $this->transferMapping->toMap() : null;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->workerGradeId) {
            $res['WorkerGradeId'] = $this->workerGradeId;
        }
        if (null !== $this->workerGradeInfo) {
            $res['WorkerGradeInfo'] = null !== $this->workerGradeInfo ? $this->workerGradeInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmStats'])) {
            $model->alarmStats = alarmStats::fromMap($map['AlarmStats']);
        }
        if (isset($map['CommonTransferConfig'])) {
            $model->commonTransferConfig = commonTransferConfig::fromMap($map['CommonTransferConfig']);
        }
        if (isset($map['DestConnId'])) {
            $model->destConnId = $map['DestConnId'];
        }
        if (isset($map['EnableFullTransfer'])) {
            $model->enableFullTransfer = $map['EnableFullTransfer'];
        }
        if (isset($map['EnableFullVerify'])) {
            $model->enableFullVerify = $map['EnableFullVerify'];
        }
        if (isset($map['EnableIncrTransfer'])) {
            $model->enableIncrTransfer = $map['EnableIncrTransfer'];
        }
        if (isset($map['EnableIncrVerify'])) {
            $model->enableIncrVerify = $map['EnableIncrVerify'];
        }
        if (isset($map['EnableReverseIncrTransfer'])) {
            $model->enableReverseIncrTransfer = $map['EnableReverseIncrTransfer'];
        }
        if (isset($map['EnableStructTransfer'])) {
            $model->enableStructTransfer = $map['EnableStructTransfer'];
        }
        if (isset($map['ExtraInfo'])) {
            $model->extraInfo = extraInfo::fromMap($map['ExtraInfo']);
        }
        if (isset($map['FullTransferConfig'])) {
            $model->fullTransferConfig = fullTransferConfig::fromMap($map['FullTransferConfig']);
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtFinish'])) {
            $model->gmtFinish = $map['GmtFinish'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['GmtStart'])) {
            $model->gmtStart = $map['GmtStart'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Importance'])) {
            $model->importance = $map['Importance'];
        }
        if (isset($map['IncrTransferConfig'])) {
            $model->incrTransferConfig = incrTransferConfig::fromMap($map['IncrTransferConfig']);
        }
        if (isset($map['IsMerging'])) {
            $model->isMerging = $map['IsMerging'];
        }
        if (isset($map['IsModifying'])) {
            $model->isModifying = $map['IsModifying'];
        }
        if (isset($map['IsSubProject'])) {
            $model->isSubProject = $map['IsSubProject'];
        }
        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n             = 0;
                foreach ($map['Labels'] as $item) {
                    $model->labels[$n++] = null !== $item ? labels::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['ReverseIncrTransferConfig'])) {
            $model->reverseIncrTransferConfig = reverseIncrTransferConfig::fromMap($map['ReverseIncrTransferConfig']);
        }
        if (isset($map['SinkConnectInfo'])) {
            $model->sinkConnectInfo = sinkConnectInfo::fromMap($map['SinkConnectInfo']);
        }
        if (isset($map['SinkEndpointType'])) {
            $model->sinkEndpointType = $map['SinkEndpointType'];
        }
        if (isset($map['SourceConnectInfo'])) {
            $model->sourceConnectInfo = sourceConnectInfo::fromMap($map['SourceConnectInfo']);
        }
        if (isset($map['SourceEndpointType'])) {
            $model->sourceEndpointType = $map['SourceEndpointType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Steps'])) {
            if (!empty($map['Steps'])) {
                $model->steps = [];
                $n            = 0;
                foreach ($map['Steps'] as $item) {
                    $model->steps[$n++] = null !== $item ? steps::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['StructTransferConfig'])) {
            $model->structTransferConfig = structTransferConfig::fromMap($map['StructTransferConfig']);
        }
        if (isset($map['TransferMapping'])) {
            $model->transferMapping = transferMapping::fromMap($map['TransferMapping']);
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['WorkerGradeId'])) {
            $model->workerGradeId = $map['WorkerGradeId'];
        }
        if (isset($map['WorkerGradeInfo'])) {
            $model->workerGradeInfo = workerGradeInfo::fromMap($map['WorkerGradeInfo']);
        }

        return $model;
    }
}
