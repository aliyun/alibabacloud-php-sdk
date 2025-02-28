<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class EngineVersionMetadataIndex extends Model
{
    /**
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
        if (\is_array($this->engineVersionMetadata)) {
            Model::validateArray($this->engineVersionMetadata);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultEngineVersion) {
            $res['defaultEngineVersion'] = $this->defaultEngineVersion;
        }

        if (null !== $this->engineVersionMetadata) {
            if (\is_array($this->engineVersionMetadata)) {
                $res['engineVersionMetadata'] = [];
                $n1                           = 0;
                foreach ($this->engineVersionMetadata as $item1) {
                    $res['engineVersionMetadata'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['defaultEngineVersion'])) {
            $model->defaultEngineVersion = $map['defaultEngineVersion'];
        }

        if (isset($map['engineVersionMetadata'])) {
            if (!empty($map['engineVersionMetadata'])) {
                $model->engineVersionMetadata = [];
                $n1                           = 0;
                foreach ($map['engineVersionMetadata'] as $item1) {
                    $model->engineVersionMetadata[$n1++] = EngineVersionMetadata::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
