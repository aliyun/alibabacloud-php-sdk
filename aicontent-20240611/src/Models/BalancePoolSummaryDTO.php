<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class BalancePoolSummaryDTO extends Model
{
    /**
     * @var float
     */
    public $allocated;

    /**
     * @var float
     */
    public $available;

    /**
     * @var float
     */
    public $total;
    protected $_name = [
        'allocated' => 'allocated',
        'available' => 'available',
        'total' => 'total',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allocated) {
            $res['allocated'] = $this->allocated;
        }

        if (null !== $this->available) {
            $res['available'] = $this->available;
        }

        if (null !== $this->total) {
            $res['total'] = $this->total;
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
        if (isset($map['allocated'])) {
            $model->allocated = $map['allocated'];
        }

        if (isset($map['available'])) {
            $model->available = $map['available'];
        }

        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
