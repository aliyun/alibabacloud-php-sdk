<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\CreateApplicationRequest;

use AlibabaCloud\Dara\Model;

class memApplicationSpec extends Model
{
    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $dbPassword;

    /**
     * @var string
     */
    public $dbUser;

    /**
     * @var string
     */
    public $embedderModel;

    /**
     * @var string
     */
    public $llmModel;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $rerankerModel;
    protected $_name = [
        'dbName' => 'DbName',
        'dbPassword' => 'DbPassword',
        'dbUser' => 'DbUser',
        'embedderModel' => 'EmbedderModel',
        'llmModel' => 'LlmModel',
        'projectName' => 'ProjectName',
        'rerankerModel' => 'RerankerModel',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }

        if (null !== $this->dbPassword) {
            $res['DbPassword'] = $this->dbPassword;
        }

        if (null !== $this->dbUser) {
            $res['DbUser'] = $this->dbUser;
        }

        if (null !== $this->embedderModel) {
            $res['EmbedderModel'] = $this->embedderModel;
        }

        if (null !== $this->llmModel) {
            $res['LlmModel'] = $this->llmModel;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->rerankerModel) {
            $res['RerankerModel'] = $this->rerankerModel;
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

        if (isset($map['DbPassword'])) {
            $model->dbPassword = $map['DbPassword'];
        }

        if (isset($map['DbUser'])) {
            $model->dbUser = $map['DbUser'];
        }

        if (isset($map['EmbedderModel'])) {
            $model->embedderModel = $map['EmbedderModel'];
        }

        if (isset($map['LlmModel'])) {
            $model->llmModel = $map['LlmModel'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['RerankerModel'])) {
            $model->rerankerModel = $map['RerankerModel'];
        }

        return $model;
    }
}
