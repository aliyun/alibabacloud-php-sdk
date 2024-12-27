<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ListDatasetsRequest extends Model
{
    /**
     * @description The maximum number of datasets to return. Valid values: 0 to 200.
     *
     * If this parameter is left empty or set to 0, 100 datasets are returned.
     * @example 1
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token.
     *
     * >  The first time you call this operation in a query, set this parameter to null.
     * @example 12345678:immtest:dataset002
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The dataset prefix.
     *
     * @example dataset
     *
     * @var string
     */
    public $prefix;

    /**
     * @description The name of the project. For more information, see [CreateProject](https://help.aliyun.com/document_detail/478153.html).
     *
     * This parameter is required.
     * @example test-project
     *
     * @var string
     */
    public $projectName;
    protected $_name = [
        'maxResults'  => 'MaxResults',
        'nextToken'   => 'NextToken',
        'prefix'      => 'Prefix',
        'projectName' => 'ProjectName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->prefix) {
            $res['Prefix'] = $this->prefix;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDatasetsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Prefix'])) {
            $model->prefix = $map['Prefix'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        return $model;
    }
}
