<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetCustomizationConfigListResponseBody;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetCustomizationConfigListResponseBody\data\modelCustomizationDataSetPo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var modelCustomizationDataSetPo[]
     */
    public $modelCustomizationDataSetPo;
    protected $_name = [
        'modelCustomizationDataSetPo' => 'ModelCustomizationDataSetPo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->modelCustomizationDataSetPo) {
            $res['ModelCustomizationDataSetPo'] = [];
            if (null !== $this->modelCustomizationDataSetPo && \is_array($this->modelCustomizationDataSetPo)) {
                $n = 0;
                foreach ($this->modelCustomizationDataSetPo as $item) {
                    $res['ModelCustomizationDataSetPo'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['ModelCustomizationDataSetPo'])) {
            if (!empty($map['ModelCustomizationDataSetPo'])) {
                $model->modelCustomizationDataSetPo = [];
                $n                                  = 0;
                foreach ($map['ModelCustomizationDataSetPo'] as $item) {
                    $model->modelCustomizationDataSetPo[$n++] = null !== $item ? modelCustomizationDataSetPo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
