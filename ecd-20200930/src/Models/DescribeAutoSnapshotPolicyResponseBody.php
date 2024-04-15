<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeAutoSnapshotPolicyResponseBody\autoSnapshotPolicies;
use AlibabaCloud\Tea\Model;

class DescribeAutoSnapshotPolicyResponseBody extends Model
{
    /**
     * @description The details of the queried automatic snapshot policies.
     *
     * @var autoSnapshotPolicies[]
     */
    public $autoSnapshotPolicies;

    /**
     * @description The token that is used to start the next query. If this parameter is empty, all results haven been returned.
     *
     * @example caeba0bbb2be03f84eb48b699f0a4883
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the request.
     *
     * @example A7F6612E-59CC-59F9-9DD1-91867FCC****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'autoSnapshotPolicies' => 'AutoSnapshotPolicies',
        'nextToken'            => 'NextToken',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoSnapshotPolicies) {
            $res['AutoSnapshotPolicies'] = [];
            if (null !== $this->autoSnapshotPolicies && \is_array($this->autoSnapshotPolicies)) {
                $n = 0;
                foreach ($this->autoSnapshotPolicies as $item) {
                    $res['AutoSnapshotPolicies'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return DescribeAutoSnapshotPolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoSnapshotPolicies'])) {
            if (!empty($map['AutoSnapshotPolicies'])) {
                $model->autoSnapshotPolicies = [];
                $n                           = 0;
                foreach ($map['AutoSnapshotPolicies'] as $item) {
                    $model->autoSnapshotPolicies[$n++] = null !== $item ? autoSnapshotPolicies::fromMap($item) : $item;
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
