<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainRealTimeBpsDataResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainRealTimeBpsDataResponseBody\data\bpsModel;

class data extends Model
{
    /**
     * @var bpsModel[]
     */
    public $bpsModel;
    protected $_name = [
        'bpsModel' => 'BpsModel',
    ];

    public function validate()
    {
        if (\is_array($this->bpsModel)) {
            Model::validateArray($this->bpsModel);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bpsModel) {
            if (\is_array($this->bpsModel)) {
                $res['BpsModel'] = [];
                $n1 = 0;
                foreach ($this->bpsModel as $item1) {
                    $res['BpsModel'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['BpsModel'])) {
            if (!empty($map['BpsModel'])) {
                $model->bpsModel = [];
                $n1 = 0;
                foreach ($map['BpsModel'] as $item1) {
                    $model->bpsModel[$n1] = bpsModel::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
