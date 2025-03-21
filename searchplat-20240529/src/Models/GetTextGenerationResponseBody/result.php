<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\GetTextGenerationResponseBody;

use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetTextGenerationResponseBody\result\searchResults;
use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->searchResults) {
            $res['search_results'] = [];
            if (null !== $this->searchResults && \is_array($this->searchResults)) {
                $n = 0;
                foreach ($this->searchResults as $item) {
                    $res['search_results'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->text) {
            $res['text'] = $this->text;
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
        if (isset($map['search_results'])) {
            if (!empty($map['search_results'])) {
                $model->searchResults = [];
                $n = 0;
                foreach ($map['search_results'] as $item) {
                    $model->searchResults[$n++] = null !== $item ? searchResults::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['text'])) {
            $model->text = $map['text'];
        }

        return $model;
    }
}
