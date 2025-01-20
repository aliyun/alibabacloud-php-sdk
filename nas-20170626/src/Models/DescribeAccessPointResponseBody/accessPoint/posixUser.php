<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAccessPointResponseBody\accessPoint;

use AlibabaCloud\Dara\Model;

class posixUser extends Model
{
    /**
     * @var int
     */
    public $posixGroupId;
    /**
     * @var int[]
     */
    public $posixSecondaryGroupIds;
    /**
     * @var int
     */
    public $posixUserId;
    protected $_name = [
        'posixGroupId'           => 'PosixGroupId',
        'posixSecondaryGroupIds' => 'PosixSecondaryGroupIds',
        'posixUserId'            => 'PosixUserId',
    ];

    public function validate()
    {
        if (\is_array($this->posixSecondaryGroupIds)) {
            Model::validateArray($this->posixSecondaryGroupIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->posixGroupId) {
            $res['PosixGroupId'] = $this->posixGroupId;
        }

        if (null !== $this->posixSecondaryGroupIds) {
            if (\is_array($this->posixSecondaryGroupIds)) {
                $res['PosixSecondaryGroupIds'] = [];
                $n1                            = 0;
                foreach ($this->posixSecondaryGroupIds as $item1) {
                    $res['PosixSecondaryGroupIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->posixUserId) {
            $res['PosixUserId'] = $this->posixUserId;
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
        if (isset($map['PosixGroupId'])) {
            $model->posixGroupId = $map['PosixGroupId'];
        }

        if (isset($map['PosixSecondaryGroupIds'])) {
            if (!empty($map['PosixSecondaryGroupIds'])) {
                $model->posixSecondaryGroupIds = [];
                $n1                            = 0;
                foreach ($map['PosixSecondaryGroupIds'] as $item1) {
                    $model->posixSecondaryGroupIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['PosixUserId'])) {
            $model->posixUserId = $map['PosixUserId'];
        }

        return $model;
    }
}
