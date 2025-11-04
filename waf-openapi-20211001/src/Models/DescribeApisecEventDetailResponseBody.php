<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;

class DescribeApisecEventDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $attackCnt;

    /**
     * @var string[]
     */
    public $attackerList;

    /**
     * @var string
     */
    public $detailValue;

    /**
     * @var string
     */
    public $endTs;

    /**
     * @var string
     */
    public $eventId;

    /**
     * @var string
     */
    public $eventLevel;

    /**
     * @var string
     */
    public $eventScope;

    /**
     * @var string
     */
    public $eventTag;

    /**
     * @var string
     */
    public $note;

    /**
     * @var string
     */
    public $origin;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $startTs;

    /**
     * @var string
     */
    public $userStatus;
    protected $_name = [
        'attackCnt' => 'AttackCnt',
        'attackerList' => 'AttackerList',
        'detailValue' => 'DetailValue',
        'endTs' => 'EndTs',
        'eventId' => 'EventId',
        'eventLevel' => 'EventLevel',
        'eventScope' => 'EventScope',
        'eventTag' => 'EventTag',
        'note' => 'Note',
        'origin' => 'Origin',
        'requestId' => 'RequestId',
        'startTs' => 'StartTs',
        'userStatus' => 'UserStatus',
    ];

    public function validate()
    {
        if (\is_array($this->attackerList)) {
            Model::validateArray($this->attackerList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attackCnt) {
            $res['AttackCnt'] = $this->attackCnt;
        }

        if (null !== $this->attackerList) {
            if (\is_array($this->attackerList)) {
                $res['AttackerList'] = [];
                $n1 = 0;
                foreach ($this->attackerList as $item1) {
                    $res['AttackerList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->detailValue) {
            $res['DetailValue'] = $this->detailValue;
        }

        if (null !== $this->endTs) {
            $res['EndTs'] = $this->endTs;
        }

        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }

        if (null !== $this->eventLevel) {
            $res['EventLevel'] = $this->eventLevel;
        }

        if (null !== $this->eventScope) {
            $res['EventScope'] = $this->eventScope;
        }

        if (null !== $this->eventTag) {
            $res['EventTag'] = $this->eventTag;
        }

        if (null !== $this->note) {
            $res['Note'] = $this->note;
        }

        if (null !== $this->origin) {
            $res['Origin'] = $this->origin;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->startTs) {
            $res['StartTs'] = $this->startTs;
        }

        if (null !== $this->userStatus) {
            $res['UserStatus'] = $this->userStatus;
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
        if (isset($map['AttackCnt'])) {
            $model->attackCnt = $map['AttackCnt'];
        }

        if (isset($map['AttackerList'])) {
            if (!empty($map['AttackerList'])) {
                $model->attackerList = [];
                $n1 = 0;
                foreach ($map['AttackerList'] as $item1) {
                    $model->attackerList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DetailValue'])) {
            $model->detailValue = $map['DetailValue'];
        }

        if (isset($map['EndTs'])) {
            $model->endTs = $map['EndTs'];
        }

        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }

        if (isset($map['EventLevel'])) {
            $model->eventLevel = $map['EventLevel'];
        }

        if (isset($map['EventScope'])) {
            $model->eventScope = $map['EventScope'];
        }

        if (isset($map['EventTag'])) {
            $model->eventTag = $map['EventTag'];
        }

        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }

        if (isset($map['Origin'])) {
            $model->origin = $map['Origin'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['StartTs'])) {
            $model->startTs = $map['StartTs'];
        }

        if (isset($map['UserStatus'])) {
            $model->userStatus = $map['UserStatus'];
        }

        return $model;
    }
}
