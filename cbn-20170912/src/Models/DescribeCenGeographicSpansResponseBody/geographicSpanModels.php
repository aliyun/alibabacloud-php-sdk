<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenGeographicSpansResponseBody;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenGeographicSpansResponseBody\geographicSpanModels\geographicSpanModel;
use AlibabaCloud\Tea\Model;

class geographicSpanModels extends Model
{
    /**
     * @var geographicSpanModel[]
     */
    public $geographicSpanModel;
    protected $_name = [
        'geographicSpanModel' => 'GeographicSpanModel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->geographicSpanModel) {
            $res['GeographicSpanModel'] = [];
            if (null !== $this->geographicSpanModel && \is_array($this->geographicSpanModel)) {
                $n = 0;
                foreach ($this->geographicSpanModel as $item) {
                    $res['GeographicSpanModel'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return geographicSpanModels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GeographicSpanModel'])) {
            if (!empty($map['GeographicSpanModel'])) {
                $model->geographicSpanModel = [];
                $n                          = 0;
                foreach ($map['GeographicSpanModel'] as $item) {
                    $model->geographicSpanModel[$n++] = null !== $item ? geographicSpanModel::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
