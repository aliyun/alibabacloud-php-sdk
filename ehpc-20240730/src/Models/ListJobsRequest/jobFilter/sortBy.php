<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListJobsRequest\jobFilter;

use AlibabaCloud\Dara\Model;

class sortBy extends Model
{
    /**
     * @var string
     */
    public $executeOrder;
    /**
     * @var string
     */
    public $pendOrder;
    /**
     * @var string
     */
    public $submitOrder;
    protected $_name = [
        'executeOrder' => 'ExecuteOrder',
        'pendOrder'    => 'PendOrder',
        'submitOrder'  => 'SubmitOrder',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->executeOrder) {
            $res['ExecuteOrder'] = $this->executeOrder;
        }

        if (null !== $this->pendOrder) {
            $res['PendOrder'] = $this->pendOrder;
        }

        if (null !== $this->submitOrder) {
            $res['SubmitOrder'] = $this->submitOrder;
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
        if (isset($map['ExecuteOrder'])) {
            $model->executeOrder = $map['ExecuteOrder'];
        }

        if (isset($map['PendOrder'])) {
            $model->pendOrder = $map['PendOrder'];
        }

        if (isset($map['SubmitOrder'])) {
            $model->submitOrder = $map['SubmitOrder'];
        }

        return $model;
    }
}
