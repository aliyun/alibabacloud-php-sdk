<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class ListPipelineJobHistorysRequest extends Model
{
    /**
     * @example DEPLOY
     *
     * @var string
     */
    public $category;

    /**
     * @example 10_ssasasa
     *
     * @var string
     */
    public $identifier;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example xsaxsa
     *
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'category'   => 'category',
        'identifier' => 'identifier',
        'maxResults' => 'maxResults',
        'nextToken'  => 'nextToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }
        if (null !== $this->identifier) {
            $res['identifier'] = $this->identifier;
        }
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPipelineJobHistorysRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }
        if (isset($map['identifier'])) {
            $model->identifier = $map['identifier'];
        }
        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        return $model;
    }
}
