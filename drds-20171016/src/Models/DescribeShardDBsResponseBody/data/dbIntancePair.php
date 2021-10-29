<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20171016\Models\DescribeShardDBsResponseBody\data;

use AlibabaCloud\Tea\Model;

class dbIntancePair extends Model
{
    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $subDbName;
    protected $_name = [
        'groupName'    => 'GroupName',
        'instanceName' => 'InstanceName',
        'subDbName'    => 'SubDbName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->subDbName) {
            $res['SubDbName'] = $this->subDbName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dbIntancePair
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['SubDbName'])) {
            $model->subDbName = $map['SubDbName'];
        }

        return $model;
    }
}
