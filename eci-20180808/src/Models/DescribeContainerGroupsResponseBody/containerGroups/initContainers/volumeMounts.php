<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponseBody\containerGroups\initContainers;

use AlibabaCloud\Dara\Model;

class volumeMounts extends Model
{
    /**
     * @var string
     */
    public $mountPath;

    /**
     * @var string
     */
    public $mountPropagation;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $readOnly;
    protected $_name = [
        'mountPath' => 'MountPath',
        'mountPropagation' => 'MountPropagation',
        'name' => 'Name',
        'readOnly' => 'ReadOnly',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mountPath) {
            $res['MountPath'] = $this->mountPath;
        }

        if (null !== $this->mountPropagation) {
            $res['MountPropagation'] = $this->mountPropagation;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->readOnly) {
            $res['ReadOnly'] = $this->readOnly;
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
        if (isset($map['MountPath'])) {
            $model->mountPath = $map['MountPath'];
        }

        if (isset($map['MountPropagation'])) {
            $model->mountPropagation = $map['MountPropagation'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ReadOnly'])) {
            $model->readOnly = $map['ReadOnly'];
        }

        return $model;
    }
}
