<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Dara\Model;

class QueryTicketsRequest extends Model
{
    /**
     * @var int
     */
    public $caseId;

    /**
     * @var int
     */
    public $caseStatus;

    /**
     * @var int
     */
    public $caseType;

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
    public $currentPage;

    /**
     * @var int
     */
    public $dealId;

    /**
     * @var mixed[]
     */
    public $extra;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $srType;

    /**
     * @var int
     */
    public $taskStatus;

    /**
     * @var int
     */
    public $touchId;
    protected $_name = [
        'caseId' => 'CaseId',
        'caseStatus' => 'CaseStatus',
        'caseType' => 'CaseType',
        'channelId' => 'ChannelId',
        'channelType' => 'ChannelType',
        'currentPage' => 'CurrentPage',
        'dealId' => 'DealId',
        'extra' => 'Extra',
        'instanceId' => 'InstanceId',
        'pageSize' => 'PageSize',
        'srType' => 'SrType',
        'taskStatus' => 'TaskStatus',
        'touchId' => 'TouchId',
    ];

    public function validate()
    {
        if (\is_array($this->extra)) {
            Model::validateArray($this->extra);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->extra) {
            if (\is_array($this->extra)) {
                $res['Extra'] = [];
                foreach ($this->extra as $key1 => $value1) {
                    $res['Extra'][$key1] = $value1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
            if (!empty($map['Extra'])) {
                $model->extra = [];
                foreach ($map['Extra'] as $key1 => $value1) {
                    $model->extra[$key1] = $value1;
                }
            }
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
