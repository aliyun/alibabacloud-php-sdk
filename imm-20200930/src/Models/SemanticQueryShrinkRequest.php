<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class SemanticQueryShrinkRequest extends Model
{
    /**
     * @example immDatatest
     *
     * @var string
     */
    public $datasetName;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $mediaTypesShrink;

    /**
     * @example MTIzNDU2Nzg6aW1tdGVzdDpleGFtcGxlYnVja2V0OmRhdGFzZXQwMDE6b3NzOi8vZXhhbXBsZWJ1Y2tldC9zYW1wbGVvYmplY3QxLmpwZw==
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example immtest
     *
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $query;

    /**
     * @var string
     */
    public $withFieldsShrink;
    protected $_name = [
        'datasetName'      => 'DatasetName',
        'maxResults'       => 'MaxResults',
        'mediaTypesShrink' => 'MediaTypes',
        'nextToken'        => 'NextToken',
        'projectName'      => 'ProjectName',
        'query'            => 'Query',
        'withFieldsShrink' => 'WithFields',
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
        if (null !== $this->mediaTypesShrink) {
            $res['MediaTypes'] = $this->mediaTypesShrink;
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
        if (null !== $this->withFieldsShrink) {
            $res['WithFields'] = $this->withFieldsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SemanticQueryShrinkRequest
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
            $model->mediaTypesShrink = $map['MediaTypes'];
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
            $model->withFieldsShrink = $map['WithFields'];
        }

        return $model;
    }
}
