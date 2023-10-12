<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\Module;

use AlibabaCloud\Tea\Model;

class device extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $count;

    /**
     * @example 2020-12-22 10:39:17
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 2
     *
     * @var int
     */
    public $deviceCount;

    /**
     * @example ASW
     *
     * @var string
     */
    public $deviceRole;

    /**
     * @example 2.222
     *
     * @var string
     */
    public $deviceX;

    /**
     * @example 1.222
     *
     * @var string
     */
    public $deviceY;

    /**
     * @example xxxxxx
     *
     * @var string
     */
    public $id;

    /**
     * @example ASW
     *
     * @var string
     */
    public $role;

    /**
     * @example 2020-12-22 10:39:17
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example 2.222
     *
     * @var string
     */
    public $x;

    /**
     * @example 1.222
     *
     * @var string
     */
    public $y;
    protected $_name = [
        'count'       => 'Count',
        'createTime'  => 'CreateTime',
        'deviceCount' => 'DeviceCount',
        'deviceRole'  => 'DeviceRole',
        'deviceX'     => 'DeviceX',
        'deviceY'     => 'DeviceY',
        'id'          => 'Id',
        'role'        => 'Role',
        'updateTime'  => 'UpdateTime',
        'x'           => 'X',
        'y'           => 'Y',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->deviceCount) {
            $res['DeviceCount'] = $this->deviceCount;
        }
        if (null !== $this->deviceRole) {
            $res['DeviceRole'] = $this->deviceRole;
        }
        if (null !== $this->deviceX) {
            $res['DeviceX'] = $this->deviceX;
        }
        if (null !== $this->deviceY) {
            $res['DeviceY'] = $this->deviceY;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->x) {
            $res['X'] = $this->x;
        }
        if (null !== $this->y) {
            $res['Y'] = $this->y;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return device
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DeviceCount'])) {
            $model->deviceCount = $map['DeviceCount'];
        }
        if (isset($map['DeviceRole'])) {
            $model->deviceRole = $map['DeviceRole'];
        }
        if (isset($map['DeviceX'])) {
            $model->deviceX = $map['DeviceX'];
        }
        if (isset($map['DeviceY'])) {
            $model->deviceY = $map['DeviceY'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['X'])) {
            $model->x = $map['X'];
        }
        if (isset($map['Y'])) {
            $model->y = $map['Y'];
        }

        return $model;
    }
}
