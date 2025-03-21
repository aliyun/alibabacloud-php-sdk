<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class NASConfig extends Model
{
    /**
     * @example 100
     *
     * @var int
     */
    public $groupId;

    /**
     * @var NASMountConfig[]
     */
    public $mountPoints;

    /**
     * @example 100
     *
     * @var int
     */
    public $userId;
    protected $_name = [
        'groupId' => 'groupId',
        'mountPoints' => 'mountPoints',
        'userId' => 'userId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['groupId'] = $this->groupId;
        }
        if (null !== $this->mountPoints) {
            $res['mountPoints'] = [];
            if (null !== $this->mountPoints && \is_array($this->mountPoints)) {
                $n = 0;
                foreach ($this->mountPoints as $item) {
                    $res['mountPoints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return NASConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['groupId'])) {
            $model->groupId = $map['groupId'];
        }
        if (isset($map['mountPoints'])) {
            if (!empty($map['mountPoints'])) {
                $model->mountPoints = [];
                $n = 0;
                foreach ($map['mountPoints'] as $item) {
                    $model->mountPoints[$n++] = null !== $item ? NASMountConfig::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
