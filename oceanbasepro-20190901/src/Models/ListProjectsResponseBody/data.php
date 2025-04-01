<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectsResponseBody\data\alarmStats;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectsResponseBody\data\commonTransferConfig;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectsResponseBody\data\extraInfo;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectsResponseBody\data\fullTransferConfig;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectsResponseBody\data\incrTransferConfig;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectsResponseBody\data\labels;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectsResponseBody\data\sinkConnectInfo;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectsResponseBody\data\sourceConnectInfo;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectsResponseBody\data\steps;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectsResponseBody\data\structTransferConfig;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectsResponseBody\data\transferMapping;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectsResponseBody\data\workerGradeInfo;

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
     * @var string
     */
    public $destConnId;

    /**
     * @var bool
     */
    public $enableFullTransfer;

    /**
     * @var bool
     */
    public $enableFullVerify;

    /**
     * @var bool
     */
    public $enableIncrTransfer;

    /**
     * @var bool
     */
    public $enableIncrVerify;

    /**
     * @var bool
     */
    public $enableReverseIncrTransfer;

    /**
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
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtFinish;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $gmtStart;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $importance;

    /**
     * @var incrTransferConfig
     */
    public $incrTransferConfig;

    /**
     * @var bool
     */
    public $isMerging;

    /**
     * @var bool
     */
    public $isModifying;

    /**
     * @var bool
     */
    public $isSubProject;

    /**
     * @var labels[]
     */
    public $labels;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var sinkConnectInfo
     */
    public $sinkConnectInfo;

    /**
     * @var string
     */
    public $sinkEndpointType;

    /**
     * @var sourceConnectInfo
     */
    public $sourceConnectInfo;

    /**
     * @var string
     */
    public $sourceEndpointType;

    /**
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
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $workerGradeId;

    /**
     * @var workerGradeInfo
     */
    public $workerGradeInfo;
    protected $_name = [
        'alarmStats' => 'AlarmStats',
        'commonTransferConfig' => 'CommonTransferConfig',
        'destConnId' => 'DestConnId',
        'enableFullTransfer' => 'EnableFullTransfer',
        'enableFullVerify' => 'EnableFullVerify',
        'enableIncrTransfer' => 'EnableIncrTransfer',
        'enableIncrVerify' => 'EnableIncrVerify',
        'enableReverseIncrTransfer' => 'EnableReverseIncrTransfer',
        'enableStructTransfer' => 'EnableStructTransfer',
        'extraInfo' => 'ExtraInfo',
        'fullTransferConfig' => 'FullTransferConfig',
        'gmtCreate' => 'GmtCreate',
        'gmtFinish' => 'GmtFinish',
        'gmtModified' => 'GmtModified',
        'gmtStart' => 'GmtStart',
        'id' => 'Id',
        'importance' => 'Importance',
        'incrTransferConfig' => 'IncrTransferConfig',
        'isMerging' => 'IsMerging',
        'isModifying' => 'IsModifying',
        'isSubProject' => 'IsSubProject',
        'labels' => 'Labels',
        'name' => 'Name',
        'owner' => 'Owner',
        'sinkConnectInfo' => 'SinkConnectInfo',
        'sinkEndpointType' => 'SinkEndpointType',
        'sourceConnectInfo' => 'SourceConnectInfo',
        'sourceEndpointType' => 'SourceEndpointType',
        'status' => 'Status',
        'steps' => 'Steps',
        'structTransferConfig' => 'StructTransferConfig',
        'transferMapping' => 'TransferMapping',
        'type' => 'Type',
        'workerGradeId' => 'WorkerGradeId',
        'workerGradeInfo' => 'WorkerGradeInfo',
    ];

    public function validate()
    {
        if (null !== $this->alarmStats) {
            $this->alarmStats->validate();
        }
        if (null !== $this->commonTransferConfig) {
            $this->commonTransferConfig->validate();
        }
        if (null !== $this->extraInfo) {
            $this->extraInfo->validate();
        }
        if (null !== $this->fullTransferConfig) {
            $this->fullTransferConfig->validate();
        }
        if (null !== $this->incrTransferConfig) {
            $this->incrTransferConfig->validate();
        }
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        if (null !== $this->sinkConnectInfo) {
            $this->sinkConnectInfo->validate();
        }
        if (null !== $this->sourceConnectInfo) {
            $this->sourceConnectInfo->validate();
        }
        if (\is_array($this->steps)) {
            Model::validateArray($this->steps);
        }
        if (null !== $this->structTransferConfig) {
            $this->structTransferConfig->validate();
        }
        if (null !== $this->transferMapping) {
            $this->transferMapping->validate();
        }
        if (null !== $this->workerGradeInfo) {
            $this->workerGradeInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alarmStats) {
            $res['AlarmStats'] = null !== $this->alarmStats ? $this->alarmStats->toArray($noStream) : $this->alarmStats;
        }

        if (null !== $this->commonTransferConfig) {
            $res['CommonTransferConfig'] = null !== $this->commonTransferConfig ? $this->commonTransferConfig->toArray($noStream) : $this->commonTransferConfig;
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
            $res['ExtraInfo'] = null !== $this->extraInfo ? $this->extraInfo->toArray($noStream) : $this->extraInfo;
        }

        if (null !== $this->fullTransferConfig) {
            $res['FullTransferConfig'] = null !== $this->fullTransferConfig ? $this->fullTransferConfig->toArray($noStream) : $this->fullTransferConfig;
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
            $res['IncrTransferConfig'] = null !== $this->incrTransferConfig ? $this->incrTransferConfig->toArray($noStream) : $this->incrTransferConfig;
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
            if (\is_array($this->labels)) {
                $res['Labels'] = [];
                $n1 = 0;
                foreach ($this->labels as $item1) {
                    $res['Labels'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->sinkConnectInfo) {
            $res['SinkConnectInfo'] = null !== $this->sinkConnectInfo ? $this->sinkConnectInfo->toArray($noStream) : $this->sinkConnectInfo;
        }

        if (null !== $this->sinkEndpointType) {
            $res['SinkEndpointType'] = $this->sinkEndpointType;
        }

        if (null !== $this->sourceConnectInfo) {
            $res['SourceConnectInfo'] = null !== $this->sourceConnectInfo ? $this->sourceConnectInfo->toArray($noStream) : $this->sourceConnectInfo;
        }

        if (null !== $this->sourceEndpointType) {
            $res['SourceEndpointType'] = $this->sourceEndpointType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->steps) {
            if (\is_array($this->steps)) {
                $res['Steps'] = [];
                $n1 = 0;
                foreach ($this->steps as $item1) {
                    $res['Steps'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->structTransferConfig) {
            $res['StructTransferConfig'] = null !== $this->structTransferConfig ? $this->structTransferConfig->toArray($noStream) : $this->structTransferConfig;
        }

        if (null !== $this->transferMapping) {
            $res['TransferMapping'] = null !== $this->transferMapping ? $this->transferMapping->toArray($noStream) : $this->transferMapping;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->workerGradeId) {
            $res['WorkerGradeId'] = $this->workerGradeId;
        }

        if (null !== $this->workerGradeInfo) {
            $res['WorkerGradeInfo'] = null !== $this->workerGradeInfo ? $this->workerGradeInfo->toArray($noStream) : $this->workerGradeInfo;
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
                $n1 = 0;
                foreach ($map['Labels'] as $item1) {
                    $model->labels[$n1++] = labels::fromMap($item1);
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
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
                $n1 = 0;
                foreach ($map['Steps'] as $item1) {
                    $model->steps[$n1++] = steps::fromMap($item1);
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
