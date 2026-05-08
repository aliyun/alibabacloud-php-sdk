<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\GetContextStoreResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetContextStoreResponseBody\config\innerSource;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetContextStoreResponseBody\config\source;

class config extends Model
{
    /**
     * @var innerSource
     */
    public $innerSource;

    /**
     * @var string[]
     */
    public $metadataField;

    /**
     * @var source
     */
    public $source;
    protected $_name = [
        'innerSource' => 'innerSource',
        'metadataField' => 'metadataField',
        'source' => 'source',
    ];

    public function validate()
    {
        if (null !== $this->innerSource) {
            $this->innerSource->validate();
        }
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
        if (null !== $this->innerSource) {
            $res['innerSource'] = null !== $this->innerSource ? $this->innerSource->toArray($noStream) : $this->innerSource;
        }

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
        if (isset($map['innerSource'])) {
            $model->innerSource = innerSource::fromMap($map['innerSource']);
        }

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
