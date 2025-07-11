<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreateJobRequest\tasks\taskSpec;

use AlibabaCloud\Tea\Model;

class volumeMount extends Model
{
    /**
     * @example {"server":"xxxxx-xxxxx.cn-heyuan.nas.aliyuncs.com","vers":"3","path":"/data","options":"nolock,tcp,noresvport"}
     *
     * @var string
     */
    public $mountOptions;

    /**
     * @example /mnt
     *
     * @var string
     */
    public $mountPath;

    /**
     * @var bool
     */
    public $readOnly;

    /**
     * @example alicloud/nas
     *
     * @var string
     */
    public $volumeDriver;
    protected $_name = [
        'mountOptions' => 'MountOptions',
        'mountPath' => 'MountPath',
        'readOnly' => 'ReadOnly',
        'volumeDriver' => 'VolumeDriver',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->mountOptions) {
            $res['MountOptions'] = $this->mountOptions;
        }
        if (null !== $this->mountPath) {
            $res['MountPath'] = $this->mountPath;
        }
        if (null !== $this->readOnly) {
            $res['ReadOnly'] = $this->readOnly;
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
        if (isset($map['ReadOnly'])) {
            $model->readOnly = $map['ReadOnly'];
        }
        if (isset($map['VolumeDriver'])) {
            $model->volumeDriver = $map['VolumeDriver'];
        }

        return $model;
    }
}
