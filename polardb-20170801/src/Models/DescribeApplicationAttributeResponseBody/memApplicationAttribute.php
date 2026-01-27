<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApplicationAttributeResponseBody;

use AlibabaCloud\Dara\Model;

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
     * @var string
     */
    public $userName;
    protected $_name = [
        'dbName' => 'DbName',
        'embedderModelName' => 'EmbedderModelName',
        'llmModelName' => 'LlmModelName',
        'projectName' => 'ProjectName',
        'rerankerModelName' => 'RerankerModelName',
        'userName' => 'UserName',
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

        if (null !== $this->embedderModelName) {
            $res['EmbedderModelName'] = $this->embedderModelName;
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

        if (isset($map['LlmModelName'])) {
            $model->llmModelName = $map['LlmModelName'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['RerankerModelName'])) {
            $model->rerankerModelName = $map['RerankerModelName'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
