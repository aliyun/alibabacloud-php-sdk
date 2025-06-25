<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeAutoSnapshotPolicyResponseBody\autoSnapshotPolicies;

class DescribeAutoSnapshotPolicyResponseBody extends Model
{
    /**
     * @var autoSnapshotPolicies[]
     */
    public $autoSnapshotPolicies;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'autoSnapshotPolicies' => 'AutoSnapshotPolicies',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->autoSnapshotPolicies)) {
            Model::validateArray($this->autoSnapshotPolicies);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoSnapshotPolicies) {
            if (\is_array($this->autoSnapshotPolicies)) {
                $res['AutoSnapshotPolicies'] = [];
                $n1 = 0;
                foreach ($this->autoSnapshotPolicies as $item1) {
                    $res['AutoSnapshotPolicies'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['AutoSnapshotPolicies'])) {
            if (!empty($map['AutoSnapshotPolicies'])) {
                $model->autoSnapshotPolicies = [];
                $n1 = 0;
                foreach ($map['AutoSnapshotPolicies'] as $item1) {
                    $model->autoSnapshotPolicies[$n1] = autoSnapshotPolicies::fromMap($item1);
                    ++$n1;
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
