<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class UpdateProblemRequest extends Model
{
    /**
     * @description 舆情反馈
     *
     * @var string
     */
    public $feedback;

    /**
     * @description 故障等级
     *
     * @var string
     */
    public $level;

    /**
     * @description 主要处理人
     *
     * @var int
     */
    public $mainHandlerId;

    /**
     * @description 初步原因
     *
     * @var string
     */
    public $preliminaryReason;

    /**
     * @description 故障ID
     *
     * @var int
     */
    public $problemId;

    /**
     * @description 故障名
     *
     * @var string
     */
    public $problemName;

    /**
     * @description 进展摘要
     *
     * @var string
     */
    public $progressSummary;

    /**
     * @description 所属服务
     *
     * @var int
     */
    public $relatedServiceId;

    /**
     * @description 应急协同组
     *
     * @var int[]
     */
    public $serviceGroupIds;
    protected $_name = [
        'feedback'          => 'feedback',
        'level'             => 'level',
        'mainHandlerId'     => 'mainHandlerId',
        'preliminaryReason' => 'preliminaryReason',
        'problemId'         => 'problemId',
        'problemName'       => 'problemName',
        'progressSummary'   => 'progressSummary',
        'relatedServiceId'  => 'relatedServiceId',
        'serviceGroupIds'   => 'serviceGroupIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->feedback) {
            $res['feedback'] = $this->feedback;
        }
        if (null !== $this->level) {
            $res['level'] = $this->level;
        }
        if (null !== $this->mainHandlerId) {
            $res['mainHandlerId'] = $this->mainHandlerId;
        }
        if (null !== $this->preliminaryReason) {
            $res['preliminaryReason'] = $this->preliminaryReason;
        }
        if (null !== $this->problemId) {
            $res['problemId'] = $this->problemId;
        }
        if (null !== $this->problemName) {
            $res['problemName'] = $this->problemName;
        }
        if (null !== $this->progressSummary) {
            $res['progressSummary'] = $this->progressSummary;
        }
        if (null !== $this->relatedServiceId) {
            $res['relatedServiceId'] = $this->relatedServiceId;
        }
        if (null !== $this->serviceGroupIds) {
            $res['serviceGroupIds'] = $this->serviceGroupIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateProblemRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['feedback'])) {
            $model->feedback = $map['feedback'];
        }
        if (isset($map['level'])) {
            $model->level = $map['level'];
        }
        if (isset($map['mainHandlerId'])) {
            $model->mainHandlerId = $map['mainHandlerId'];
        }
        if (isset($map['preliminaryReason'])) {
            $model->preliminaryReason = $map['preliminaryReason'];
        }
        if (isset($map['problemId'])) {
            $model->problemId = $map['problemId'];
        }
        if (isset($map['problemName'])) {
            $model->problemName = $map['problemName'];
        }
        if (isset($map['progressSummary'])) {
            $model->progressSummary = $map['progressSummary'];
        }
        if (isset($map['relatedServiceId'])) {
            $model->relatedServiceId = $map['relatedServiceId'];
        }
        if (isset($map['serviceGroupIds'])) {
            if (!empty($map['serviceGroupIds'])) {
                $model->serviceGroupIds = $map['serviceGroupIds'];
            }
        }

        return $model;
    }
}
