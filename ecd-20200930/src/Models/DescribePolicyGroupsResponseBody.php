<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePolicyGroupsResponseBody\describePolicyGroups;

class DescribePolicyGroupsResponseBody extends Model
{
    /**
     * @var describePolicyGroups[]
     */
    public $describePolicyGroups;
    /**
     * @var string
     */
    public $nextToken;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'describePolicyGroups' => 'DescribePolicyGroups',
        'nextToken'            => 'NextToken',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->describePolicyGroups)) {
            Model::validateArray($this->describePolicyGroups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->describePolicyGroups) {
            if (\is_array($this->describePolicyGroups)) {
                $res['DescribePolicyGroups'] = [];
                $n1                          = 0;
                foreach ($this->describePolicyGroups as $item1) {
                    $res['DescribePolicyGroups'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
        if (isset($map['DescribePolicyGroups'])) {
            if (!empty($map['DescribePolicyGroups'])) {
                $model->describePolicyGroups = [];
                $n1                          = 0;
                foreach ($map['DescribePolicyGroups'] as $item1) {
                    $model->describePolicyGroups[$n1++] = describePolicyGroups::fromMap($item1);
                }
            }
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
