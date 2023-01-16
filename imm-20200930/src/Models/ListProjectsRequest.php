<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ListProjectsRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example 12345678:immtest01
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example immtest
     *
     * @var string
     */
    public $prefix;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken'  => 'NextToken',
        'prefix'     => 'Prefix',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProjectsRequest
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

        return $model;
    }
}
