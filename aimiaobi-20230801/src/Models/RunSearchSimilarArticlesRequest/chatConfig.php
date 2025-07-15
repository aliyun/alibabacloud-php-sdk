<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchSimilarArticlesRequest;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchSimilarArticlesRequest\chatConfig\searchParam;
use AlibabaCloud\Tea\Model;

class chatConfig extends Model
{
    /**
     * @var searchParam
     */
    public $searchParam;
    protected $_name = [
        'searchParam' => 'SearchParam',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->searchParam) {
            $res['SearchParam'] = null !== $this->searchParam ? $this->searchParam->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return chatConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SearchParam'])) {
            $model->searchParam = searchParam::fromMap($map['SearchParam']);
        }

        return $model;
    }
}
