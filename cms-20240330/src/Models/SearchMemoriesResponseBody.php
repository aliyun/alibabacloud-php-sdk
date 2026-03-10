<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\SearchMemoriesResponseBody\relations;
use AlibabaCloud\SDK\Cms\V20240330\Models\SearchMemoriesResponseBody\results;

class SearchMemoriesResponseBody extends Model
{
    /**
     * @var relations[]
     */
    public $relations;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var results[]
     */
    public $results;
    protected $_name = [
        'relations' => 'relations',
        'requestId' => 'requestId',
        'results' => 'results',
    ];

    public function validate()
    {
        if (\is_array($this->relations)) {
            Model::validateArray($this->relations);
        }
        if (\is_array($this->results)) {
            Model::validateArray($this->results);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->relations) {
            if (\is_array($this->relations)) {
                $res['relations'] = [];
                $n1 = 0;
                foreach ($this->relations as $item1) {
                    $res['relations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->results) {
            if (\is_array($this->results)) {
                $res['results'] = [];
                $n1 = 0;
                foreach ($this->results as $item1) {
                    $res['results'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['relations'])) {
            if (!empty($map['relations'])) {
                $model->relations = [];
                $n1 = 0;
                foreach ($map['relations'] as $item1) {
                    $model->relations[$n1] = relations::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['results'])) {
            if (!empty($map['results'])) {
                $model->results = [];
                $n1 = 0;
                foreach ($map['results'] as $item1) {
                    $model->results[$n1] = results::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
