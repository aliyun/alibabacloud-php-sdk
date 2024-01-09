<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models\CreateInstanceRequest;

use AlibabaCloud\SDK\Paidsw\V20220101\Models\CreateInstanceRequest\cloudDisks\status;
use AlibabaCloud\Tea\Model;

class cloudDisks extends Model
{
    /**
     * @example 30Gi
     *
     * @var string
     */
    public $capacity;

    /**
     * @example /mmt/workspace
     *
     * @var string
     */
    public $mountPath;

    /**
     * @example workspace
     *
     * @var string
     */
    public $path;

    /**
     * @var status
     */
    public $status;

    /**
     * @example rootfs
     *
     * @var string
     */
    public $subType;
    protected $_name = [
        'capacity'  => 'Capacity',
        'mountPath' => 'MountPath',
        'path'      => 'Path',
        'status'    => 'Status',
        'subType'   => 'SubType',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['Status'] = null !== $this->status ? $this->status->toMap() : null;
        }
        if (null !== $this->subType) {
            $res['SubType'] = $this->subType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cloudDisks
     */
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
