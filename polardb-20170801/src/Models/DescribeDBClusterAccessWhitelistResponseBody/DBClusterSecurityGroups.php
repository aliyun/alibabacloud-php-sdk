<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAccessWhitelistResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAccessWhitelistResponseBody\DBClusterSecurityGroups\DBClusterSecurityGroup;

class DBClusterSecurityGroups extends Model
{
    /**
     * @var DBClusterSecurityGroup[]
     */
    public $DBClusterSecurityGroup;
    protected $_name = [
        'DBClusterSecurityGroup' => 'DBClusterSecurityGroup',
    ];

    public function validate()
    {
        if (\is_array($this->DBClusterSecurityGroup)) {
            Model::validateArray($this->DBClusterSecurityGroup);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBClusterSecurityGroup) {
            if (\is_array($this->DBClusterSecurityGroup)) {
                $res['DBClusterSecurityGroup'] = [];
                $n1 = 0;
                foreach ($this->DBClusterSecurityGroup as $item1) {
                    $res['DBClusterSecurityGroup'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['DBClusterSecurityGroup'])) {
            if (!empty($map['DBClusterSecurityGroup'])) {
                $model->DBClusterSecurityGroup = [];
                $n1 = 0;
                foreach ($map['DBClusterSecurityGroup'] as $item1) {
                    $model->DBClusterSecurityGroup[$n1++] = DBClusterSecurityGroup::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
