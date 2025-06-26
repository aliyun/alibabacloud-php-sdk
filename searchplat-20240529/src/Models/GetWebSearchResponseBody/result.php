<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\GetWebSearchResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetWebSearchResponseBody\result\searchResult;

class result extends Model
{
    /**
     * @var searchResult[]
     */
    public $searchResult;
    protected $_name = [
        'searchResult' => 'search_result',
    ];

    public function validate()
    {
        if (\is_array($this->searchResult)) {
            Model::validateArray($this->searchResult);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->searchResult) {
            if (\is_array($this->searchResult)) {
                $res['search_result'] = [];
                $n1 = 0;
                foreach ($this->searchResult as $item1) {
                    $res['search_result'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['search_result'])) {
            if (!empty($map['search_result'])) {
                $model->searchResult = [];
                $n1 = 0;
                foreach ($map['search_result'] as $item1) {
                    $model->searchResult[$n1] = searchResult::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
