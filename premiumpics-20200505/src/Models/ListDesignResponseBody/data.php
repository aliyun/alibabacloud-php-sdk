<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Premiumpics\V20200505\Models\ListDesignResponseBody;

use AlibabaCloud\SDK\Premiumpics\V20200505\Models\ListDesignResponseBody\data\templates;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $goodsId;

    /**
     * @var templates[]
     */
    public $templates;
    protected $_name = [
        'goodsId'   => 'GoodsId',
        'templates' => 'Templates',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->goodsId) {
            $res['GoodsId'] = $this->goodsId;
        }
        if (null !== $this->templates) {
            $res['Templates'] = [];
            if (null !== $this->templates && \is_array($this->templates)) {
                $n = 0;
                foreach ($this->templates as $item) {
                    $res['Templates'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GoodsId'])) {
            $model->goodsId = $map['GoodsId'];
        }
        if (isset($map['Templates'])) {
            if (!empty($map['Templates'])) {
                $model->templates = [];
                $n                = 0;
                foreach ($map['Templates'] as $item) {
                    $model->templates[$n++] = null !== $item ? templates::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
