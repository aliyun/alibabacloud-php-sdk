<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetProblemPreviewResponseBody\data;

use AlibabaCloud\SDK\GEMP\V20210413\Models\GetProblemPreviewResponseBody\data\problem\coordinationGroups;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetProblemPreviewResponseBody\data\problem\effectionServices;
use AlibabaCloud\Tea\Model;

class problem extends Model
{
    /**
     * @var coordinationGroups[]
     */
    public $coordinationGroups;

    /**
     * @example 2021-02-21 00:00:00
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 2021-02-21 00:00:00
     *
     * @var string
     */
    public $discoverTime;

    /**
     * @var effectionServices[]
     */
    public $effectionServices;

    /**
     * @example true
     *
     * @var bool
     */
    public $isManual;

    /**
     * @example true
     *
     * @var bool
     */
    public $isUpgrade;

    /**
     * @example 231
     *
     * @var string
     */
    public $mainHandlerId;

    /**
     * @var string
     */
    public $mainHandlerName;

    /**
     * @var string
     */
    public $preliminaryReason;

    /**
     * @example 123123
     *
     * @var int
     */
    public $problemId;

    /**
     * @example P2
     *
     * @var string
     */
    public $problemLevel;

    /**
     * @var string
     */
    public $problemName;

    /**
     * @example HANDLING
     *
     * @var string
     */
    public $problemStatus;

    /**
     * @var string
     */
    public $progressSummary;

    /**
     * @example 12312
     *
     * @var int
     */
    public $progressSummaryRichTextId;

    /**
     * @example 2021-02-21 00:00:00
     *
     * @var string
     */
    public $recoveryTime;

    /**
     * @example 213123
     *
     * @var int
     */
    public $relatedServiceId;

    /**
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'coordinationGroups'        => 'coordinationGroups',
        'createTime'                => 'createTime',
        'discoverTime'              => 'discoverTime',
        'effectionServices'         => 'effectionServices',
        'isManual'                  => 'isManual',
        'isUpgrade'                 => 'isUpgrade',
        'mainHandlerId'             => 'mainHandlerId',
        'mainHandlerName'           => 'mainHandlerName',
        'preliminaryReason'         => 'preliminaryReason',
        'problemId'                 => 'problemId',
        'problemLevel'              => 'problemLevel',
        'problemName'               => 'problemName',
        'problemStatus'             => 'problemStatus',
        'progressSummary'           => 'progressSummary',
        'progressSummaryRichTextId' => 'progressSummaryRichTextId',
        'recoveryTime'              => 'recoveryTime',
        'relatedServiceId'          => 'relatedServiceId',
        'serviceName'               => 'serviceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->effectionServices) {
            $res['effectionServices'] = [];
            if (null !== $this->effectionServices && \is_array($this->effectionServices)) {
                $n = 0;
                foreach ($this->effectionServices as $item) {
                    $res['effectionServices'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->isManual) {
            $res['isManual'] = $this->isManual;
        }
        if (null !== $this->isUpgrade) {
            $res['isUpgrade'] = $this->isUpgrade;
        }
        if (null !== $this->mainHandlerId) {
            $res['mainHandlerId'] = $this->mainHandlerId;
        }
        if (null !== $this->mainHandlerName) {
            $res['mainHandlerName'] = $this->mainHandlerName;
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
        if (null !== $this->serviceName) {
            $res['serviceName'] = $this->serviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return problem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['effectionServices'])) {
            if (!empty($map['effectionServices'])) {
                $model->effectionServices = [];
                $n                        = 0;
                foreach ($map['effectionServices'] as $item) {
                    $model->effectionServices[$n++] = null !== $item ? effectionServices::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['isManual'])) {
            $model->isManual = $map['isManual'];
        }
        if (isset($map['isUpgrade'])) {
            $model->isUpgrade = $map['isUpgrade'];
        }
        if (isset($map['mainHandlerId'])) {
            $model->mainHandlerId = $map['mainHandlerId'];
        }
        if (isset($map['mainHandlerName'])) {
            $model->mainHandlerName = $map['mainHandlerName'];
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
        if (isset($map['serviceName'])) {
            $model->serviceName = $map['serviceName'];
        }

        return $model;
    }
}
