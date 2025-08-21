<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainBpsDataByTimeStampResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainBpsDataByTimeStampResponseBody\bpsDataList\bpsDataModel;

class bpsDataList extends Model
{
    /**
     * @var bpsDataModel[]
     */
    public $bpsDataModel;
    protected $_name = [
        'bpsDataModel' => 'BpsDataModel',
    ];

    public function validate()
    {
        if (\is_array($this->bpsDataModel)) {
            Model::validateArray($this->bpsDataModel);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bpsDataModel) {
            if (\is_array($this->bpsDataModel)) {
                $res['BpsDataModel'] = [];
                $n1 = 0;
                foreach ($this->bpsDataModel as $item1) {
                    $res['BpsDataModel'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['BpsDataModel'])) {
            if (!empty($map['BpsDataModel'])) {
                $model->bpsDataModel = [];
                $n1 = 0;
                foreach ($map['BpsDataModel'] as $item1) {
                    $model->bpsDataModel[$n1] = bpsDataModel::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
