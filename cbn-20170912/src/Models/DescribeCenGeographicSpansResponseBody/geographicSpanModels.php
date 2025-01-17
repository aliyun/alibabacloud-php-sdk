<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenGeographicSpansResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenGeographicSpansResponseBody\geographicSpanModels\geographicSpanModel;

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
        if (\is_array($this->geographicSpanModel)) {
            Model::validateArray($this->geographicSpanModel);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->geographicSpanModel) {
            if (\is_array($this->geographicSpanModel)) {
                $res['GeographicSpanModel'] = [];
                $n1                         = 0;
                foreach ($this->geographicSpanModel as $item1) {
                    $res['GeographicSpanModel'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['GeographicSpanModel'])) {
            if (!empty($map['GeographicSpanModel'])) {
                $model->geographicSpanModel = [];
                $n1                         = 0;
                foreach ($map['GeographicSpanModel'] as $item1) {
                    $model->geographicSpanModel[$n1++] = geographicSpanModel::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
