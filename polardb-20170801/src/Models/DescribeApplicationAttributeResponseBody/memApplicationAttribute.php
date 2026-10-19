<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApplicationAttributeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApplicationAttributeResponseBody\memApplicationAttribute\sessionStore;

class memApplicationAttribute extends Model
{
    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $embedderModelName;

    /**
     * @var string
     */
    public $graphLlmModelName;

    /**
     * @var string
     */
    public $llmModelName;

    /**
     * @var string
     */
    public $memoryType;

    /**
     * @var bool
     */
    public $multimodalEnabled;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $rerankerModelName;

    /**
     * @var sessionStore
     */
    public $sessionStore;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var int
     */
    public $visualEmbedderDimensions;

    /**
     * @var string
     */
    public $visualEmbedderModelName;

    /**
     * @var string[]
     */
    public $visualLlmModalities;

    /**
     * @var string
     */
    public $visualLlmModelName;
    protected $_name = [
        'dbName' => 'DbName',
        'embedderModelName' => 'EmbedderModelName',
        'graphLlmModelName' => 'GraphLlmModelName',
        'llmModelName' => 'LlmModelName',
        'memoryType' => 'MemoryType',
        'multimodalEnabled' => 'MultimodalEnabled',
        'projectName' => 'ProjectName',
        'rerankerModelName' => 'RerankerModelName',
        'sessionStore' => 'SessionStore',
        'userName' => 'UserName',
        'visualEmbedderDimensions' => 'VisualEmbedderDimensions',
        'visualEmbedderModelName' => 'VisualEmbedderModelName',
        'visualLlmModalities' => 'VisualLlmModalities',
        'visualLlmModelName' => 'VisualLlmModelName',
    ];

    public function validate()
    {
        if (null !== $this->sessionStore) {
            $this->sessionStore->validate();
        }
        if (\is_array($this->visualLlmModalities)) {
            Model::validateArray($this->visualLlmModalities);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }

        if (null !== $this->embedderModelName) {
            $res['EmbedderModelName'] = $this->embedderModelName;
        }

        if (null !== $this->graphLlmModelName) {
            $res['GraphLlmModelName'] = $this->graphLlmModelName;
        }

        if (null !== $this->llmModelName) {
            $res['LlmModelName'] = $this->llmModelName;
        }

        if (null !== $this->memoryType) {
            $res['MemoryType'] = $this->memoryType;
        }

        if (null !== $this->multimodalEnabled) {
            $res['MultimodalEnabled'] = $this->multimodalEnabled;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->rerankerModelName) {
            $res['RerankerModelName'] = $this->rerankerModelName;
        }

        if (null !== $this->sessionStore) {
            $res['SessionStore'] = null !== $this->sessionStore ? $this->sessionStore->toArray($noStream) : $this->sessionStore;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        if (null !== $this->visualEmbedderDimensions) {
            $res['VisualEmbedderDimensions'] = $this->visualEmbedderDimensions;
        }

        if (null !== $this->visualEmbedderModelName) {
            $res['VisualEmbedderModelName'] = $this->visualEmbedderModelName;
        }

        if (null !== $this->visualLlmModalities) {
            if (\is_array($this->visualLlmModalities)) {
                $res['VisualLlmModalities'] = [];
                $n1 = 0;
                foreach ($this->visualLlmModalities as $item1) {
                    $res['VisualLlmModalities'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->visualLlmModelName) {
            $res['VisualLlmModelName'] = $this->visualLlmModelName;
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
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }

        if (isset($map['EmbedderModelName'])) {
            $model->embedderModelName = $map['EmbedderModelName'];
        }

        if (isset($map['GraphLlmModelName'])) {
            $model->graphLlmModelName = $map['GraphLlmModelName'];
        }

        if (isset($map['LlmModelName'])) {
            $model->llmModelName = $map['LlmModelName'];
        }

        if (isset($map['MemoryType'])) {
            $model->memoryType = $map['MemoryType'];
        }

        if (isset($map['MultimodalEnabled'])) {
            $model->multimodalEnabled = $map['MultimodalEnabled'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['RerankerModelName'])) {
            $model->rerankerModelName = $map['RerankerModelName'];
        }

        if (isset($map['SessionStore'])) {
            $model->sessionStore = sessionStore::fromMap($map['SessionStore']);
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        if (isset($map['VisualEmbedderDimensions'])) {
            $model->visualEmbedderDimensions = $map['VisualEmbedderDimensions'];
        }

        if (isset($map['VisualEmbedderModelName'])) {
            $model->visualEmbedderModelName = $map['VisualEmbedderModelName'];
        }

        if (isset($map['VisualLlmModalities'])) {
            if (!empty($map['VisualLlmModalities'])) {
                $model->visualLlmModalities = [];
                $n1 = 0;
                foreach ($map['VisualLlmModalities'] as $item1) {
                    $model->visualLlmModalities[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['VisualLlmModelName'])) {
            $model->visualLlmModelName = $map['VisualLlmModelName'];
        }

        return $model;
    }
}
