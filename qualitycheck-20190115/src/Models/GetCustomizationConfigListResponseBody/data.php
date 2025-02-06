<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetCustomizationConfigListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetCustomizationConfigListResponseBody\data\modelCustomizationDataSetPo;

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
        if (\is_array($this->modelCustomizationDataSetPo)) {
            Model::validateArray($this->modelCustomizationDataSetPo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->modelCustomizationDataSetPo) {
            if (\is_array($this->modelCustomizationDataSetPo)) {
                $res['ModelCustomizationDataSetPo'] = [];
                $n1                                 = 0;
                foreach ($this->modelCustomizationDataSetPo as $item1) {
                    $res['ModelCustomizationDataSetPo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ModelCustomizationDataSetPo'])) {
            if (!empty($map['ModelCustomizationDataSetPo'])) {
                $model->modelCustomizationDataSetPo = [];
                $n1                                 = 0;
                foreach ($map['ModelCustomizationDataSetPo'] as $item1) {
                    $model->modelCustomizationDataSetPo[$n1++] = modelCustomizationDataSetPo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
