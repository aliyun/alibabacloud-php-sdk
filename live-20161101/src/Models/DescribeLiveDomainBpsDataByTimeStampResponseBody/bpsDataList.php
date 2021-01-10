<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainBpsDataByTimeStampResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainBpsDataByTimeStampResponseBody\bpsDataList\bpsDataModel;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bpsDataModel) {
            $res['BpsDataModel'] = [];
            if (null !== $this->bpsDataModel && \is_array($this->bpsDataModel)) {
                $n = 0;
                foreach ($this->bpsDataModel as $item) {
                    $res['BpsDataModel'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bpsDataList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BpsDataModel'])) {
            if (!empty($map['BpsDataModel'])) {
                $model->bpsDataModel = [];
                $n                   = 0;
                foreach ($map['BpsDataModel'] as $item) {
                    $model->bpsDataModel[$n++] = null !== $item ? bpsDataModel::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
