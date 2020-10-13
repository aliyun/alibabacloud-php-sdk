<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pcdn\V20170411\Models\GetFeeHistoryResponse;

use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetFeeHistoryResponse\feeList\fee;
use AlibabaCloud\Tea\Model;

class feeList extends Model
{
    /**
     * @var fee[]
     */
    public $fee;
    protected $_name = [
        'fee' => 'Fee',
    ];

    public function validate()
    {
        Model::validateRequired('fee', $this->fee, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fee) {
            $res['Fee'] = [];
            if (null !== $this->fee && \is_array($this->fee)) {
                $n = 0;
                foreach ($this->fee as $item) {
                    $res['Fee'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return feeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Fee'])) {
            if (!empty($map['Fee'])) {
                $model->fee = [];
                $n          = 0;
                foreach ($map['Fee'] as $item) {
                    $model->fee[$n++] = null !== $item ? fee::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
