<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class ListWaitingRoomRulesRequest extends Model
{
    /**
     * @description Optional. The rule name, which can be used to query a specific bypass rule.
     *
     * @example test
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The website ID, which can be obtained by calling the [ListSites](https://help.aliyun.com/document_detail/2850189.html) operation.
     *
     * This parameter is required.
     * @example 123456****
     *
     * @var int
     */
    public $siteId;

    /**
     * @description The ID of the waiting room to be bypassed, which can be obtained by calling the [ListWatingRooms](https://help.aliyun.com/document_detail/2850279.html) operation.
     *
     * This parameter is required.
     * @example 6a51d5bc6460887abd129****
     *
     * @var string
     */
    public $waitingRoomId;

    /**
     * @description Optional. The rule ID, which can be used to query a specific rule.
     *
     * @example 37286782688****
     *
     * @var int
     */
    public $waitingRoomRuleId;
    protected $_name = [
        'ruleName'          => 'RuleName',
        'siteId'            => 'SiteId',
        'waitingRoomId'     => 'WaitingRoomId',
        'waitingRoomRuleId' => 'WaitingRoomRuleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }
        if (null !== $this->waitingRoomId) {
            $res['WaitingRoomId'] = $this->waitingRoomId;
        }
        if (null !== $this->waitingRoomRuleId) {
            $res['WaitingRoomRuleId'] = $this->waitingRoomRuleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListWaitingRoomRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }
        if (isset($map['WaitingRoomId'])) {
            $model->waitingRoomId = $map['WaitingRoomId'];
        }
        if (isset($map['WaitingRoomRuleId'])) {
            $model->waitingRoomRuleId = $map['WaitingRoomRuleId'];
        }

        return $model;
    }
}
