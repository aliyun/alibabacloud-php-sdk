<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetMemoryStoreResponseBody\shortTermStorage;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetMemoryStoreResponseBody\traceSourceConfig;

class GetMemoryStoreResponseBody extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var CustomExtractionStrategy[]
     */
    public $customExtractionStrategies;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $extractionStrategies;

    /**
     * @var string
     */
    public $memoryStoreName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var shortTermStorage
     */
    public $shortTermStorage;

    /**
     * @var int
     */
    public $shortTermTtl;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var traceSourceConfig
     */
    public $traceSourceConfig;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'createTime' => 'createTime',
        'customExtractionStrategies' => 'customExtractionStrategies',
        'description' => 'description',
        'extractionStrategies' => 'extractionStrategies',
        'memoryStoreName' => 'memoryStoreName',
        'regionId' => 'regionId',
        'requestId' => 'requestId',
        'shortTermStorage' => 'shortTermStorage',
        'shortTermTtl' => 'shortTermTtl',
        'sourceType' => 'sourceType',
        'traceSourceConfig' => 'traceSourceConfig',
        'updateTime' => 'updateTime',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        if (\is_array($this->customExtractionStrategies)) {
            Model::validateArray($this->customExtractionStrategies);
        }
        if (\is_array($this->extractionStrategies)) {
            Model::validateArray($this->extractionStrategies);
        }
        if (null !== $this->shortTermStorage) {
            $this->shortTermStorage->validate();
        }
        if (null !== $this->traceSourceConfig) {
            $this->traceSourceConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->customExtractionStrategies) {
            if (\is_array($this->customExtractionStrategies)) {
                $res['customExtractionStrategies'] = [];
                $n1 = 0;
                foreach ($this->customExtractionStrategies as $item1) {
                    $res['customExtractionStrategies'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->extractionStrategies) {
            if (\is_array($this->extractionStrategies)) {
                $res['extractionStrategies'] = [];
                $n1 = 0;
                foreach ($this->extractionStrategies as $item1) {
                    $res['extractionStrategies'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->memoryStoreName) {
            $res['memoryStoreName'] = $this->memoryStoreName;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->shortTermStorage) {
            $res['shortTermStorage'] = null !== $this->shortTermStorage ? $this->shortTermStorage->toArray($noStream) : $this->shortTermStorage;
        }

        if (null !== $this->shortTermTtl) {
            $res['shortTermTtl'] = $this->shortTermTtl;
        }

        if (null !== $this->sourceType) {
            $res['sourceType'] = $this->sourceType;
        }

        if (null !== $this->traceSourceConfig) {
            $res['traceSourceConfig'] = null !== $this->traceSourceConfig ? $this->traceSourceConfig->toArray($noStream) : $this->traceSourceConfig;
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }

        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
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
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['customExtractionStrategies'])) {
            if (!empty($map['customExtractionStrategies'])) {
                $model->customExtractionStrategies = [];
                $n1 = 0;
                foreach ($map['customExtractionStrategies'] as $item1) {
                    $model->customExtractionStrategies[$n1] = CustomExtractionStrategy::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['extractionStrategies'])) {
            if (!empty($map['extractionStrategies'])) {
                $model->extractionStrategies = [];
                $n1 = 0;
                foreach ($map['extractionStrategies'] as $item1) {
                    $model->extractionStrategies[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['memoryStoreName'])) {
            $model->memoryStoreName = $map['memoryStoreName'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['shortTermStorage'])) {
            $model->shortTermStorage = shortTermStorage::fromMap($map['shortTermStorage']);
        }

        if (isset($map['shortTermTtl'])) {
            $model->shortTermTtl = $map['shortTermTtl'];
        }

        if (isset($map['sourceType'])) {
            $model->sourceType = $map['sourceType'];
        }

        if (isset($map['traceSourceConfig'])) {
            $model->traceSourceConfig = traceSourceConfig::fromMap($map['traceSourceConfig']);
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
