<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetProblemResponseBody;

use AlibabaCloud\SDK\GEMP\V20210413\Models\GetProblemResponseBody\data\cancelProblemOperateLogs;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetProblemResponseBody\data\coordinationGroups;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetProblemResponseBody\data\effectionServices;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetProblemResponseBody\data\handingProblemOperateLogs;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetProblemResponseBody\data\replayingProblemOperateLogs;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetProblemResponseBody\data\replayProblemOperateLogs;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetProblemResponseBody\data\restoredProblemOperateLogs;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetProblemResponseBody\data\timelines;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description ID
     *
     * @var int
     */
    public $problemId;

    /**
     * @description 创建时间
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 事件编号
     *
     * @var string
     */
    public $incidentNumber;

    /**
     * @description 事件id
     *
     * @var int
     */
    public $incidentId;

    /**
     * @description 故障编号
     *
     * @var string
     */
    public $problemNumber;

    /**
     * @description 故障名称
     *
     * @var string
     */
    public $problemName;

    /**
     * @description 故障状态  HANDLING    处理中 RECOVERED  已恢复  REPLAYING   复盘中  REPLAYED     已复盘 CANCEL        已取消
     *
     * @var int
     */
    public $problemStatus;

    /**
     * @description 故障等级 P1 P2 P3 P4
     *
     * @var int
     */
    public $problemLevel;

    /**
     * @description 发现时间
     *
     * @var string
     */
    public $discoverTime;

    /**
     * @description 恢复时间
     *
     * @var string
     */
    public $recoveryTime;

    /**
     * @description 关联服务ID
     *
     * @var int
     */
    public $relatedServiceId;

    /**
     * @description 关联服务 名称
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description 进展摘要
     *
     * @var string
     */
    public $progressSummary;

    /**
     * @description 初步原因
     *
     * @var string
     */
    public $preliminaryReason;

    /**
     * @description 主要处理人
     *
     * @var int
     */
    public $mainHandler;

    /**
     * @description 主要处理人ID
     *
     * @var int
     */
    public $mainHandlerId;

    /**
     * @description 舆情反馈
     *
     * @var string
     */
    public $feedback;

    /**
     * @description 取消原因描述
     *
     * @var string
     */
    public $cancelReasonDescription;

    /**
     * @description 取消原因
     *
     * @var int
     */
    public $cancelReason;

    /**
     * @description 处理中故障操作日志
     *
     * @var handingProblemOperateLogs[]
     */
    public $handingProblemOperateLogs;

    /**
     * @description 已恢复故障操作日志
     *
     * @var restoredProblemOperateLogs[]
     */
    public $restoredProblemOperateLogs;

    /**
     * @description 复盘中故障操作日志
     *
     * @var replayingProblemOperateLogs[]
     */
    public $replayingProblemOperateLogs;

    /**
     * @description 已复盘故障操作日志
     *
     * @var replayProblemOperateLogs[]
     */
    public $replayProblemOperateLogs;

    /**
     * @description 影响服务
     *
     * @var effectionServices[]
     */
    public $effectionServices;

    /**
     * @description 应急协同组
     *
     * @var coordinationGroups[]
     */
    public $coordinationGroups;

    /**
     * @description 故障操作时间线
     *
     * @var timelines[]
     */
    public $timelines;

    /**
     * @description 已取消故障操作日志
     *
     * @var cancelProblemOperateLogs[]
     */
    public $cancelProblemOperateLogs;
    protected $_name = [
        'problemId'                   => 'problemId',
        'createTime'                  => 'createTime',
        'incidentNumber'              => 'incidentNumber',
        'incidentId'                  => 'incidentId',
        'problemNumber'               => 'problemNumber',
        'problemName'                 => 'problemName',
        'problemStatus'               => 'problemStatus',
        'problemLevel'                => 'problemLevel',
        'discoverTime'                => 'discoverTime',
        'recoveryTime'                => 'recoveryTime',
        'relatedServiceId'            => 'relatedServiceId',
        'serviceName'                 => 'serviceName',
        'progressSummary'             => 'progressSummary',
        'preliminaryReason'           => 'preliminaryReason',
        'mainHandler'                 => 'mainHandler',
        'mainHandlerId'               => 'mainHandlerId',
        'feedback'                    => 'feedback',
        'cancelReasonDescription'     => 'cancelReasonDescription',
        'cancelReason'                => 'cancelReason',
        'handingProblemOperateLogs'   => 'handingProblemOperateLogs',
        'restoredProblemOperateLogs'  => 'restoredProblemOperateLogs',
        'replayingProblemOperateLogs' => 'replayingProblemOperateLogs',
        'replayProblemOperateLogs'    => 'replayProblemOperateLogs',
        'effectionServices'           => 'effectionServices',
        'coordinationGroups'          => 'coordinationGroups',
        'timelines'                   => 'timelines',
        'cancelProblemOperateLogs'    => 'cancelProblemOperateLogs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->problemId) {
            $res['problemId'] = $this->problemId;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->incidentNumber) {
            $res['incidentNumber'] = $this->incidentNumber;
        }
        if (null !== $this->incidentId) {
            $res['incidentId'] = $this->incidentId;
        }
        if (null !== $this->problemNumber) {
            $res['problemNumber'] = $this->problemNumber;
        }
        if (null !== $this->problemName) {
            $res['problemName'] = $this->problemName;
        }
        if (null !== $this->problemStatus) {
            $res['problemStatus'] = $this->problemStatus;
        }
        if (null !== $this->problemLevel) {
            $res['problemLevel'] = $this->problemLevel;
        }
        if (null !== $this->discoverTime) {
            $res['discoverTime'] = $this->discoverTime;
        }
        if (null !== $this->recoveryTime) {
            $res['recoveryTime'] = $this->recoveryTime;
        }
        if (null !== $this->relatedServiceId) {
            $res['relatedServiceId'] = $this->relatedServiceId;
        }
        if (null !== $this->serviceName) {
            $res['serviceName'] = $this->serviceName;
        }
        if (null !== $this->progressSummary) {
            $res['progressSummary'] = $this->progressSummary;
        }
        if (null !== $this->preliminaryReason) {
            $res['preliminaryReason'] = $this->preliminaryReason;
        }
        if (null !== $this->mainHandler) {
            $res['mainHandler'] = $this->mainHandler;
        }
        if (null !== $this->mainHandlerId) {
            $res['mainHandlerId'] = $this->mainHandlerId;
        }
        if (null !== $this->feedback) {
            $res['feedback'] = $this->feedback;
        }
        if (null !== $this->cancelReasonDescription) {
            $res['cancelReasonDescription'] = $this->cancelReasonDescription;
        }
        if (null !== $this->cancelReason) {
            $res['cancelReason'] = $this->cancelReason;
        }
        if (null !== $this->handingProblemOperateLogs) {
            $res['handingProblemOperateLogs'] = [];
            if (null !== $this->handingProblemOperateLogs && \is_array($this->handingProblemOperateLogs)) {
                $n = 0;
                foreach ($this->handingProblemOperateLogs as $item) {
                    $res['handingProblemOperateLogs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->restoredProblemOperateLogs) {
            $res['restoredProblemOperateLogs'] = [];
            if (null !== $this->restoredProblemOperateLogs && \is_array($this->restoredProblemOperateLogs)) {
                $n = 0;
                foreach ($this->restoredProblemOperateLogs as $item) {
                    $res['restoredProblemOperateLogs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->replayingProblemOperateLogs) {
            $res['replayingProblemOperateLogs'] = [];
            if (null !== $this->replayingProblemOperateLogs && \is_array($this->replayingProblemOperateLogs)) {
                $n = 0;
                foreach ($this->replayingProblemOperateLogs as $item) {
                    $res['replayingProblemOperateLogs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->replayProblemOperateLogs) {
            $res['replayProblemOperateLogs'] = [];
            if (null !== $this->replayProblemOperateLogs && \is_array($this->replayProblemOperateLogs)) {
                $n = 0;
                foreach ($this->replayProblemOperateLogs as $item) {
                    $res['replayProblemOperateLogs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->effectionServices) {
            $res['effectionServices'] = [];
            if (null !== $this->effectionServices && \is_array($this->effectionServices)) {
                $n = 0;
                foreach ($this->effectionServices as $item) {
                    $res['effectionServices'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->coordinationGroups) {
            $res['coordinationGroups'] = [];
            if (null !== $this->coordinationGroups && \is_array($this->coordinationGroups)) {
                $n = 0;
                foreach ($this->coordinationGroups as $item) {
                    $res['coordinationGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->timelines) {
            $res['timelines'] = [];
            if (null !== $this->timelines && \is_array($this->timelines)) {
                $n = 0;
                foreach ($this->timelines as $item) {
                    $res['timelines'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->cancelProblemOperateLogs) {
            $res['cancelProblemOperateLogs'] = [];
            if (null !== $this->cancelProblemOperateLogs && \is_array($this->cancelProblemOperateLogs)) {
                $n = 0;
                foreach ($this->cancelProblemOperateLogs as $item) {
                    $res['cancelProblemOperateLogs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['problemId'])) {
            $model->problemId = $map['problemId'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['incidentNumber'])) {
            $model->incidentNumber = $map['incidentNumber'];
        }
        if (isset($map['incidentId'])) {
            $model->incidentId = $map['incidentId'];
        }
        if (isset($map['problemNumber'])) {
            $model->problemNumber = $map['problemNumber'];
        }
        if (isset($map['problemName'])) {
            $model->problemName = $map['problemName'];
        }
        if (isset($map['problemStatus'])) {
            $model->problemStatus = $map['problemStatus'];
        }
        if (isset($map['problemLevel'])) {
            $model->problemLevel = $map['problemLevel'];
        }
        if (isset($map['discoverTime'])) {
            $model->discoverTime = $map['discoverTime'];
        }
        if (isset($map['recoveryTime'])) {
            $model->recoveryTime = $map['recoveryTime'];
        }
        if (isset($map['relatedServiceId'])) {
            $model->relatedServiceId = $map['relatedServiceId'];
        }
        if (isset($map['serviceName'])) {
            $model->serviceName = $map['serviceName'];
        }
        if (isset($map['progressSummary'])) {
            $model->progressSummary = $map['progressSummary'];
        }
        if (isset($map['preliminaryReason'])) {
            $model->preliminaryReason = $map['preliminaryReason'];
        }
        if (isset($map['mainHandler'])) {
            $model->mainHandler = $map['mainHandler'];
        }
        if (isset($map['mainHandlerId'])) {
            $model->mainHandlerId = $map['mainHandlerId'];
        }
        if (isset($map['feedback'])) {
            $model->feedback = $map['feedback'];
        }
        if (isset($map['cancelReasonDescription'])) {
            $model->cancelReasonDescription = $map['cancelReasonDescription'];
        }
        if (isset($map['cancelReason'])) {
            $model->cancelReason = $map['cancelReason'];
        }
        if (isset($map['handingProblemOperateLogs'])) {
            if (!empty($map['handingProblemOperateLogs'])) {
                $model->handingProblemOperateLogs = [];
                $n                                = 0;
                foreach ($map['handingProblemOperateLogs'] as $item) {
                    $model->handingProblemOperateLogs[$n++] = null !== $item ? handingProblemOperateLogs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['restoredProblemOperateLogs'])) {
            if (!empty($map['restoredProblemOperateLogs'])) {
                $model->restoredProblemOperateLogs = [];
                $n                                 = 0;
                foreach ($map['restoredProblemOperateLogs'] as $item) {
                    $model->restoredProblemOperateLogs[$n++] = null !== $item ? restoredProblemOperateLogs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['replayingProblemOperateLogs'])) {
            if (!empty($map['replayingProblemOperateLogs'])) {
                $model->replayingProblemOperateLogs = [];
                $n                                  = 0;
                foreach ($map['replayingProblemOperateLogs'] as $item) {
                    $model->replayingProblemOperateLogs[$n++] = null !== $item ? replayingProblemOperateLogs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['replayProblemOperateLogs'])) {
            if (!empty($map['replayProblemOperateLogs'])) {
                $model->replayProblemOperateLogs = [];
                $n                               = 0;
                foreach ($map['replayProblemOperateLogs'] as $item) {
                    $model->replayProblemOperateLogs[$n++] = null !== $item ? replayProblemOperateLogs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['effectionServices'])) {
            if (!empty($map['effectionServices'])) {
                $model->effectionServices = [];
                $n                        = 0;
                foreach ($map['effectionServices'] as $item) {
                    $model->effectionServices[$n++] = null !== $item ? effectionServices::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['coordinationGroups'])) {
            if (!empty($map['coordinationGroups'])) {
                $model->coordinationGroups = [];
                $n                         = 0;
                foreach ($map['coordinationGroups'] as $item) {
                    $model->coordinationGroups[$n++] = null !== $item ? coordinationGroups::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['timelines'])) {
            if (!empty($map['timelines'])) {
                $model->timelines = [];
                $n                = 0;
                foreach ($map['timelines'] as $item) {
                    $model->timelines[$n++] = null !== $item ? timelines::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['cancelProblemOperateLogs'])) {
            if (!empty($map['cancelProblemOperateLogs'])) {
                $model->cancelProblemOperateLogs = [];
                $n                               = 0;
                foreach ($map['cancelProblemOperateLogs'] as $item) {
                    $model->cancelProblemOperateLogs[$n++] = null !== $item ? cancelProblemOperateLogs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
