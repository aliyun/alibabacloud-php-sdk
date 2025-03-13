<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateCloudDriveUsersRequest extends Model
{
    /**
     * @description The ID of the cloud disk.
     *
     * This parameter is required.
     * @example cn-hangzhou+cds-352282****
     *
     * @var string
     */
    public $cdsId;

    /**
     * @description The IDs of the end users.
     *
     * This parameter is required.
     * @var string[]
     */
    public $endUserId;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The maximum storage space of an end user. Unit: bytes.
     *
     * This parameter is required.
     * @example 1024
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cdsId) {
            $res['CdsId'] = $this->cdsId;
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->userMaxSize) {
            $res['UserMaxSize'] = $this->userMaxSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCloudDriveUsersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CdsId'])) {
            $model->cdsId = $map['CdsId'];
        }
        if (isset($map['EndUserId'])) {
            if (!empty($map['EndUserId'])) {
                $model->endUserId = $map['EndUserId'];
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
