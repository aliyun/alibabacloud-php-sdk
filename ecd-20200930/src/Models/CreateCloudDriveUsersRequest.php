<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class CreateCloudDriveUsersRequest extends Model
{
    /**
     * @var string
     */
    public $cdsId;
    /**
     * @var string[]
     */
    public $endUserId;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var int
     */
    public $userMaxSize;
    protected $_name = [
        'cdsId'       => 'CdsId',
        'endUserId'   => 'EndUserId',
        'regionId'    => 'RegionId',
        'userMaxSize' => 'UserMaxSize',
    ];

    public function validate()
    {
        if (\is_array($this->endUserId)) {
            Model::validateArray($this->endUserId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cdsId) {
            $res['CdsId'] = $this->cdsId;
        }

        if (null !== $this->endUserId) {
            if (\is_array($this->endUserId)) {
                $res['EndUserId'] = [];
                $n1               = 0;
                foreach ($this->endUserId as $item1) {
                    $res['EndUserId'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->userMaxSize) {
            $res['UserMaxSize'] = $this->userMaxSize;
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
        if (isset($map['CdsId'])) {
            $model->cdsId = $map['CdsId'];
        }

        if (isset($map['EndUserId'])) {
            if (!empty($map['EndUserId'])) {
                $model->endUserId = [];
                $n1               = 0;
                foreach ($map['EndUserId'] as $item1) {
                    $model->endUserId[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['UserMaxSize'])) {
            $model->userMaxSize = $map['UserMaxSize'];
        }

        return $model;
    }
}
