<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Tea\Model;

class ListAcrImageTagsRequest extends Model
{
    /**
     * @description The type of the deployment package. Default value: AcrImage. Valid values:
     *
     *   HelmChart: Helm chart image.
     *   AcrImage: container image.
     *
     * @example AcrImage
     *
     * @var string
     */
    public $artifactType;

    /**
     * @description The number of entries per page. Valid values: 1 to 100. Default value: 20.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results.
     *
     * @example AAAAAW8kZY+u1sYOaYf5JmgmDQQ=
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The image ID.
     *
     * @example crr-3gqhkza0wbxxxxxx
     *
     * @var string
     */
    public $repoId;
    protected $_name = [
        'artifactType' => 'ArtifactType',
        'maxResults'   => 'MaxResults',
        'nextToken'    => 'NextToken',
        'repoId'       => 'RepoId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->artifactType) {
            $res['ArtifactType'] = $this->artifactType;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->repoId) {
            $res['RepoId'] = $this->repoId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAcrImageTagsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArtifactType'])) {
            $model->artifactType = $map['ArtifactType'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RepoId'])) {
            $model->repoId = $map['RepoId'];
        }

        return $model;
    }
}
