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
    protected $_name = [
        'dbName' => 'DbName',
        'embedderModelName' => 'EmbedderModelName',
        'graphLlmModelName' => 'GraphLlmModelName',
        'llmModelName' => 'LlmModelName',
        'projectName' => 'ProjectName',
        'rerankerModelName' => 'RerankerModelName',
        'sessionStore' => 'SessionStore',
        'userName' => 'UserName',
    ];

    public function validate()
    {
        if (null !== $this->sessionStore) {
            $this->sessionStore->validate();
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

        return $model;
    }
}
