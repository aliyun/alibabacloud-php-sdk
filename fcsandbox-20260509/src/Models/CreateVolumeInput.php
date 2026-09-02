<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCSandbox\V20260509\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\FCSandbox\V20260509\Models\CreateVolumeInput\mountConfig;

class CreateVolumeInput extends Model
{
    /**
     * @var AgenticFSVolumeConfig
     */
    public $agenticFSVolumeConfig;

    /**
     * @var mountConfig
     */
    public $mountConfig;

    /**
     * @var OSSVolumeConfig
     */
    public $ossVolumeConfig;

    /**
     * @var string
     */
    public $teamID;

    /**
     * @var string
     */
    public $volumeName;
    protected $_name = [
        'agenticFSVolumeConfig' => 'agenticFSVolumeConfig',
        'mountConfig' => 'mountConfig',
        'ossVolumeConfig' => 'ossVolumeConfig',
        'teamID' => 'teamID',
        'volumeName' => 'volumeName',
    ];

    public function validate()
    {
        if (null !== $this->agenticFSVolumeConfig) {
            $this->agenticFSVolumeConfig->validate();
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
        if (null !== $this->agenticFSVolumeConfig) {
            $res['agenticFSVolumeConfig'] = null !== $this->agenticFSVolumeConfig ? $this->agenticFSVolumeConfig->toArray($noStream) : $this->agenticFSVolumeConfig;
        }

        if (null !== $this->mountConfig) {
            $res['mountConfig'] = null !== $this->mountConfig ? $this->mountConfig->toArray($noStream) : $this->mountConfig;
        }

        if (null !== $this->ossVolumeConfig) {
            $res['ossVolumeConfig'] = null !== $this->ossVolumeConfig ? $this->ossVolumeConfig->toArray($noStream) : $this->ossVolumeConfig;
        }

        if (null !== $this->teamID) {
            $res['teamID'] = $this->teamID;
        }

        if (null !== $this->volumeName) {
            $res['volumeName'] = $this->volumeName;
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
        if (isset($map['agenticFSVolumeConfig'])) {
            $model->agenticFSVolumeConfig = AgenticFSVolumeConfig::fromMap($map['agenticFSVolumeConfig']);
        }

        if (isset($map['mountConfig'])) {
            $model->mountConfig = mountConfig::fromMap($map['mountConfig']);
        }

        if (isset($map['ossVolumeConfig'])) {
            $model->ossVolumeConfig = OSSVolumeConfig::fromMap($map['ossVolumeConfig']);
        }

        if (isset($map['teamID'])) {
            $model->teamID = $map['teamID'];
        }

        if (isset($map['volumeName'])) {
            $model->volumeName = $map['volumeName'];
        }

        return $model;
    }
}
