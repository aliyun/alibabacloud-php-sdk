<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class CancelCoordinationForMonitoringRequest extends Model
{
    /**
     * @var string[]
     */
    public $coIds;
    /**
     * @var string
     */
    public $endUserId;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $userType;
    protected $_name = [
        'coIds'     => 'CoIds',
        'endUserId' => 'EndUserId',
        'regionId'  => 'RegionId',
        'userType'  => 'UserType',
    ];

    public function validate()
    {
        if (\is_array($this->coIds)) {
            Model::validateArray($this->coIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->coIds) {
            if (\is_array($this->coIds)) {
                $res['CoIds'] = [];
                $n1           = 0;
                foreach ($this->coIds as $item1) {
                    $res['CoIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['CoIds'])) {
            if (!empty($map['CoIds'])) {
                $model->coIds = [];
                $n1           = 0;
                foreach ($map['CoIds'] as $item1) {
                    $model->coIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }

        return $model;
    }
}
