<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DBFS\V20200418\Models\ListDbfsAttachedEcsInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class ecsLabelInfo extends Model
{
    /**
     * @var string
     */
    public $instanceTypeFamily;

    /**
     * @var string
     */
    public $mountPoint;

    /**
     * @var string
     */
    public $mountedTime;

    /**
     * @var string
     */
    public $OSName;

    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'instanceTypeFamily' => 'InstanceTypeFamily',
        'mountPoint'         => 'MountPoint',
        'mountedTime'        => 'MountedTime',
        'OSName'             => 'OSName',
        'label'              => 'label',
        'value'              => 'value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceTypeFamily) {
            $res['InstanceTypeFamily'] = $this->instanceTypeFamily;
        }
        if (null !== $this->mountPoint) {
            $res['MountPoint'] = $this->mountPoint;
        }
        if (null !== $this->mountedTime) {
            $res['MountedTime'] = $this->mountedTime;
        }
        if (null !== $this->OSName) {
            $res['OSName'] = $this->OSName;
        }
        if (null !== $this->label) {
            $res['label'] = $this->label;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ecsLabelInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceTypeFamily'])) {
            $model->instanceTypeFamily = $map['InstanceTypeFamily'];
        }
        if (isset($map['MountPoint'])) {
            $model->mountPoint = $map['MountPoint'];
        }
        if (isset($map['MountedTime'])) {
            $model->mountedTime = $map['MountedTime'];
        }
        if (isset($map['OSName'])) {
            $model->OSName = $map['OSName'];
        }
        if (isset($map['label'])) {
            $model->label = $map['label'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
