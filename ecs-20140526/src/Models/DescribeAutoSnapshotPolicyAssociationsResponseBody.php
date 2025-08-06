<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoSnapshotPolicyAssociationsResponseBody\autoSnapshotPolicyAssociations;

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

    public function validate()
    {
        if (null !== $this->autoSnapshotPolicyAssociations) {
            $this->autoSnapshotPolicyAssociations->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoSnapshotPolicyAssociations) {
            $res['AutoSnapshotPolicyAssociations'] = null !== $this->autoSnapshotPolicyAssociations ? $this->autoSnapshotPolicyAssociations->toArray($noStream) : $this->autoSnapshotPolicyAssociations;
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
