<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class CreateProblemRequest extends Model
{
    /**
     * @var int[]
     */
    public $affectServiceIds;

    /**
     * @example E789D869-DB13-4913-BAA8-A1F56F94B94D
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example 2020-10-02 00:00:00
     *
     * @var string
     */
    public $discoverTime;

    /**
     * @example 123221
     *
     * @var int
     */
    public $incidentId;

    /**
     * @example 32121
     *
     * @var int
     */
    public $mainHandlerId;

    /**
     * @example 初步原因
     *
     * @var string
     */
    public $preliminaryReason;

    /**
     * @example P2
     *
     * @var string
     */
    public $problemLevel;

    /**
     * @example 故障A
     *
     * @var string
     */
    public $problemName;

    /**
     * @example PROBLEM_NOTIFY
     *
     * @var string
     */
    public $problemNotifyType;

    /**
     * @example HANDLING
     *
     * @var string
     */
    public $problemStatus;

    /**
     * @example 进展摘要
     *
     * @var string
     */
    public $progressSummary;

    /**
     * @example 343
     *
     * @var int
     */
    public $progressSummaryRichTextId;

    /**
     * @example 2020-10-02 00:00:00
     *
     * @var string
     */
    public $recoveryTime;

    /**
     * @example 123122
     *
     * @var int
     */
    public $relatedServiceId;

    /**
     * @var int[]
     */
    public $serviceGroupIds;
    protected $_name = [
        'affectServiceIds'          => 'affectServiceIds',
        'clientToken'               => 'clientToken',
        'discoverTime'              => 'discoverTime',
        'incidentId'                => 'incidentId',
        'mainHandlerId'             => 'mainHandlerId',
        'preliminaryReason'         => 'preliminaryReason',
        'problemLevel'              => 'problemLevel',
        'problemName'               => 'problemName',
        'problemNotifyType'         => 'problemNotifyType',
        'problemStatus'             => 'problemStatus',
        'progressSummary'           => 'progressSummary',
        'progressSummaryRichTextId' => 'progressSummaryRichTextId',
        'recoveryTime'              => 'recoveryTime',
        'relatedServiceId'          => 'relatedServiceId',
        'serviceGroupIds'           => 'serviceGroupIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->affectServiceIds) {
            $res['affectServiceIds'] = $this->affectServiceIds;
        }
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->discoverTime) {
            $res['discoverTime'] = $this->discoverTime;
        }
        if (null !== $this->incidentId) {
            $res['incidentId'] = $this->incidentId;
        }
        if (null !== $this->mainHandlerId) {
            $res['mainHandlerId'] = $this->mainHandlerId;
        }
        if (null !== $this->preliminaryReason) {
            $res['preliminaryReason'] = $this->preliminaryReason;
        }
        if (null !== $this->problemLevel) {
            $res['problemLevel'] = $this->problemLevel;
        }
        if (null !== $this->problemName) {
            $res['problemName'] = $this->problemName;
        }
        if (null !== $this->problemNotifyType) {
            $res['problemNotifyType'] = $this->problemNotifyType;
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
        if (null !== $this->serviceGroupIds) {
            $res['serviceGroupIds'] = $this->serviceGroupIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateProblemRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['affectServiceIds'])) {
            if (!empty($map['affectServiceIds'])) {
                $model->affectServiceIds = $map['affectServiceIds'];
            }
        }
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['discoverTime'])) {
            $model->discoverTime = $map['discoverTime'];
        }
        if (isset($map['incidentId'])) {
            $model->incidentId = $map['incidentId'];
        }
        if (isset($map['mainHandlerId'])) {
            $model->mainHandlerId = $map['mainHandlerId'];
        }
        if (isset($map['preliminaryReason'])) {
            $model->preliminaryReason = $map['preliminaryReason'];
        }
        if (isset($map['problemLevel'])) {
            $model->problemLevel = $map['problemLevel'];
        }
        if (isset($map['problemName'])) {
            $model->problemName = $map['problemName'];
        }
        if (isset($map['problemNotifyType'])) {
            $model->problemNotifyType = $map['problemNotifyType'];
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
        if (isset($map['serviceGroupIds'])) {
            if (!empty($map['serviceGroupIds'])) {
                $model->serviceGroupIds = $map['serviceGroupIds'];
            }
        }

        return $model;
    }
}
