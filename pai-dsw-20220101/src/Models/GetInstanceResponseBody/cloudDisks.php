<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models\GetInstanceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\GetInstanceResponseBody\cloudDisks\status;

class cloudDisks extends Model
{
    /**
     * @var string
     */
    public $capacity;

    /**
     * @var string
     */
    public $mountPath;

    /**
     * @var string
     */
    public $path;

    /**
     * @var status
     */
    public $status;

    /**
     * @var string
     */
    public $subType;
    protected $_name = [
        'capacity' => 'Capacity',
        'mountPath' => 'MountPath',
        'path' => 'Path',
        'status' => 'Status',
        'subType' => 'SubType',
    ];

    public function validate()
    {
        if (null !== $this->status) {
            $this->status->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }

        if (null !== $this->mountPath) {
            $res['MountPath'] = $this->mountPath;
        }

        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        if (null !== $this->status) {
            $res['Status'] = null !== $this->status ? $this->status->toArray($noStream) : $this->status;
        }

        if (null !== $this->subType) {
            $res['SubType'] = $this->subType;
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
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }

        if (isset($map['MountPath'])) {
            $model->mountPath = $map['MountPath'];
        }

        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        if (isset($map['Status'])) {
            $model->status = status::fromMap($map['Status']);
        }

        if (isset($map['SubType'])) {
            $model->subType = $map['SubType'];
        }

        return $model;
    }
}
