<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;

class GetDatasetFileMetasStatisticsRequest extends Model
{
    /**
     * @var string
     */
    public $aggregateBy;

    /**
     * @var string
     */
    public $datasetVersion;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'aggregateBy' => 'AggregateBy',
        'datasetVersion' => 'DatasetVersion',
        'maxResults' => 'MaxResults',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aggregateBy) {
            $res['AggregateBy'] = $this->aggregateBy;
        }

        if (null !== $this->datasetVersion) {
            $res['DatasetVersion'] = $this->datasetVersion;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['AggregateBy'])) {
            $model->aggregateBy = $map['AggregateBy'];
        }

        if (isset($map['DatasetVersion'])) {
            $model->datasetVersion = $map['DatasetVersion'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
