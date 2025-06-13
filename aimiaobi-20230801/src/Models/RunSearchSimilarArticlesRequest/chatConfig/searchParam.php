<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchSimilarArticlesRequest\chatConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchSimilarArticlesRequest\chatConfig\searchParam\searchSources;

class searchParam extends Model
{
    /**
     * @var searchSources[]
     */
    public $searchSources;
    protected $_name = [
        'searchSources' => 'SearchSources',
    ];

    public function validate()
    {
        if (\is_array($this->searchSources)) {
            Model::validateArray($this->searchSources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->searchSources) {
            if (\is_array($this->searchSources)) {
                $res['SearchSources'] = [];
                $n1 = 0;
                foreach ($this->searchSources as $item1) {
                    $res['SearchSources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SearchSources'])) {
            if (!empty($map['SearchSources'])) {
                $model->searchSources = [];
                $n1 = 0;
                foreach ($map['SearchSources'] as $item1) {
                    $model->searchSources[$n1] = searchSources::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
