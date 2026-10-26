<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class ListSubscriptionsResponseBody extends Model
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
     * @var string
     */
    public $requestId;

    /**
     * @var SubscriptionForView[]
     */
    public $subscriptionList;
    protected $_name = [
        'maxResults' => 'maxResults',
        'nextToken' => 'nextToken',
        'requestId' => 'requestId',
        'subscriptionList' => 'subscriptionList',
    ];

    public function validate()
    {
        if (\is_array($this->subscriptionList)) {
            Model::validateArray($this->subscriptionList);
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

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->subscriptionList) {
            if (\is_array($this->subscriptionList)) {
                $res['subscriptionList'] = [];
                $n1 = 0;
                foreach ($this->subscriptionList as $item1) {
                    $res['subscriptionList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['subscriptionList'])) {
            if (!empty($map['subscriptionList'])) {
                $model->subscriptionList = [];
                $n1 = 0;
                foreach ($map['subscriptionList'] as $item1) {
                    $model->subscriptionList[$n1] = SubscriptionForView::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
