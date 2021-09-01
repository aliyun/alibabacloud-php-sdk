<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\RenderOrderResponseBody\model;

use AlibabaCloud\Tea\Model;

class renderOrderInfos extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Linkedmall\V20180116\Models\RenderOrderResponseBody\model\renderOrderInfos\renderOrderInfos[]
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
            $res['RenderOrderInfos'] = [];
            if (null !== $this->renderOrderInfos && \is_array($this->renderOrderInfos)) {
                $n = 0;
                foreach ($this->renderOrderInfos as $item) {
                    $res['RenderOrderInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return renderOrderInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RenderOrderInfos'])) {
            if (!empty($map['RenderOrderInfos'])) {
                $model->renderOrderInfos = [];
                $n                       = 0;
                foreach ($map['RenderOrderInfos'] as $item) {
                    $model->renderOrderInfos[$n++] = null !== $item ? \AlibabaCloud\SDK\Linkedmall\V20180116\Models\RenderOrderResponseBody\model\renderOrderInfos\renderOrderInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
