<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\HomeStartResponseBody;

use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\HomeStartResponseBody\model\list_;
use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @var string
     */
    public $cdrDrUrl;

    /**
     * @var list_[]
     */
    public $list;
    protected $_name = [
        'cdrDrUrl' => 'CdrDrUrl',
        'list'     => 'List',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cdrDrUrl) {
            $res['CdrDrUrl'] = $this->cdrDrUrl;
        }
        if (null !== $this->list) {
            $res['List'] = [];
            if (null !== $this->list && \is_array($this->list)) {
                $n = 0;
                foreach ($this->list as $item) {
                    $res['List'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return model_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CdrDrUrl'])) {
            $model->cdrDrUrl = $map['CdrDrUrl'];
        }
        if (isset($map['List'])) {
            if (!empty($map['List'])) {
                $model->list = [];
                $n           = 0;
                foreach ($map['List'] as $item) {
                    $model->list[$n++] = null !== $item ? list_::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
