<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListCustomPrivacyPoliciesResponseBody\customPrivacyPolicies;

class ListCustomPrivacyPoliciesResponseBody extends Model
{
    /**
     * @var customPrivacyPolicies[]
     */
    public $customPrivacyPolicies;

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
    public $previousToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'customPrivacyPolicies' => 'CustomPrivacyPolicies',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'previousToken' => 'PreviousToken',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->customPrivacyPolicies)) {
            Model::validateArray($this->customPrivacyPolicies);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customPrivacyPolicies) {
            if (\is_array($this->customPrivacyPolicies)) {
                $res['CustomPrivacyPolicies'] = [];
                $n1 = 0;
                foreach ($this->customPrivacyPolicies as $item1) {
                    $res['CustomPrivacyPolicies'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->previousToken) {
            $res['PreviousToken'] = $this->previousToken;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['CustomPrivacyPolicies'])) {
            if (!empty($map['CustomPrivacyPolicies'])) {
                $model->customPrivacyPolicies = [];
                $n1 = 0;
                foreach ($map['CustomPrivacyPolicies'] as $item1) {
                    $model->customPrivacyPolicies[$n1] = customPrivacyPolicies::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['PreviousToken'])) {
            $model->previousToken = $map['PreviousToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
