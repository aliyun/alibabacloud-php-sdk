<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\RenderOrderResponseBody;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RenderOrderResponseBody\model\renderOrderInfos;
use AlibabaCloud\Tea\Model;

class model extends Model
{
    /**
     * @var renderOrderInfos
     */
    public $renderOrderInfos;
    protected $_name = [
        'renderOrderInfos' => 'RenderOrderInfos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->renderOrderInfos) {
            $res['RenderOrderInfos'] = null !== $this->renderOrderInfos ? $this->renderOrderInfos->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return model
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RenderOrderInfos'])) {
            $model->renderOrderInfos = renderOrderInfos::fromMap($map['RenderOrderInfos']);
        }

        return $model;
    }
}
