<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Tag\V20180828\Models\ListPoliciesResponseBody\policyList;

class ListPoliciesResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var policyList[]
     */
    public $policyList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nextToken' => 'NextToken',
        'policyList' => 'PolicyList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->policyList)) {
            Model::validateArray($this->policyList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->policyList) {
            if (\is_array($this->policyList)) {
                $res['PolicyList'] = [];
                $n1 = 0;
                foreach ($this->policyList as $item1) {
                    $res['PolicyList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['PolicyList'])) {
            if (!empty($map['PolicyList'])) {
                $model->policyList = [];
                $n1 = 0;
                foreach ($map['PolicyList'] as $item1) {
                    $model->policyList[$n1] = policyList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
