<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class ListNotifyPoliciesResponseBody extends Model
{
    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var NotifyPolicySummary[]
     */
    public $notifyPolicyList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'maxResults' => 'maxResults',
        'nextToken' => 'nextToken',
        'notifyPolicyList' => 'notifyPolicyList',
        'requestId' => 'requestId',
        'totalCount' => 'totalCount',
    ];

    public function validate()
    {
        if (\is_array($this->notifyPolicyList)) {
            Model::validateArray($this->notifyPolicyList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->notifyPolicyList) {
            if (\is_array($this->notifyPolicyList)) {
                $res['notifyPolicyList'] = [];
                $n1 = 0;
                foreach ($this->notifyPolicyList as $item1) {
                    $res['notifyPolicyList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
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
        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['notifyPolicyList'])) {
            if (!empty($map['notifyPolicyList'])) {
                $model->notifyPolicyList = [];
                $n1 = 0;
                foreach ($map['notifyPolicyList'] as $item1) {
                    $model->notifyPolicyList[$n1] = NotifyPolicySummary::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
