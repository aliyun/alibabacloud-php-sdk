<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class ListBucUserEnterpriseRequest extends Model
{
    /**
     * @var string
     */
    public $empId;
    protected $_name = [
        'empId' => 'empId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->empId) {
            $res['empId'] = $this->empId;
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
        if (isset($map['empId'])) {
            $model->empId = $map['empId'];
        }

        return $model;
    }
}
