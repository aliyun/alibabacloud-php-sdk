<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\RenderOrderResponseBody\model\renderOrderInfos\renderOrderInfos;

use AlibabaCloud\Tea\Model;

class lmItemInfos extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Linkedmall\V20180116\Models\RenderOrderResponseBody\model\renderOrderInfos\renderOrderInfos\lmItemInfos\lmItemInfos[]
     */
    public $lmItemInfos;
    protected $_name = [
        'lmItemInfos' => 'LmItemInfos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lmItemInfos) {
            $res['LmItemInfos'] = [];
            if (null !== $this->lmItemInfos && \is_array($this->lmItemInfos)) {
                $n = 0;
                foreach ($this->lmItemInfos as $item) {
                    $res['LmItemInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lmItemInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LmItemInfos'])) {
            if (!empty($map['LmItemInfos'])) {
                $model->lmItemInfos = [];
                $n                  = 0;
                foreach ($map['LmItemInfos'] as $item) {
                    $model->lmItemInfos[$n++] = null !== $item ? \AlibabaCloud\SDK\Linkedmall\V20180116\Models\RenderOrderResponseBody\model\renderOrderInfos\renderOrderInfos\lmItemInfos\lmItemInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
