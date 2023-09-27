<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class EngineVersionMetadataIndex extends Model
{
    /**
     * @example vvr-6.0.1-flink-1.15
     *
     * @var string
     */
    public $defaultEngineVersion;

    /**
     * @var EngineVersionMetadata[]
     */
    public $engineVersionMetadata;
    protected $_name = [
        'defaultEngineVersion'  => 'defaultEngineVersion',
        'engineVersionMetadata' => 'engineVersionMetadata',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultEngineVersion) {
            $res['defaultEngineVersion'] = $this->defaultEngineVersion;
        }
        if (null !== $this->engineVersionMetadata) {
            $res['engineVersionMetadata'] = [];
            if (null !== $this->engineVersionMetadata && \is_array($this->engineVersionMetadata)) {
                $n = 0;
                foreach ($this->engineVersionMetadata as $item) {
                    $res['engineVersionMetadata'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EngineVersionMetadataIndex
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['defaultEngineVersion'])) {
            $model->defaultEngineVersion = $map['defaultEngineVersion'];
        }
        if (isset($map['engineVersionMetadata'])) {
            if (!empty($map['engineVersionMetadata'])) {
                $model->engineVersionMetadata = [];
                $n                            = 0;
                foreach ($map['engineVersionMetadata'] as $item) {
                    $model->engineVersionMetadata[$n++] = null !== $item ? EngineVersionMetadata::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
