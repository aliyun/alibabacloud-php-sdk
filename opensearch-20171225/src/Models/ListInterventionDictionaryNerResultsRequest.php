<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

class ListInterventionDictionaryNerResultsRequest extends Model
{
    /**
     * @description Query keywords.
     *
     * This parameter is required.
     * @example "hello world"
     *
     * @var string
     */
    public $query;
    protected $_name = [
        'query' => 'query',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->query) {
            $res['query'] = $this->query;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInterventionDictionaryNerResultsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['query'])) {
            $model->query = $map['query'];
        }

        return $model;
    }
}
