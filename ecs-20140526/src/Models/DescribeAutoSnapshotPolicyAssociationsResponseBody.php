<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoSnapshotPolicyAssociationsResponseBody\autoSnapshotPolicyAssociations;
use AlibabaCloud\Tea\Model;

class DescribeAutoSnapshotPolicyAssociationsResponseBody extends Model
{
    /**
     * @var autoSnapshotPolicyAssociations
     */
    public $autoSnapshotPolicyAssociations;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'autoSnapshotPolicyAssociations' => 'AutoSnapshotPolicyAssociations',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoSnapshotPolicyAssociations) {
            $res['AutoSnapshotPolicyAssociations'] = null !== $this->autoSnapshotPolicyAssociations ? $this->autoSnapshotPolicyAssociations->toMap() : null;
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
     * @return DescribeAutoSnapshotPolicyAssociationsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoSnapshotPolicyAssociations'])) {
            $model->autoSnapshotPolicyAssociations = autoSnapshotPolicyAssociations::fromMap($map['AutoSnapshotPolicyAssociations']);
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
