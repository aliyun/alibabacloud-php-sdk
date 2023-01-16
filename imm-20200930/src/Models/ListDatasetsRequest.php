<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ListDatasetsRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example 12345678:immtest:dataset002
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example dataset
     *
     * @var string
     */
    public $prefix;

    /**
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
