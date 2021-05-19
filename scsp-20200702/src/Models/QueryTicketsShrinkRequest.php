<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scsp\V20200702\Models;

use AlibabaCloud\Tea\Model;

class QueryTicketsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $caseId;

    /**
     * @var int
     */
    public $caseType;

    /**
     * @var int
     */
    public $caseStatus;

    /**
     * @var int
     */
    public $srType;

    /**
     * @var int
     */
    public $taskStatus;

    /**
     * @var string
     */
    public $channelId;

    /**
     * @var int
     */
    public $channelType;

    /**
     * @var int
     */
    public $touchId;

    /**
     * @var int
     */
    public $dealId;

    /**
     * @var string
     */
    public $extraShrink;

    /**
     * @var string
     */
    public $accountName;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $currentPage;
    protected $_name = [
        'instanceId'  => 'InstanceId',
        'caseId'      => 'CaseId',
        'caseType'    => 'CaseType',
        'caseStatus'  => 'CaseStatus',
        'srType'      => 'SrType',
        'taskStatus'  => 'TaskStatus',
        'channelId'   => 'ChannelId',
        'channelType' => 'ChannelType',
        'touchId'     => 'TouchId',
        'dealId'      => 'DealId',
        'extraShrink' => 'Extra',
        'accountName' => 'AccountName',
        'pageSize'    => 'PageSize',
        'currentPage' => 'CurrentPage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->caseId) {
            $res['CaseId'] = $this->caseId;
        }
        if (null !== $this->caseType) {
            $res['CaseType'] = $this->caseType;
        }
        if (null !== $this->caseStatus) {
            $res['CaseStatus'] = $this->caseStatus;
        }
        if (null !== $this->srType) {
            $res['SrType'] = $this->srType;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->channelType) {
            $res['ChannelType'] = $this->channelType;
        }
        if (null !== $this->touchId) {
            $res['TouchId'] = $this->touchId;
        }
        if (null !== $this->dealId) {
            $res['DealId'] = $this->dealId;
        }
        if (null !== $this->extraShrink) {
            $res['Extra'] = $this->extraShrink;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['CaseId'])) {
            $model->caseId = $map['CaseId'];
        }
        if (isset($map['CaseType'])) {
            $model->caseType = $map['CaseType'];
        }
        if (isset($map['CaseStatus'])) {
            $model->caseStatus = $map['CaseStatus'];
        }
        if (isset($map['SrType'])) {
            $model->srType = $map['SrType'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['ChannelType'])) {
            $model->channelType = $map['ChannelType'];
        }
        if (isset($map['TouchId'])) {
            $model->touchId = $map['TouchId'];
        }
        if (isset($map['DealId'])) {
            $model->dealId = $map['DealId'];
        }
        if (isset($map['Extra'])) {
            $model->extraShrink = $map['Extra'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        return $model;
    }
}
