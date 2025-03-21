<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\GetWebSearchResponseBody;

use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetWebSearchResponseBody\usage\filterModel;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetWebSearchResponseBody\usage\rewriteModel;
use AlibabaCloud\Tea\Model;

class usage extends Model
{
    /**
     * @var filterModel
     */
    public $filterModel;

    /**
     * @var rewriteModel
     */
    public $rewriteModel;

    /**
     * @var int
     */
    public $searchCount;
    protected $_name = [
        'filterModel' => 'filter_model',
        'rewriteModel' => 'rewrite_model',
        'searchCount' => 'search_count',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->filterModel) {
            $res['filter_model'] = null !== $this->filterModel ? $this->filterModel->toMap() : null;
        }
        if (null !== $this->rewriteModel) {
            $res['rewrite_model'] = null !== $this->rewriteModel ? $this->rewriteModel->toMap() : null;
        }
        if (null !== $this->searchCount) {
            $res['search_count'] = $this->searchCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return usage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['filter_model'])) {
            $model->filterModel = filterModel::fromMap($map['filter_model']);
        }
        if (isset($map['rewrite_model'])) {
            $model->rewriteModel = rewriteModel::fromMap($map['rewrite_model']);
        }
        if (isset($map['search_count'])) {
            $model->searchCount = $map['search_count'];
        }

        return $model;
    }
}
