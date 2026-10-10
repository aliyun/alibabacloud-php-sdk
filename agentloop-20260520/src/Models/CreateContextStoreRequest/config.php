<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models\CreateContextStoreRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\CreateContextStoreRequest\config\audit;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\CreateContextStoreRequest\config\extractionPolicy;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\CreateContextStoreRequest\config\scopePolicy;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\CreateContextStoreRequest\config\source;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\CreateContextStoreRequest\config\storagePolicy;

class config extends Model
{
    /**
     * @var audit
     */
    public $audit;

    /**
     * @var extractionPolicy
     */
    public $extractionPolicy;

    /**
     * @var string[]
     */
    public $metadataField;

    /**
     * @var string
     */
    public $miningInterval;

    /**
     * @var scopePolicy
     */
    public $scopePolicy;

    /**
     * @var string[]
     */
    public $serviceNames;

    /**
     * @var source
     */
    public $source;

    /**
     * @var storagePolicy
     */
    public $storagePolicy;
    protected $_name = [
        'audit' => 'audit',
        'extractionPolicy' => 'extractionPolicy',
        'metadataField' => 'metadataField',
        'miningInterval' => 'miningInterval',
        'scopePolicy' => 'scopePolicy',
        'serviceNames' => 'serviceNames',
        'source' => 'source',
        'storagePolicy' => 'storagePolicy',
    ];

    public function validate()
    {
        if (null !== $this->audit) {
            $this->audit->validate();
        }
        if (null !== $this->extractionPolicy) {
            $this->extractionPolicy->validate();
        }
        if (\is_array($this->metadataField)) {
            Model::validateArray($this->metadataField);
        }
        if (null !== $this->scopePolicy) {
            $this->scopePolicy->validate();
        }
        if (\is_array($this->serviceNames)) {
            Model::validateArray($this->serviceNames);
        }
        if (null !== $this->source) {
            $this->source->validate();
        }
        if (null !== $this->storagePolicy) {
            $this->storagePolicy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audit) {
            $res['audit'] = null !== $this->audit ? $this->audit->toArray($noStream) : $this->audit;
        }

        if (null !== $this->extractionPolicy) {
            $res['extractionPolicy'] = null !== $this->extractionPolicy ? $this->extractionPolicy->toArray($noStream) : $this->extractionPolicy;
        }

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

        if (null !== $this->scopePolicy) {
            $res['scopePolicy'] = null !== $this->scopePolicy ? $this->scopePolicy->toArray($noStream) : $this->scopePolicy;
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

        if (null !== $this->storagePolicy) {
            $res['storagePolicy'] = null !== $this->storagePolicy ? $this->storagePolicy->toArray($noStream) : $this->storagePolicy;
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
        if (isset($map['audit'])) {
            $model->audit = audit::fromMap($map['audit']);
        }

        if (isset($map['extractionPolicy'])) {
            $model->extractionPolicy = extractionPolicy::fromMap($map['extractionPolicy']);
        }

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

        if (isset($map['scopePolicy'])) {
            $model->scopePolicy = scopePolicy::fromMap($map['scopePolicy']);
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

        if (isset($map['storagePolicy'])) {
            $model->storagePolicy = storagePolicy::fromMap($map['storagePolicy']);
        }

        return $model;
    }
}
