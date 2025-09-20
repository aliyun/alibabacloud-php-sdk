<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class SemanticQueryRequest extends Model
{
    /**
     * @var string
     */
    public $datasetName;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string[]
     */
    public $mediaTypes;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $query;

    /**
     * @var string[]
     */
    public $withFields;
    protected $_name = [
        'datasetName' => 'DatasetName',
        'maxResults' => 'MaxResults',
        'mediaTypes' => 'MediaTypes',
        'nextToken' => 'NextToken',
        'projectName' => 'ProjectName',
        'query' => 'Query',
        'withFields' => 'WithFields',
    ];

    public function validate()
    {
        if (\is_array($this->mediaTypes)) {
            Model::validateArray($this->mediaTypes);
        }
        if (\is_array($this->withFields)) {
            Model::validateArray($this->withFields);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->mediaTypes) {
            if (\is_array($this->mediaTypes)) {
                $res['MediaTypes'] = [];
                $n1 = 0;
                foreach ($this->mediaTypes as $item1) {
                    $res['MediaTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }

        if (null !== $this->withFields) {
            if (\is_array($this->withFields)) {
                $res['WithFields'] = [];
                $n1 = 0;
                foreach ($this->withFields as $item1) {
                    $res['WithFields'][$n1] = $item1;
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
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['MediaTypes'])) {
            if (!empty($map['MediaTypes'])) {
                $model->mediaTypes = [];
                $n1 = 0;
                foreach ($map['MediaTypes'] as $item1) {
                    $model->mediaTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }

        if (isset($map['WithFields'])) {
            if (!empty($map['WithFields'])) {
                $model->withFields = [];
                $n1 = 0;
                foreach ($map['WithFields'] as $item1) {
                    $model->withFields[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
