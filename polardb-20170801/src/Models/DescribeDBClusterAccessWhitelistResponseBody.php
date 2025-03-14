<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAccessWhitelistResponseBody\DBClusterSecurityGroups;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAccessWhitelistResponseBody\items;
use AlibabaCloud\Tea\Model;

class DescribeDBClusterAccessWhitelistResponseBody extends Model
{
    /**
     * @description The Elastic Compute Service (ECS) security groups that are associated with the cluster.
     *
     * @var DBClusterSecurityGroups
     */
    public $DBClusterSecurityGroups;

    /**
     * @description The details about the cluster.
     *
     * @var items
     */
    public $items;

    /**
     * @description The request ID.
     *
     * @example 559E91A2-CDA3-4E9F-808B-29D738******
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DBClusterSecurityGroups' => 'DBClusterSecurityGroups',
        'items' => 'Items',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterSecurityGroups) {
            $res['DBClusterSecurityGroups'] = null !== $this->DBClusterSecurityGroups ? $this->DBClusterSecurityGroups->toMap() : null;
        }
        if (null !== $this->items) {
            $res['Items'] = null !== $this->items ? $this->items->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBClusterAccessWhitelistResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterSecurityGroups'])) {
            $model->DBClusterSecurityGroups = DBClusterSecurityGroups::fromMap($map['DBClusterSecurityGroups']);
        }
        if (isset($map['Items'])) {
            $model->items = items::fromMap($map['Items']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
