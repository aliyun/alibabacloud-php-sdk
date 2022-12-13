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
     * @var cancelProblemOperateLogs[]
     */
    public $cancelProblemOperateLogs;

    /**
     * @example 取消理由
     *
     * @var int
     */
    public $cancelReason;

    /**
     * @example 理由
     *
     * @var string
     */
    public $cancelReasonDescription;

    /**
     * @var coordinationGroups[]
     */
    public $coordinationGroups;

    /**
     * @example 2010-03-09 15:53:45
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 2010-03-09 15:53:45
     *
     * @var string
     */
    public $discoverTime;

    /**
     * @example 300000
     *
     * @var int
     */
    public $durationTime;

    /**
     * @var effectionServices[]
     */
    public $effectionServices;

    /**
     * @example feedback
     *
     * @var string
     */
    public $feedback;

    /**
     * @var handingProblemOperateLogs[]
     */
    public $handingProblemOperateLogs;

    /**
     * @example 130000032
     *
     * @var int
     */
    public $incidentId;

    /**
     * @example I3443835000012016260833157948165
     *
     * @var string
     */
    public $incidentNumber;

    /**
     * @example 王宇
     *
     * @var int
     */
    public $mainHandler;

    /**
     * @example 2000
     *
     * @var int
     */
    public $mainHandlerId;

    /**
     * @var int
     */
    public $mainHandlerIsValid;

    /**
     * @example 1308987****
     *
     * @var string
     */
    public $mainHandlerPhone;

    /**
     * @example 原因
     *
     * @var string
     */
    public $preliminaryReason;

    /**
     * @description ID
     *
     * @example 1
     *
     * @var int
     */
    public $problemId;

    /**
     * @example P1
     *
     * @var int
     */
    public $problemLevel;

    /**
     * @example 故障
     *
     * @var string
     */
    public $problemName;

    /**
     * @example P34438300010030116260833538987481
     *
     * @var string
     */
    public $problemNumber;

    /**
     * @example HANDLING
     *
     * @var int
     */
    public $problemStatus;

    /**
     * @example 摘要
     *
     * @var string
     */
    public $progressSummary;

    /**
     * @example 1231231
     *
     * @var int
     */
    public $progressSummaryRichTextId;

    /**
     * @example 2010-03-09 15:53:45
     *
     * @var string
     */
    public $recoveryTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $relatedServiceId;

    /**
     * @var replayProblemOperateLogs[]
     */
    public $replayProblemOperateLogs;

    /**
     * @var replayingProblemOperateLogs[]
     */
    public $replayingProblemOperateLogs;

    /**
     * @var restoredProblemOperateLogs[]
     */
    public $restoredProblemOperateLogs;

    /**
     * @description serviceDeleteType
     *
     * @var int
     */
    public $serviceDeleteType;

    /**
     * @example 服务
     *
     * @var string
     */
    public $serviceName;

    /**
     * @var timelines[]
     */
    public $timelines;
    protected $_name = [
        'cancelProblemOperateLogs'    => 'cancelProblemOperateLogs',
        'cancelReason'                => 'cancelReason',
        'cancelReasonDescription'     => 'cancelReasonDescription',
        'coordinationGroups'          => 'coordinationGroups',
        'createTime'                  => 'createTime',
        'discoverTime'                => 'discoverTime',
        'durationTime'                => 'durationTime',
        'effectionServices'           => 'effectionServices',
        'feedback'                    => 'feedback',
        'handingProblemOperateLogs'   => 'handingProblemOperateLogs',
        'incidentId'                  => 'incidentId',
        'incidentNumber'              => 'incidentNumber',
        'mainHandler'                 => 'mainHandler',
        'mainHandlerId'               => 'mainHandlerId',
        'mainHandlerIsValid'          => 'mainHandlerIsValid',
        'mainHandlerPhone'            => 'mainHandlerPhone',
        'preliminaryReason'           => 'preliminaryReason',
        'problemId'                   => 'problemId',
        'problemLevel'                => 'problemLevel',
        'problemName'                 => 'problemName',
        'problemNumber'               => 'problemNumber',
        'problemStatus'               => 'problemStatus',
        'progressSummary'             => 'progressSummary',
        'progressSummaryRichTextId'   => 'progressSummaryRichTextId',
        'recoveryTime'                => 'recoveryTime',
        'relatedServiceId'            => 'relatedServiceId',
        'replayProblemOperateLogs'    => 'replayProblemOperateLogs',
        'replayingProblemOperateLogs' => 'replayingProblemOperateLogs',
        'restoredProblemOperateLogs'  => 'restoredProblemOperateLogs',
        'serviceDeleteType'           => 'serviceDeleteType',
        'serviceName'                 => 'serviceName',
        'timelines'                   => 'timelines',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cancelProblemOperateLogs) {
            $res['cancelProblemOperateLogs'] = [];
            if (null !== $this->cancelProblemOperateLogs && \is_array($this->cancelProblemOperateLogs)) {
                $n = 0;
                foreach ($this->cancelProblemOperateLogs as $item) {
                    $res['cancelProblemOperateLogs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->cancelReason) {
            $res['cancelReason'] = $this->cancelReason;
        }
        if (null !== $this->cancelReasonDescription) {
            $res['cancelReasonDescription'] = $this->cancelReasonDescription;
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
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->discoverTime) {
            $res['discoverTime'] = $this->discoverTime;
        }
        if (null !== $this->durationTime) {
            $res['durationTime'] = $this->durationTime;
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
        if (null !== $this->feedback) {
            $res['feedback'] = $this->feedback;
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
        if (null !== $this->incidentId) {
            $res['incidentId'] = $this->incidentId;
        }
        if (null !== $this->incidentNumber) {
            $res['incidentNumber'] = $this->incidentNumber;
        }
        if (null !== $this->mainHandler) {
            $res['mainHandler'] = $this->mainHandler;
        }
        if (null !== $this->mainHandlerId) {
            $res['mainHandlerId'] = $this->mainHandlerId;
        }
        if (null !== $this->mainHandlerIsValid) {
            $res['mainHandlerIsValid'] = $this->mainHandlerIsValid;
        }
        if (null !== $this->mainHandlerPhone) {
            $res['mainHandlerPhone'] = $this->mainHandlerPhone;
        }
        if (null !== $this->preliminaryReason) {
            $res['preliminaryReason'] = $this->preliminaryReason;
        }
        if (null !== $this->problemId) {
            $res['problemId'] = $this->problemId;
        }
        if (null !== $this->problemLevel) {
            $res['problemLevel'] = $this->problemLevel;
        }
        if (null !== $this->problemName) {
            $res['problemName'] = $this->problemName;
        }
        if (null !== $this->problemNumber) {
            $res['problemNumber'] = $this->problemNumber;
        }
        if (null !== $this->problemStatus) {
            $res['problemStatus'] = $this->problemStatus;
        }
        if (null !== $this->progressSummary) {
            $res['progressSummary'] = $this->progressSummary;
        }
        if (null !== $this->progressSummaryRichTextId) {
            $res['progressSummaryRichTextId'] = $this->progressSummaryRichTextId;
        }
        if (null !== $this->recoveryTime) {
            $res['recoveryTime'] = $this->recoveryTime;
        }
        if (null !== $this->relatedServiceId) {
            $res['relatedServiceId'] = $this->relatedServiceId;
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
        if (null !== $this->replayingProblemOperateLogs) {
            $res['replayingProblemOperateLogs'] = [];
            if (null !== $this->replayingProblemOperateLogs && \is_array($this->replayingProblemOperateLogs)) {
                $n = 0;
                foreach ($this->replayingProblemOperateLogs as $item) {
                    $res['replayingProblemOperateLogs'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (null !== $this->serviceDeleteType) {
            $res['serviceDeleteType'] = $this->serviceDeleteType;
        }
        if (null !== $this->serviceName) {
            $res['serviceName'] = $this->serviceName;
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
        if (isset($map['cancelProblemOperateLogs'])) {
            if (!empty($map['cancelProblemOperateLogs'])) {
                $model->cancelProblemOperateLogs = [];
                $n                               = 0;
                foreach ($map['cancelProblemOperateLogs'] as $item) {
                    $model->cancelProblemOperateLogs[$n++] = null !== $item ? cancelProblemOperateLogs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['cancelReason'])) {
            $model->cancelReason = $map['cancelReason'];
        }
        if (isset($map['cancelReasonDescription'])) {
            $model->cancelReasonDescription = $map['cancelReasonDescription'];
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
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['discoverTime'])) {
            $model->discoverTime = $map['discoverTime'];
        }
        if (isset($map['durationTime'])) {
            $model->durationTime = $map['durationTime'];
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
        if (isset($map['feedback'])) {
            $model->feedback = $map['feedback'];
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
        if (isset($map['incidentId'])) {
            $model->incidentId = $map['incidentId'];
        }
        if (isset($map['incidentNumber'])) {
            $model->incidentNumber = $map['incidentNumber'];
        }
        if (isset($map['mainHandler'])) {
            $model->mainHandler = $map['mainHandler'];
        }
        if (isset($map['mainHandlerId'])) {
            $model->mainHandlerId = $map['mainHandlerId'];
        }
        if (isset($map['mainHandlerIsValid'])) {
            $model->mainHandlerIsValid = $map['mainHandlerIsValid'];
        }
        if (isset($map['mainHandlerPhone'])) {
            $model->mainHandlerPhone = $map['mainHandlerPhone'];
        }
        if (isset($map['preliminaryReason'])) {
            $model->preliminaryReason = $map['preliminaryReason'];
        }
        if (isset($map['problemId'])) {
            $model->problemId = $map['problemId'];
        }
        if (isset($map['problemLevel'])) {
            $model->problemLevel = $map['problemLevel'];
        }
        if (isset($map['problemName'])) {
            $model->problemName = $map['problemName'];
        }
        if (isset($map['problemNumber'])) {
            $model->problemNumber = $map['problemNumber'];
        }
        if (isset($map['problemStatus'])) {
            $model->problemStatus = $map['problemStatus'];
        }
        if (isset($map['progressSummary'])) {
            $model->progressSummary = $map['progressSummary'];
        }
        if (isset($map['progressSummaryRichTextId'])) {
            $model->progressSummaryRichTextId = $map['progressSummaryRichTextId'];
        }
        if (isset($map['recoveryTime'])) {
            $model->recoveryTime = $map['recoveryTime'];
        }
        if (isset($map['relatedServiceId'])) {
            $model->relatedServiceId = $map['relatedServiceId'];
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
        if (isset($map['replayingProblemOperateLogs'])) {
            if (!empty($map['replayingProblemOperateLogs'])) {
                $model->replayingProblemOperateLogs = [];
                $n                                  = 0;
                foreach ($map['replayingProblemOperateLogs'] as $item) {
                    $model->replayingProblemOperateLogs[$n++] = null !== $item ? replayingProblemOperateLogs::fromMap($item) : $item;
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
        if (isset($map['serviceDeleteType'])) {
            $model->serviceDeleteType = $map['serviceDeleteType'];
        }
        if (isset($map['serviceName'])) {
            $model->serviceName = $map['serviceName'];
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

        return $model;
    }
}
