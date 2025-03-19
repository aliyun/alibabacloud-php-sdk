<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Tea\Model;

class ListArtifactVersionsShrinkRequest extends Model
{
    /**
     * @description The ID of the deployment package.
     *
     * This parameter is required.
     *
     * @example artifact-eea08d1e2d3a43aexxxx
     *
     * @var string
     */
    public $artifactId;

    /**
     * @description The filter.
     *
     * @var string
     */
    public $filtersShrink;

    /**
     * @description The number of entries per page. Valid values: 1 to 100. Default value: 20.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. You do not need to specify this parameter for the first request. You must specify the token that is obtained from the previous query as the value of NextToken.
     *
     * @example AAAAAc3HCuYhJi/wvpk4xOr0VLbfVwapgMwCN1wYzPVzLbItEdB0uWSY7AGnM3qCgm/YnjuEfwSnMwiMkcUoI0hRQzE=
     *
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'artifactId' => 'ArtifactId',
        'filtersShrink' => 'Filters',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->artifactId) {
            $res['ArtifactId'] = $this->artifactId;
        }
        if (null !== $this->filtersShrink) {
            $res['Filters'] = $this->filtersShrink;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListArtifactVersionsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArtifactId'])) {
            $model->artifactId = $map['ArtifactId'];
        }
        if (isset($map['Filters'])) {
            $model->filtersShrink = $map['Filters'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        return $model;
    }
}
