<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class ListIntervenesRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 33a2658aaabf4c24b45d50e575125311_p_beebot_public
     *
     * @var string
     */
    public $agentKey;

    /**
     * @var int
     */
    public $interveneType;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageIndex;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $query;

    /**
     * @example mqtt_outRule_1679019634514
     *
     * @var int
     */
    public $ruleId;
    protected $_name = [
        'agentKey'      => 'AgentKey',
        'interveneType' => 'InterveneType',
        'pageIndex'     => 'PageIndex',
        'pageSize'      => 'PageSize',
        'query'         => 'Query',
        'ruleId'        => 'RuleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }
        if (null !== $this->interveneType) {
            $res['InterveneType'] = $this->interveneType;
        }
        if (null !== $this->pageIndex) {
            $res['PageIndex'] = $this->pageIndex;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListIntervenesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['InterveneType'])) {
            $model->interveneType = $map['InterveneType'];
        }
        if (isset($map['PageIndex'])) {
            $model->pageIndex = $map['PageIndex'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        return $model;
    }
}
