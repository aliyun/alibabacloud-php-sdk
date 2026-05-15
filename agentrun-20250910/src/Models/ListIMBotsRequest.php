<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class ListIMBotsRequest extends Model
{
    /**
     * @var string
     */
    public $agentRuntimeId;

    /**
     * @var string
     */
    public $botBizType;

    /**
     * @var string
     */
    public $botName;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'agentRuntimeId' => 'agentRuntimeId',
        'botBizType' => 'botBizType',
        'botName' => 'botName',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'status' => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentRuntimeId) {
            $res['agentRuntimeId'] = $this->agentRuntimeId;
        }

        if (null !== $this->botBizType) {
            $res['botBizType'] = $this->botBizType;
        }

        if (null !== $this->botName) {
            $res['botName'] = $this->botName;
        }

        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['agentRuntimeId'])) {
            $model->agentRuntimeId = $map['agentRuntimeId'];
        }

        if (isset($map['botBizType'])) {
            $model->botBizType = $map['botBizType'];
        }

        if (isset($map['botName'])) {
            $model->botName = $map['botName'];
        }

        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
