<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Datahub\V20240620\Models;

use AlibabaCloud\Dara\Model;

class ListGroupsRequest extends Model
{
    /**
     * @var string
     */
    public $keyword;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var bool
     */
    public $pure;

    /**
     * @var int
     */
    public $skip;
    protected $_name = [
        'keyword' => 'Keyword',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'projectName' => 'ProjectName',
        'pure' => 'Pure',
        'skip' => 'Skip',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->pure) {
            $res['Pure'] = $this->pure;
        }

        if (null !== $this->skip) {
            $res['Skip'] = $this->skip;
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
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['Pure'])) {
            $model->pure = $map['Pure'];
        }

        if (isset($map['Skip'])) {
            $model->skip = $map['Skip'];
        }

        return $model;
    }
}
