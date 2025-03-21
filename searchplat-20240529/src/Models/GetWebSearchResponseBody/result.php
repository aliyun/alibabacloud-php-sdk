<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\GetWebSearchResponseBody;

use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetWebSearchResponseBody\result\searchResult;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var searchResult[]
     */
    public $searchResult;
    protected $_name = [
        'searchResult' => 'search_result',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->searchResult) {
            $res['search_result'] = [];
            if (null !== $this->searchResult && \is_array($this->searchResult)) {
                $n = 0;
                foreach ($this->searchResult as $item) {
                    $res['search_result'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['search_result'])) {
            if (!empty($map['search_result'])) {
                $model->searchResult = [];
                $n = 0;
                foreach ($map['search_result'] as $item) {
                    $model->searchResult[$n++] = null !== $item ? searchResult::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
