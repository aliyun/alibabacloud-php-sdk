<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetContextStoreResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetContextStoreResponseBody\config\audit;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetContextStoreResponseBody\config\extractionPolicy;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetContextStoreResponseBody\config\innerSource;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetContextStoreResponseBody\config\observability;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetContextStoreResponseBody\config\outputDataset;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetContextStoreResponseBody\config\scopePolicy;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetContextStoreResponseBody\config\source;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetContextStoreResponseBody\config\sourceStatus;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetContextStoreResponseBody\config\storagePolicy;

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
     * @var innerSource
     */
    public $innerSource;

    /**
     * @var string[]
     */
    public $metadataField;

    /**
     * @var string
     */
    public $miningInterval;

    /**
     * @var observability
     */
    public $observability;

    /**
     * @var outputDataset
     */
    public $outputDataset;

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
     * @var sourceStatus
     */
    public $sourceStatus;

    /**
     * @var storagePolicy
     */
    public $storagePolicy;

    /**
     * @var int
     */
    public $strategyVersion;
    protected $_name = [
        'audit' => 'audit',
        'extractionPolicy' => 'extractionPolicy',
        'innerSource' => 'innerSource',
        'metadataField' => 'metadataField',
        'miningInterval' => 'miningInterval',
        'observability' => 'observability',
        'outputDataset' => 'outputDataset',
        'scopePolicy' => 'scopePolicy',
        'serviceNames' => 'serviceNames',
        'source' => 'source',
        'sourceStatus' => 'sourceStatus',
        'storagePolicy' => 'storagePolicy',
        'strategyVersion' => 'strategyVersion',
    ];

    public function validate()
    {
        if (null !== $this->audit) {
            $this->audit->validate();
        }
        if (null !== $this->extractionPolicy) {
            $this->extractionPolicy->validate();
        }
        if (null !== $this->innerSource) {
            $this->innerSource->validate();
        }
        if (\is_array($this->metadataField)) {
            Model::validateArray($this->metadataField);
        }
        if (null !== $this->observability) {
            $this->observability->validate();
        }
        if (null !== $this->outputDataset) {
            $this->outputDataset->validate();
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
        if (null !== $this->sourceStatus) {
            $this->sourceStatus->validate();
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

        if (null !== $this->miningInterval) {
            $res['miningInterval'] = $this->miningInterval;
        }

        if (null !== $this->observability) {
            $res['observability'] = null !== $this->observability ? $this->observability->toArray($noStream) : $this->observability;
        }

        if (null !== $this->outputDataset) {
            $res['outputDataset'] = null !== $this->outputDataset ? $this->outputDataset->toArray($noStream) : $this->outputDataset;
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

        if (null !== $this->sourceStatus) {
            $res['sourceStatus'] = null !== $this->sourceStatus ? $this->sourceStatus->toArray($noStream) : $this->sourceStatus;
        }

        if (null !== $this->storagePolicy) {
            $res['storagePolicy'] = null !== $this->storagePolicy ? $this->storagePolicy->toArray($noStream) : $this->storagePolicy;
        }

        if (null !== $this->strategyVersion) {
            $res['strategyVersion'] = $this->strategyVersion;
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

        if (isset($map['miningInterval'])) {
            $model->miningInterval = $map['miningInterval'];
        }

        if (isset($map['observability'])) {
            $model->observability = observability::fromMap($map['observability']);
        }

        if (isset($map['outputDataset'])) {
            $model->outputDataset = outputDataset::fromMap($map['outputDataset']);
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

        if (isset($map['sourceStatus'])) {
            $model->sourceStatus = sourceStatus::fromMap($map['sourceStatus']);
        }

        if (isset($map['storagePolicy'])) {
            $model->storagePolicy = storagePolicy::fromMap($map['storagePolicy']);
        }

        if (isset($map['strategyVersion'])) {
            $model->strategyVersion = $map['strategyVersion'];
        }

        return $model;
    }
}
