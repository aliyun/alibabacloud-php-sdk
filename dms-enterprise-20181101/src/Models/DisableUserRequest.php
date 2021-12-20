<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class DisableUserRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $tid;

    /**
     * @var string
     */
    public $uid;
    protected $_name = [
        'regionId' => 'RegionId',
        'tid'      => 'Tid',
        'uid'      => 'Uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DisableUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
