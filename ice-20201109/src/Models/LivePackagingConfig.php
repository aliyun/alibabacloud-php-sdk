<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\LivePackagingConfig\drmConfig;

class LivePackagingConfig extends Model
{
    /**
     * @var drmConfig
     */
    public $drmConfig;

    /**
     * @var LiveManifestConfig[]
     */
    public $liveManifestConfigs;

    /**
     * @var int
     */
    public $segmentDuration;

    /**
     * @var bool
     */
    public $useAudioRenditionGroups;
    protected $_name = [
        'drmConfig' => 'DrmConfig',
        'liveManifestConfigs' => 'LiveManifestConfigs',
        'segmentDuration' => 'SegmentDuration',
        'useAudioRenditionGroups' => 'UseAudioRenditionGroups',
    ];

    public function validate()
    {
        if (null !== $this->drmConfig) {
            $this->drmConfig->validate();
        }
        if (\is_array($this->liveManifestConfigs)) {
            Model::validateArray($this->liveManifestConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->drmConfig) {
            $res['DrmConfig'] = null !== $this->drmConfig ? $this->drmConfig->toArray($noStream) : $this->drmConfig;
        }

        if (null !== $this->liveManifestConfigs) {
            if (\is_array($this->liveManifestConfigs)) {
                $res['LiveManifestConfigs'] = [];
                $n1 = 0;
                foreach ($this->liveManifestConfigs as $item1) {
                    $res['LiveManifestConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->segmentDuration) {
            $res['SegmentDuration'] = $this->segmentDuration;
        }

        if (null !== $this->useAudioRenditionGroups) {
            $res['UseAudioRenditionGroups'] = $this->useAudioRenditionGroups;
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
        if (isset($map['DrmConfig'])) {
            $model->drmConfig = drmConfig::fromMap($map['DrmConfig']);
        }

        if (isset($map['LiveManifestConfigs'])) {
            if (!empty($map['LiveManifestConfigs'])) {
                $model->liveManifestConfigs = [];
                $n1 = 0;
                foreach ($map['LiveManifestConfigs'] as $item1) {
                    $model->liveManifestConfigs[$n1] = LiveManifestConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SegmentDuration'])) {
            $model->segmentDuration = $map['SegmentDuration'];
        }

        if (isset($map['UseAudioRenditionGroups'])) {
            $model->useAudioRenditionGroups = $map['UseAudioRenditionGroups'];
        }

        return $model;
    }
}
