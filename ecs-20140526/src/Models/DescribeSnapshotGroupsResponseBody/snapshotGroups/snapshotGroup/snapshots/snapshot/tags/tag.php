<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotGroupsResponseBody\snapshotGroups\snapshotGroup\snapshots\snapshot\tags;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description The tag key of each snapshot in the snapshot-consistent group. The default values of Key and Value contain the details of the instance to which the snapshot-consistent group belongs.
     *
     * @example acs:ecs:createFrom
     *
     * @var string
     */
    public $key;

    /**
     * @description The tag value of each snapshot in the snapshot-consistent group. The default values of Key and Value contain the details of the instance to which the snapshot-consistent group belongs.
     *
     * @example i-bp11qm0o3dk4iuc****
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key'   => 'Key',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tag
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
