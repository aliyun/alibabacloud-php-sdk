<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Dara\Model;

class ListRestQueryResultRequest extends Model
{
    /**
     * @var string
     */
    public $indexName;

    /**
     * @var mixed[]
     */
    public $query;
    protected $_name = [
        'indexName' => 'indexName',
        'query' => 'query',
    ];

    public function validate()
    {
        if (\is_array($this->query)) {
            Model::validateArray($this->query);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->indexName) {
            $res['indexName'] = $this->indexName;
        }

        if (null !== $this->query) {
            if (\is_array($this->query)) {
                $res['query'] = [];
                foreach ($this->query as $key1 => $value1) {
                    $res['query'][$key1] = $value1;
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
        if (isset($map['indexName'])) {
            $model->indexName = $map['indexName'];
        }

        if (isset($map['query'])) {
            if (!empty($map['query'])) {
                $model->query = [];
                foreach ($map['query'] as $key1 => $value1) {
                    $model->query[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
