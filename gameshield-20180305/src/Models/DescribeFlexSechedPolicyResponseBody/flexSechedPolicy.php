<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeFlexSechedPolicyResponseBody;

use AlibabaCloud\Tea\Model;

class flexSechedPolicy extends Model
{
    /**
     * @var int
     */
    public $greyGroupPolicy;

    /**
     * @var int
     */
    public $groupInnerPolicy;

    /**
     * @var int
     */
    public $backupGroupPolicy;
    protected $_name = [
        'greyGroupPolicy'   => 'GreyGroupPolicy',
        'groupInnerPolicy'  => 'GroupInnerPolicy',
        'backupGroupPolicy' => 'BackupGroupPolicy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->greyGroupPolicy) {
            $res['GreyGroupPolicy'] = $this->greyGroupPolicy;
        }
        if (null !== $this->groupInnerPolicy) {
            $res['GroupInnerPolicy'] = $this->groupInnerPolicy;
        }
        if (null !== $this->backupGroupPolicy) {
            $res['BackupGroupPolicy'] = $this->backupGroupPolicy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flexSechedPolicy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GreyGroupPolicy'])) {
            $model->greyGroupPolicy = $map['GreyGroupPolicy'];
        }
        if (isset($map['GroupInnerPolicy'])) {
            $model->groupInnerPolicy = $map['GroupInnerPolicy'];
        }
        if (isset($map['BackupGroupPolicy'])) {
            $model->backupGroupPolicy = $map['BackupGroupPolicy'];
        }

        return $model;
    }
}
