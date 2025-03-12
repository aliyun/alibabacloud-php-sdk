<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\QueryGuidTaskListResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\QueryGuidTaskListResponseBody\guideTaskConfigList\rewardData;
use AlibabaCloud\Tea\Model;

class guideTaskConfigList extends Model
{
    /**
     * @description The information about the reward for a complete task.
     *
     * @var rewardData
     */
    public $rewardData;

    /**
     * @description The security score that is increased after you complete the task.
     *
     * @example 80
     *
     * @var int
     */
    public $securityScore;

    /**
     * @description The status of the beginner task. Valid values:
     *
     *   **0**: disabled.
     *   **1**: in progress.
     *   **2**: complete.
     *
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @description The ID of the beginner task.
     *
     * @example t-000d8slfgx4p40kb64ad
     *
     * @var int
     */
    public $taskId;

    /**
     * @description The name of the task type. Valid values:
     *
     *   **guid_task_security_score_promote_video**: the task of viewing a video tutorial for beginners.
     *   **guide_sub_task_config_defence_hbr**: the task of configuring anti-ransomware for servers.
     *   **guide_sub_task_config_uni_defence_hbr**: the task of configuring anti-ransomware for databases.
     *   **guid_task_log_analysis_config**: the task of configuring log analysis.
     *   **guide_sub_task_web_lock_config**: the task of configuring web tamper proofing.
     *   **guide_sub_task_config_anti_crack**: the task of configuring protection against brute-force attacks.
     *   **guid_task_container_security_video**: the task of viewing the video on how to protect containers.
     *   **guid_task_container_image_scan_config**: the task of configuring container image scan.
     *   **guid_task_k8s_log_analysis_config**: the task of configuring threat detection on Kubernetes containers.
     *   **guid_task_container_network**: the task of configuring container network visualization.
     *   **guide_sub_task_config_add_collection**: the task of saving a console URL.
     *   **guide_sub_task_vul_scan**: the task of scanning for vulnerabilities.
     *   **guide_sub_task_virusKill**: the task of configuring virus detection and removal.
     *
     * @example guide_sub_task_config_add_collection
     *
     * @var string
     */
    public $taskTypeName;
    protected $_name = [
        'rewardData'    => 'RewardData',
        'securityScore' => 'SecurityScore',
        'status'        => 'Status',
        'taskId'        => 'TaskId',
        'taskTypeName'  => 'TaskTypeName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rewardData) {
            $res['RewardData'] = null !== $this->rewardData ? $this->rewardData->toMap() : null;
        }
        if (null !== $this->securityScore) {
            $res['SecurityScore'] = $this->securityScore;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskTypeName) {
            $res['TaskTypeName'] = $this->taskTypeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return guideTaskConfigList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RewardData'])) {
            $model->rewardData = rewardData::fromMap($map['RewardData']);
        }
        if (isset($map['SecurityScore'])) {
            $model->securityScore = $map['SecurityScore'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskTypeName'])) {
            $model->taskTypeName = $map['TaskTypeName'];
        }

        return $model;
    }
}
