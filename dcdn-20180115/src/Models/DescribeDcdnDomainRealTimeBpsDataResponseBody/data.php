<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainRealTimeBpsDataResponseBody;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainRealTimeBpsDataResponseBody\data\bpsModel;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bpsModel) {
            $res['BpsModel'] = [];
            if (null !== $this->bpsModel && \is_array($this->bpsModel)) {
                $n = 0;
                foreach ($this->bpsModel as $item) {
                    $res['BpsModel'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['BpsModel'])) {
            if (!empty($map['BpsModel'])) {
                $model->bpsModel = [];
                $n               = 0;
                foreach ($map['BpsModel'] as $item) {
                    $model->bpsModel[$n++] = null !== $item ? bpsModel::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
