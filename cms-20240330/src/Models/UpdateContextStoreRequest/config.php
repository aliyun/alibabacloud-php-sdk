<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\UpdateContextStoreRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateContextStoreRequest\config\source;

class config extends Model
{
    /**
     * @var string[]
     */
    public $metadataField;

    /**
     * @var source
     */
    public $source;
    protected $_name = [
        'metadataField' => 'metadataField',
        'source' => 'source',
    ];

    public function validate()
    {
        if (\is_array($this->metadataField)) {
            Model::validateArray($this->metadataField);
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

        if (isset($map['source'])) {
            $model->source = source::fromMap($map['source']);
        }

        return $model;
    }
}
