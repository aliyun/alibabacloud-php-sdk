<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class SemanticQueryRequest extends Model
{
    /**
     * @description The name of the dataset.
     *
     * This parameter is required.
     * @example immDatatest
     *
     * @var string
     */
    public $datasetName;

    /**
     * @description The maximum number of entries to return. Valid values: 1 to 1000.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The types of the media that you want to query. Default value:
     *
     * ["image"]
     * @var string[]
     */
    public $mediaTypes;

    /**
     * @description This parameter is no longer available.
     *
     * @example MTIzNDU2Nzg6aW1tdGVzdDpleGFtcGxlYnVja2V0OmRhdGFzZXQwMDE6b3NzOi8vZXhhbXBsZWJ1Y2tldC9zYW1wbGVvYmplY3QxLmpwZw==
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The name of the project.
     *
     * This parameter is required.
     * @example immtest
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The content of the query that you input.
     *
     * This parameter is required.
     * @var string
     */
    public $query;

    /**
     * @description The fields that you want to include in the response. Including only necessary metadata fields can help reduce the size of the response.
     *
     * If you do not specify this parameter or set the value to null, all existing metadata fields are returned.
     * @var string[]
     */
    public $withFields;
    protected $_name = [
        'datasetName' => 'DatasetName',
        'maxResults'  => 'MaxResults',
        'mediaTypes'  => 'MediaTypes',
        'nextToken'   => 'NextToken',
        'projectName' => 'ProjectName',
        'query'       => 'Query',
        'withFields'  => 'WithFields',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->mediaTypes) {
            $res['MediaTypes'] = $this->mediaTypes;
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
            $res['WithFields'] = $this->withFields;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SemanticQueryRequest
     */
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
                $model->mediaTypes = $map['MediaTypes'];
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
                $model->withFields = $map['WithFields'];
            }
        }

        return $model;
    }
}
