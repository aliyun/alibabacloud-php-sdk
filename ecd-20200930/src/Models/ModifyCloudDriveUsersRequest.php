<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ModifyCloudDriveUsersRequest extends Model
{
    /**
     * @example cn-hangzhou+cds-596198****
     *
     * @var string
     */
    public $cdsId;

    /**
     * @var string[]
     */
    public $endUserId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The status of Cloud Drive Service users.
     *
     * Valid values:
     *
     *   disabled
     *
     * <!-- -->
     *
     *   enabled
     *
     * <!-- -->
     * @example enabled
     *
     * @var string
     */
    public $status;

    /**
     * @description The maximum storage space of a user. Unit: bytes.
     *
     * @example 1024
     *
     * @var int
     */
    public $userMaxSize;
    protected $_name = [
        'cdsId'       => 'CdsId',
        'endUserId'   => 'EndUserId',
        'regionId'    => 'RegionId',
        'status'      => 'Status',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->userMaxSize) {
            $res['UserMaxSize'] = $this->userMaxSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyCloudDriveUsersRequest
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UserMaxSize'])) {
            $model->userMaxSize = $map['UserMaxSize'];
        }

        return $model;
    }
}
