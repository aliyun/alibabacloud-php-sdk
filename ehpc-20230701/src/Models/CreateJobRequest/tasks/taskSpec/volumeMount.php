<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20230701\Models\CreateJobRequest\tasks\taskSpec;

use AlibabaCloud\Tea\Model;

class volumeMount extends Model
{
    /**
     * @var string
     */
    public $mountOptions;

    /**
     * @var string
     */
    public $mountPath;

    /**
     * @var string
     */
    public $volumeDriver;
    protected $_name = [
        'mountOptions' => 'MountOptions',
        'mountPath'    => 'MountPath',
        'volumeDriver' => 'VolumeDriver',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mountOptions) {
            $res['MountOptions'] = $this->mountOptions;
        }
        if (null !== $this->mountPath) {
            $res['MountPath'] = $this->mountPath;
        }
        if (null !== $this->volumeDriver) {
            $res['VolumeDriver'] = $this->volumeDriver;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return volumeMount
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MountOptions'])) {
            $model->mountOptions = $map['MountOptions'];
        }
        if (isset($map['MountPath'])) {
            $model->mountPath = $map['MountPath'];
        }
        if (isset($map['VolumeDriver'])) {
            $model->volumeDriver = $map['VolumeDriver'];
        }

        return $model;
    }
}
