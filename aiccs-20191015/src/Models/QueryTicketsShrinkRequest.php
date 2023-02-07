<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class QueryTicketsShrinkRequest extends Model
{
    /**
     * @example 223468****
     *
     * @var int
     */
    public $caseId;

    /**
     * @example 2
     *
     * @var int
     */
    public $caseStatus;

    /**
     * @example 1223
     *
     * @var int
     */
    public $caseType;

    /**
     * @example 02acfefd3fa14049826ac1a89e1xxxxx
     *
     * @var string
     */
    public $channelId;

    /**
     * @example 1
     *
     * @var int
     */
    public $channelType;

    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example 123456
     *
     * @var int
     */
    public $dealId;

    /**
     * @var string
     */
    public $extraShrink;

    /**
     * @example ccc_xp_pre-cn-***
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 29506
     *
     * @var int
     */
    public $srType;

    /**
     * @example 3
     *
     * @var int
     */
    public $taskStatus;

    /**
     * @example 15030609
     *
     * @var int
     */
    public $touchId;
    protected $_name = [
        'caseId'      => 'CaseId',
        'caseStatus'  => 'CaseStatus',
        'caseType'    => 'CaseType',
        'channelId'   => 'ChannelId',
        'channelType' => 'ChannelType',
        'currentPage' => 'CurrentPage',
        'dealId'      => 'DealId',
        'extraShrink' => 'Extra',
        'instanceId'  => 'InstanceId',
        'pageSize'    => 'PageSize',
        'srType'      => 'SrType',
        'taskStatus'  => 'TaskStatus',
        'touchId'     => 'TouchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->caseId) {
            $res['CaseId'] = $this->caseId;
        }
        if (null !== $this->caseStatus) {
            $res['CaseStatus'] = $this->caseStatus;
        }
        if (null !== $this->caseType) {
            $res['CaseType'] = $this->caseType;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->channelType) {
            $res['ChannelType'] = $this->channelType;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->dealId) {
            $res['DealId'] = $this->dealId;
        }
        if (null !== $this->extraShrink) {
            $res['Extra'] = $this->extraShrink;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->srType) {
            $res['SrType'] = $this->srType;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->touchId) {
            $res['TouchId'] = $this->touchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryTicketsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CaseId'])) {
            $model->caseId = $map['CaseId'];
        }
        if (isset($map['CaseStatus'])) {
            $model->caseStatus = $map['CaseStatus'];
        }
        if (isset($map['CaseType'])) {
            $model->caseType = $map['CaseType'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['ChannelType'])) {
            $model->channelType = $map['ChannelType'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['DealId'])) {
            $model->dealId = $map['DealId'];
        }
        if (isset($map['Extra'])) {
            $model->extraShrink = $map['Extra'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SrType'])) {
            $model->srType = $map['SrType'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['TouchId'])) {
            $model->touchId = $map['TouchId'];
        }

        return $model;
    }
}
