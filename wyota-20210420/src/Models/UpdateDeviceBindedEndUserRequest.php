<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\SDK\Wyota\V20210420\Models\UpdateDeviceBindedEndUserRequest\sourceAdEndUsers;
use AlibabaCloud\SDK\Wyota\V20210420\Models\UpdateDeviceBindedEndUserRequest\targetAdEndUsers;
use AlibabaCloud\Tea\Model;

class UpdateDeviceBindedEndUserRequest extends Model
{
    /**
     * @description This parameter is required.
     *
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
        'serialNo'         => 'SerialNo',
        'sourceAdEndUsers' => 'SourceAdEndUsers',
        'sourceEndUserIds' => 'SourceEndUserIds',
        'targetAdEndUsers' => 'TargetAdEndUsers',
        'targetEndUserIds' => 'TargetEndUserIds',
        'userType'         => 'UserType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serialNo) {
            $res['SerialNo'] = $this->serialNo;
        }
        if (null !== $this->sourceAdEndUsers) {
            $res['SourceAdEndUsers'] = [];
            if (null !== $this->sourceAdEndUsers && \is_array($this->sourceAdEndUsers)) {
                $n = 0;
                foreach ($this->sourceAdEndUsers as $item) {
                    $res['SourceAdEndUsers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sourceEndUserIds) {
            $res['SourceEndUserIds'] = $this->sourceEndUserIds;
        }
        if (null !== $this->targetAdEndUsers) {
            $res['TargetAdEndUsers'] = [];
            if (null !== $this->targetAdEndUsers && \is_array($this->targetAdEndUsers)) {
                $n = 0;
                foreach ($this->targetAdEndUsers as $item) {
                    $res['TargetAdEndUsers'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return UpdateDeviceBindedEndUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SerialNo'])) {
            $model->serialNo = $map['SerialNo'];
        }
        if (isset($map['SourceAdEndUsers'])) {
            if (!empty($map['SourceAdEndUsers'])) {
                $model->sourceAdEndUsers = [];
                $n                       = 0;
                foreach ($map['SourceAdEndUsers'] as $item) {
                    $model->sourceAdEndUsers[$n++] = null !== $item ? sourceAdEndUsers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SourceEndUserIds'])) {
            $model->sourceEndUserIds = $map['SourceEndUserIds'];
        }
        if (isset($map['TargetAdEndUsers'])) {
            if (!empty($map['TargetAdEndUsers'])) {
                $model->targetAdEndUsers = [];
                $n                       = 0;
                foreach ($map['TargetAdEndUsers'] as $item) {
                    $model->targetAdEndUsers[$n++] = null !== $item ? targetAdEndUsers::fromMap($item) : $item;
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
