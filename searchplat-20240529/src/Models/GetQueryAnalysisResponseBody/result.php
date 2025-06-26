<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\GetQueryAnalysisResponseBody;

use AlibabaCloud\Dara\Model;

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
        'intent' => 'intent',
        'queries' => 'queries',
        'query' => 'query',
        'sql' => 'sql',
    ];

    public function validate()
    {
        if (\is_array($this->queries)) {
            Model::validateArray($this->queries);
        }
        if (\is_array($this->sql)) {
            Model::validateArray($this->sql);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->intent) {
            $res['intent'] = $this->intent;
        }

        if (null !== $this->queries) {
            if (\is_array($this->queries)) {
                $res['queries'] = [];
                $n1 = 0;
                foreach ($this->queries as $item1) {
                    $res['queries'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->query) {
            $res['query'] = $this->query;
        }

        if (null !== $this->sql) {
            if (\is_array($this->sql)) {
                $res['sql'] = [];
                foreach ($this->sql as $key1 => $value1) {
                    $res['sql'][$key1] = $value1;
                }
            }
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
        if (isset($map['intent'])) {
            $model->intent = $map['intent'];
        }

        if (isset($map['queries'])) {
            if (!empty($map['queries'])) {
                $model->queries = [];
                $n1 = 0;
                foreach ($map['queries'] as $item1) {
                    $model->queries[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['query'])) {
            $model->query = $map['query'];
        }

        if (isset($map['sql'])) {
            if (!empty($map['sql'])) {
                $model->sql = [];
                foreach ($map['sql'] as $key1 => $value1) {
                    $model->sql[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
