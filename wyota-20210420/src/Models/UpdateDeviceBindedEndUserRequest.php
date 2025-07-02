<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wyota\V20210420\Models\UpdateDeviceBindedEndUserRequest\sourceAdEndUsers;
use AlibabaCloud\SDK\Wyota\V20210420\Models\UpdateDeviceBindedEndUserRequest\targetAdEndUsers;

class UpdateDeviceBindedEndUserRequest extends Model
{
    /**
     * @var string
     */
    public $serialNo;

    /**
     * @var sourceAdEndUsers[]
     */
    public $sourceAdEndUsers;

    /**
     * @var string
     */
    public $sourceEndUserIds;

    /**
     * @var targetAdEndUsers[]
     */
    public $targetAdEndUsers;

    /**
     * @var string
     */
    public $targetEndUserIds;

    /**
     * @var string
     */
    public $userType;
    protected $_name = [
        'serialNo' => 'SerialNo',
        'sourceAdEndUsers' => 'SourceAdEndUsers',
        'sourceEndUserIds' => 'SourceEndUserIds',
        'targetAdEndUsers' => 'TargetAdEndUsers',
        'targetEndUserIds' => 'TargetEndUserIds',
        'userType' => 'UserType',
    ];

    public function validate()
    {
        if (\is_array($this->sourceAdEndUsers)) {
            Model::validateArray($this->sourceAdEndUsers);
        }
        if (\is_array($this->targetAdEndUsers)) {
            Model::validateArray($this->targetAdEndUsers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->serialNo) {
            $res['SerialNo'] = $this->serialNo;
        }

        if (null !== $this->sourceAdEndUsers) {
            if (\is_array($this->sourceAdEndUsers)) {
                $res['SourceAdEndUsers'] = [];
                $n1 = 0;
                foreach ($this->sourceAdEndUsers as $item1) {
                    $res['SourceAdEndUsers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sourceEndUserIds) {
            $res['SourceEndUserIds'] = $this->sourceEndUserIds;
        }

        if (null !== $this->targetAdEndUsers) {
            if (\is_array($this->targetAdEndUsers)) {
                $res['TargetAdEndUsers'] = [];
                $n1 = 0;
                foreach ($this->targetAdEndUsers as $item1) {
                    $res['TargetAdEndUsers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->targetEndUserIds) {
            $res['TargetEndUserIds'] = $this->targetEndUserIds;
        }

        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
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
        if (isset($map['SerialNo'])) {
            $model->serialNo = $map['SerialNo'];
        }

        if (isset($map['SourceAdEndUsers'])) {
            if (!empty($map['SourceAdEndUsers'])) {
                $model->sourceAdEndUsers = [];
                $n1 = 0;
                foreach ($map['SourceAdEndUsers'] as $item1) {
                    $model->sourceAdEndUsers[$n1] = sourceAdEndUsers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SourceEndUserIds'])) {
            $model->sourceEndUserIds = $map['SourceEndUserIds'];
        }

        if (isset($map['TargetAdEndUsers'])) {
            if (!empty($map['TargetAdEndUsers'])) {
                $model->targetAdEndUsers = [];
                $n1 = 0;
                foreach ($map['TargetAdEndUsers'] as $item1) {
                    $model->targetAdEndUsers[$n1] = targetAdEndUsers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TargetEndUserIds'])) {
            $model->targetEndUserIds = $map['TargetEndUserIds'];
        }

        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }

        return $model;
    }
}
