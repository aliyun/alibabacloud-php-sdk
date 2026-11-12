<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAccessWhitelistResponseBody\DBClusterSecurityGroups;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAccessWhitelistResponseBody\items;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAccessWhitelistResponseBody\projectItems;

class DescribeDBClusterAccessWhitelistResponseBody extends Model
{
    /**
     * @var DBClusterSecurityGroups
     */
    public $DBClusterSecurityGroups;

    /**
     * @var items
     */
    public $items;

    /**
     * @var projectItems
     */
    public $projectItems;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DBClusterSecurityGroups' => 'DBClusterSecurityGroups',
        'items' => 'Items',
        'projectItems' => 'ProjectItems',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->DBClusterSecurityGroups) {
            $this->DBClusterSecurityGroups->validate();
        }
        if (null !== $this->items) {
            $this->items->validate();
        }
        if (null !== $this->projectItems) {
            $this->projectItems->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBClusterSecurityGroups) {
            $res['DBClusterSecurityGroups'] = null !== $this->DBClusterSecurityGroups ? $this->DBClusterSecurityGroups->toArray($noStream) : $this->DBClusterSecurityGroups;
        }

        if (null !== $this->items) {
            $res['Items'] = null !== $this->items ? $this->items->toArray($noStream) : $this->items;
        }

        if (null !== $this->projectItems) {
            $res['ProjectItems'] = null !== $this->projectItems ? $this->projectItems->toArray($noStream) : $this->projectItems;
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
        if (isset($map['DBClusterSecurityGroups'])) {
            $model->DBClusterSecurityGroups = DBClusterSecurityGroups::fromMap($map['DBClusterSecurityGroups']);
        }

        if (isset($map['Items'])) {
            $model->items = items::fromMap($map['Items']);
        }

        if (isset($map['ProjectItems'])) {
            $model->projectItems = projectItems::fromMap($map['ProjectItems']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
