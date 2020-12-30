<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainRealTimeQpsDataResponseBody;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainRealTimeQpsDataResponseBody\data\qpsModel;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var qpsModel[]
     */
    public $qpsModel;
    protected $_name = [
        'qpsModel' => 'QpsModel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->qpsModel) {
            $res['QpsModel'] = [];
            if (null !== $this->qpsModel && \is_array($this->qpsModel)) {
                $n = 0;
                foreach ($this->qpsModel as $item) {
                    $res['QpsModel'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['QpsModel'])) {
            if (!empty($map['QpsModel'])) {
                $model->qpsModel = [];
                $n               = 0;
                foreach ($map['QpsModel'] as $item) {
                    $model->qpsModel[$n++] = null !== $item ? qpsModel::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
