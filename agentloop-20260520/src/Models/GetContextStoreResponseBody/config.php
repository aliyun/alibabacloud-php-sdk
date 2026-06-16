<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetContextStoreResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetContextStoreResponseBody\config\source;

class config extends Model
{
    /**
     * @var string[]
     */
    public $metadataField;

    /**
     * @var string
     */
    public $miningInterval;

    /**
     * @var string[]
     */
    public $serviceNames;

    /**
     * @var source
     */
    public $source;
    protected $_name = [
        'metadataField' => 'metadataField',
        'miningInterval' => 'miningInterval',
        'serviceNames' => 'serviceNames',
        'source' => 'source',
    ];

    public function validate()
    {
        if (\is_array($this->metadataField)) {
            Model::validateArray($this->metadataField);
        }
        if (\is_array($this->serviceNames)) {
            Model::validateArray($this->serviceNames);
        }
        if (null !== $this->source) {
            $this->source->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->metadataField) {
            if (\is_array($this->metadataField)) {
                $res['metadataField'] = [];
                foreach ($this->metadataField as $key1 => $value1) {
                    $res['metadataField'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->miningInterval) {
            $res['miningInterval'] = $this->miningInterval;
        }

        if (null !== $this->serviceNames) {
            if (\is_array($this->serviceNames)) {
                $res['serviceNames'] = [];
                $n1 = 0;
                foreach ($this->serviceNames as $item1) {
                    $res['serviceNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->source) {
            $res['source'] = null !== $this->source ? $this->source->toArray($noStream) : $this->source;
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
        if (isset($map['metadataField'])) {
            if (!empty($map['metadataField'])) {
                $model->metadataField = [];
                foreach ($map['metadataField'] as $key1 => $value1) {
                    $model->metadataField[$key1] = $value1;
                }
            }
        }

        if (isset($map['miningInterval'])) {
            $model->miningInterval = $map['miningInterval'];
        }

        if (isset($map['serviceNames'])) {
            if (!empty($map['serviceNames'])) {
                $model->serviceNames = [];
                $n1 = 0;
                foreach ($map['serviceNames'] as $item1) {
                    $model->serviceNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['source'])) {
            $model->source = source::fromMap($map['source']);
        }

        return $model;
    }
}
