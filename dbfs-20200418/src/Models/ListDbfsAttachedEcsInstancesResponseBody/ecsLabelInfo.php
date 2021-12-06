<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DBFS\V20200418\Models\ListDbfsAttachedEcsInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class ecsLabelInfo extends Model
{
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
    public $label;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'mountPoint'  => 'MountPoint',
        'mountedTime' => 'MountedTime',
        'label'       => 'label',
        'value'       => 'value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mountPoint) {
            $res['MountPoint'] = $this->mountPoint;
        }
        if (null !== $this->mountedTime) {
            $res['MountedTime'] = $this->mountedTime;
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
        if (isset($map['MountPoint'])) {
            $model->mountPoint = $map['MountPoint'];
        }
        if (isset($map['MountedTime'])) {
            $model->mountedTime = $map['MountedTime'];
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
