<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\GetTextGenerationResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetTextGenerationResponseBody\result\searchResults;

class result extends Model
{
    /**
     * @var searchResults[]
     */
    public $searchResults;

    /**
     * @var string
     */
    public $text;
    protected $_name = [
        'searchResults' => 'search_results',
        'text' => 'text',
    ];

    public function validate()
    {
        if (\is_array($this->searchResults)) {
            Model::validateArray($this->searchResults);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->searchResults) {
            if (\is_array($this->searchResults)) {
                $res['search_results'] = [];
                $n1 = 0;
                foreach ($this->searchResults as $item1) {
                    $res['search_results'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->text) {
            $res['text'] = $this->text;
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
        if (isset($map['search_results'])) {
            if (!empty($map['search_results'])) {
                $model->searchResults = [];
                $n1 = 0;
                foreach ($map['search_results'] as $item1) {
                    $model->searchResults[$n1++] = searchResults::fromMap($item1);
                }
            }
        }

        if (isset($map['text'])) {
            $model->text = $map['text'];
        }

        return $model;
    }
}
