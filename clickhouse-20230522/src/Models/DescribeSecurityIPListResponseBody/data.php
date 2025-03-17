<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeSecurityIPListResponseBody;

use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeSecurityIPListResponseBody\data\groupItems;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The cluster ID.
     *
     * @example cc-bp100p4q1g9z3****
     *
     * @var int
     */
    public $DBInstanceID;

    /**
     * @description The cluster name.
     *
     * @example TestCluster
     *
     * @var string
     */
    public $DBInstanceName;

    /**
     * @description The details about the whitelists.
     *
     * @var groupItems[]
     */
    public $groupItems;
    protected $_name = [
        'DBInstanceID' => 'DBInstanceID',
        'DBInstanceName' => 'DBInstanceName',
        'groupItems' => 'GroupItems',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceID) {
            $res['DBInstanceID'] = $this->DBInstanceID;
        }
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }
        if (null !== $this->groupItems) {
            $res['GroupItems'] = [];
            if (null !== $this->groupItems && \is_array($this->groupItems)) {
                $n = 0;
                foreach ($this->groupItems as $item) {
                    $res['GroupItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceID'])) {
            $model->DBInstanceID = $map['DBInstanceID'];
        }
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if (isset($map['GroupItems'])) {
            if (!empty($map['GroupItems'])) {
                $model->groupItems = [];
                $n = 0;
                foreach ($map['GroupItems'] as $item) {
                    $model->groupItems[$n++] = null !== $item ? groupItems::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
