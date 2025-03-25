<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Tea\Model;

class ListPromptTemplatesRequest extends Model
{
    /**
     * @description The maximum number of returned entries.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The keyword that is used to search for templates.
     *
     * @var string
     */
    public $name;

    /**
     * @description The token that determines the start position of the query. Set this parameter to the value of the NextToken parameter that is returned from the last call.
     *
     * @example dc270401186b433f975d7e1faaa34e0e
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The type of the template. Valid values: · System · Custom
     *
     * @example System
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'maxResults' => 'maxResults',
        'name' => 'name',
        'nextToken' => 'nextToken',
        'type' => 'type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPromptTemplatesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
