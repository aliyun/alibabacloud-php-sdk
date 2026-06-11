<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models\RetrieveKnowledgeBaseResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dms\V20250414\Models\RetrieveKnowledgeBaseResponseBody\data\matches;
use AlibabaCloud\SDK\Dms\V20250414\Models\RetrieveKnowledgeBaseResponseBody\data\results;

class data extends Model
{
    /**
     * @var matches[]
     */
    public $matches;

    /**
     * @var results[]
     */
    public $results;
    protected $_name = [
        'matches' => 'Matches',
        'results' => 'Results',
    ];

    public function validate()
    {
        if (\is_array($this->matches)) {
            Model::validateArray($this->matches);
        }
        if (\is_array($this->results)) {
            Model::validateArray($this->results);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->matches) {
            if (\is_array($this->matches)) {
                $res['Matches'] = [];
                $n1 = 0;
                foreach ($this->matches as $item1) {
                    $res['Matches'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->results) {
            if (\is_array($this->results)) {
                $res['Results'] = [];
                $n1 = 0;
                foreach ($this->results as $item1) {
                    $res['Results'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Matches'])) {
            if (!empty($map['Matches'])) {
                $model->matches = [];
                $n1 = 0;
                foreach ($map['Matches'] as $item1) {
                    $model->matches[$n1] = matches::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Results'])) {
            if (!empty($map['Results'])) {
                $model->results = [];
                $n1 = 0;
                foreach ($map['Results'] as $item1) {
                    $model->results[$n1] = results::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
