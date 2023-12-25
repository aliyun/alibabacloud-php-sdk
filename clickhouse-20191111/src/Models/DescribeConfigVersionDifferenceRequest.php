<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\Tea\Model;

class DescribeConfigVersionDifferenceRequest extends Model
{
    /**
     * @description The ID of the change record. You can call the [DescribeConfigHistory](~~452209~~) operation to query the ID of the change record.
     *
     * @example 1
     *
     * @var string
     */
    public $changeId;

    /**
     * @description The cluster ID. You can call the [DescribeDBClusters](~~170879~~) operation to query information about all the clusters that are deployed in a specific region. The information includes the cluster IDs.
     *
     * @example cc-bp1tm8zf130ew****
     *
     * @var string
     */
    public $DBClusterId;
    protected $_name = [
        'changeId'    => 'ChangeId',
        'DBClusterId' => 'DBClusterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->changeId) {
            $res['ChangeId'] = $this->changeId;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeConfigVersionDifferenceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChangeId'])) {
            $model->changeId = $map['ChangeId'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        return $model;
    }
}
