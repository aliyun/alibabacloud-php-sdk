<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteTraceAppRequest\deleteReason;

class DeleteTraceAppRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var deleteReason
     */
    public $deleteReason;

    /**
     * @var string
     */
    public $pid;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'appId' => 'AppId',
        'deleteReason' => 'DeleteReason',
        'pid' => 'Pid',
        'regionId' => 'RegionId',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->deleteReason) {
            $this->deleteReason->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->deleteReason) {
            $res['DeleteReason'] = null !== $this->deleteReason ? $this->deleteReason->toArray($noStream) : $this->deleteReason;
        }

        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['DeleteReason'])) {
            $model->deleteReason = deleteReason::fromMap($map['DeleteReason']);
        }

        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
