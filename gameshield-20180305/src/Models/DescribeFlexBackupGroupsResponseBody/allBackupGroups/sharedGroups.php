<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeFlexBackupGroupsResponseBody\allBackupGroups;

use AlibabaCloud\Tea\Model;

class sharedGroups extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $specDesc;
    protected $_name = [
        'status'   => 'Status',
        'groupId'  => 'GroupId',
        'specDesc' => 'SpecDesc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->specDesc) {
            $res['SpecDesc'] = $this->specDesc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sharedGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['SpecDesc'])) {
            $model->specDesc = $map['SpecDesc'];
        }

        return $model;
    }
}
