<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models\RetrieveKnowledgeBaseResponseBody\data;

use AlibabaCloud\Dara\Model;

class results extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $loaderMetadata;

    /**
     * @var mixed[]
     */
    public $metadata;

    /**
     * @var float
     */
    public $rerankScore;

    /**
     * @var int
     */
    public $retrievalSource;

    /**
     * @var float
     */
    public $score;

    /**
     * @var float[]
     */
    public $vector;
    protected $_name = [
        'content' => 'Content',
        'fileName' => 'FileName',
        'id' => 'Id',
        'loaderMetadata' => 'LoaderMetadata',
        'metadata' => 'Metadata',
        'rerankScore' => 'RerankScore',
        'retrievalSource' => 'RetrievalSource',
        'score' => 'Score',
        'vector' => 'Vector',
    ];

    public function validate()
    {
        if (\is_array($this->metadata)) {
            Model::validateArray($this->metadata);
        }
        if (\is_array($this->vector)) {
            Model::validateArray($this->vector);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->loaderMetadata) {
            $res['LoaderMetadata'] = $this->loaderMetadata;
        }

        if (null !== $this->metadata) {
            if (\is_array($this->metadata)) {
                $res['Metadata'] = [];
                foreach ($this->metadata as $key1 => $value1) {
                    $res['Metadata'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->rerankScore) {
            $res['RerankScore'] = $this->rerankScore;
        }

        if (null !== $this->retrievalSource) {
            $res['RetrievalSource'] = $this->retrievalSource;
        }

        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }

        if (null !== $this->vector) {
            if (\is_array($this->vector)) {
                $res['Vector'] = [];
                $n1 = 0;
                foreach ($this->vector as $item1) {
                    $res['Vector'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['LoaderMetadata'])) {
            $model->loaderMetadata = $map['LoaderMetadata'];
        }

        if (isset($map['Metadata'])) {
            if (!empty($map['Metadata'])) {
                $model->metadata = [];
                foreach ($map['Metadata'] as $key1 => $value1) {
                    $model->metadata[$key1] = $value1;
                }
            }
        }

        if (isset($map['RerankScore'])) {
            $model->rerankScore = $map['RerankScore'];
        }

        if (isset($map['RetrievalSource'])) {
            $model->retrievalSource = $map['RetrievalSource'];
        }

        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        if (isset($map['Vector'])) {
            if (!empty($map['Vector'])) {
                $model->vector = [];
                $n1 = 0;
                foreach ($map['Vector'] as $item1) {
                    $model->vector[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
