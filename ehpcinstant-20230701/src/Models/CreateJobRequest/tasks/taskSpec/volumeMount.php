<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreateJobRequest\tasks\taskSpec;

use AlibabaCloud\Dara\Model;

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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
