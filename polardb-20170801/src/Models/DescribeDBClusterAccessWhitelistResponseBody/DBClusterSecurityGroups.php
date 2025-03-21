<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAccessWhitelistResponseBody;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAccessWhitelistResponseBody\DBClusterSecurityGroups\DBClusterSecurityGroup;
use AlibabaCloud\Tea\Model;

class DBClusterSecurityGroups extends Model
{
    /**
     * @var DBClusterSecurityGroup[]
     */
    public $DBClusterSecurityGroup;
    protected $_name = [
        'DBClusterSecurityGroup' => 'DBClusterSecurityGroup',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterSecurityGroup) {
            $res['DBClusterSecurityGroup'] = [];
            if (null !== $this->DBClusterSecurityGroup && \is_array($this->DBClusterSecurityGroup)) {
                $n = 0;
                foreach ($this->DBClusterSecurityGroup as $item) {
                    $res['DBClusterSecurityGroup'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBClusterSecurityGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterSecurityGroup'])) {
            if (!empty($map['DBClusterSecurityGroup'])) {
                $model->DBClusterSecurityGroup = [];
                $n = 0;
                foreach ($map['DBClusterSecurityGroup'] as $item) {
                    $model->DBClusterSecurityGroup[$n++] = null !== $item ? DBClusterSecurityGroup::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
