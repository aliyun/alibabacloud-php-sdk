<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sandbox\V20260820\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\UpdateVolumeInput\agenticFSVolumeConfig;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\UpdateVolumeInput\mountConfig;

class UpdateVolumeInput extends Model
{
    /**
     * @var AgenticBucketVolumeConfig
     */
    public $agenticBucketVolumeConfig;

    /**
     * @var agenticFSVolumeConfig
     */
    public $agenticFSVolumeConfig;

    /**
     * @var JuiceFSVolumeConfig
     */
    public $juiceFSVolumeConfig;

    /**
     * @var mountConfig
     */
    public $mountConfig;

    /**
     * @var OSSVolumeConfig
     */
    public $ossVolumeConfig;
    protected $_name = [
        'agenticBucketVolumeConfig' => 'agenticBucketVolumeConfig',
        'agenticFSVolumeConfig' => 'agenticFSVolumeConfig',
        'juiceFSVolumeConfig' => 'juiceFSVolumeConfig',
        'mountConfig' => 'mountConfig',
        'ossVolumeConfig' => 'ossVolumeConfig',
    ];

    public function validate()
    {
        if (null !== $this->agenticBucketVolumeConfig) {
            $this->agenticBucketVolumeConfig->validate();
        }
        if (null !== $this->agenticFSVolumeConfig) {
            $this->agenticFSVolumeConfig->validate();
        }
        if (null !== $this->juiceFSVolumeConfig) {
            $this->juiceFSVolumeConfig->validate();
        }
        if (null !== $this->mountConfig) {
            $this->mountConfig->validate();
        }
        if (null !== $this->ossVolumeConfig) {
            $this->ossVolumeConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agenticBucketVolumeConfig) {
            $res['agenticBucketVolumeConfig'] = null !== $this->agenticBucketVolumeConfig ? $this->agenticBucketVolumeConfig->toArray($noStream) : $this->agenticBucketVolumeConfig;
        }

        if (null !== $this->agenticFSVolumeConfig) {
            $res['agenticFSVolumeConfig'] = null !== $this->agenticFSVolumeConfig ? $this->agenticFSVolumeConfig->toArray($noStream) : $this->agenticFSVolumeConfig;
        }

        if (null !== $this->juiceFSVolumeConfig) {
            $res['juiceFSVolumeConfig'] = null !== $this->juiceFSVolumeConfig ? $this->juiceFSVolumeConfig->toArray($noStream) : $this->juiceFSVolumeConfig;
        }

        if (null !== $this->mountConfig) {
            $res['mountConfig'] = null !== $this->mountConfig ? $this->mountConfig->toArray($noStream) : $this->mountConfig;
        }

        if (null !== $this->ossVolumeConfig) {
            $res['ossVolumeConfig'] = null !== $this->ossVolumeConfig ? $this->ossVolumeConfig->toArray($noStream) : $this->ossVolumeConfig;
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
        if (isset($map['agenticBucketVolumeConfig'])) {
            $model->agenticBucketVolumeConfig = AgenticBucketVolumeConfig::fromMap($map['agenticBucketVolumeConfig']);
        }

        if (isset($map['agenticFSVolumeConfig'])) {
            $model->agenticFSVolumeConfig = agenticFSVolumeConfig::fromMap($map['agenticFSVolumeConfig']);
        }

        if (isset($map['juiceFSVolumeConfig'])) {
            $model->juiceFSVolumeConfig = JuiceFSVolumeConfig::fromMap($map['juiceFSVolumeConfig']);
        }

        if (isset($map['mountConfig'])) {
            $model->mountConfig = mountConfig::fromMap($map['mountConfig']);
        }

        if (isset($map['ossVolumeConfig'])) {
            $model->ossVolumeConfig = OSSVolumeConfig::fromMap($map['ossVolumeConfig']);
        }

        return $model;
    }
}
