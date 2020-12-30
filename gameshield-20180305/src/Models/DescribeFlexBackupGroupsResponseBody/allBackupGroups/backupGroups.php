<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeFlexBackupGroupsResponseBody\allBackupGroups;

use AlibabaCloud\Tea\Model;

class backupGroups extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $groupId;
    protected $_name = [
        'status'  => 'Status',
        'groupId' => 'GroupId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backupGroups
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

        return $model;
    }
}
