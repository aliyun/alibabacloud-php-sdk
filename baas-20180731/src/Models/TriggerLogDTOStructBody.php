<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class TriggerLogDTOStructBody extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var PositionStructBody
     */
    public $position;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'createTime' => 'CreateTime',
        'modifyTime' => 'ModifyTime',
        'position'   => 'Position',
        'status'     => 'Status',
        'uuid'       => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->position) {
            $res['Position'] = null !== $this->position ? $this->position->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TriggerLogDTOStructBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['Position'])) {
            $model->position = PositionStructBody::fromMap($map['Position']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
