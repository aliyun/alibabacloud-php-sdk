<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\GetQueryAnalysisResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $intent;

    /**
     * @var string[]
     */
    public $queries;

    /**
     * @var string
     */
    public $query;

    /**
     * @var mixed[]
     */
    public $sql;
    protected $_name = [
        'intent'  => 'intent',
        'queries' => 'queries',
        'query'   => 'query',
        'sql'     => 'sql',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->intent) {
            $res['intent'] = $this->intent;
        }
        if (null !== $this->queries) {
            $res['queries'] = $this->queries;
        }
        if (null !== $this->query) {
            $res['query'] = $this->query;
        }
        if (null !== $this->sql) {
            $res['sql'] = $this->sql;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['intent'])) {
            $model->intent = $map['intent'];
        }
        if (isset($map['queries'])) {
            if (!empty($map['queries'])) {
                $model->queries = $map['queries'];
            }
        }
        if (isset($map['query'])) {
            $model->query = $map['query'];
        }
        if (isset($map['sql'])) {
            $model->sql = $map['sql'];
        }

        return $model;
    }
}
