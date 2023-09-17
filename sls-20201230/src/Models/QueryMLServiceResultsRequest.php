<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class QueryMLServiceResultsRequest extends Model
{
    /**
     * @var bool
     */
    public $allowBuiltin;

    /**
     * @var MLServiceAnalysisParam
     */
    public $body;
    protected $_name = [
        'allowBuiltin' => 'allowBuiltin',
        'body'         => 'body',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowBuiltin) {
            $res['allowBuiltin'] = $this->allowBuiltin;
        }
        if (null !== $this->body) {
            $res['body'] = null !== $this->body ? $this->body->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryMLServiceResultsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['allowBuiltin'])) {
            $model->allowBuiltin = $map['allowBuiltin'];
        }
        if (isset($map['body'])) {
            $model->body = MLServiceAnalysisParam::fromMap($map['body']);
        }

        return $model;
    }
}
