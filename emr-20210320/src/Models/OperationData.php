<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class OperationData extends Model
{
    /**
     * @var int
     */
    public $actualDeliveredAmounts;

    /**
     * @var int
     */
    public $toBeDeliveredAmounts;
    protected $_name = [
        'actualDeliveredAmounts' => 'actualDeliveredAmounts',
        'toBeDeliveredAmounts'   => 'toBeDeliveredAmounts',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actualDeliveredAmounts) {
            $res['actualDeliveredAmounts'] = $this->actualDeliveredAmounts;
        }
        if (null !== $this->toBeDeliveredAmounts) {
            $res['toBeDeliveredAmounts'] = $this->toBeDeliveredAmounts;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OperationData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['actualDeliveredAmounts'])) {
            $model->actualDeliveredAmounts = $map['actualDeliveredAmounts'];
        }
        if (isset($map['toBeDeliveredAmounts'])) {
            $model->toBeDeliveredAmounts = $map['toBeDeliveredAmounts'];
        }

        return $model;
    }
}
