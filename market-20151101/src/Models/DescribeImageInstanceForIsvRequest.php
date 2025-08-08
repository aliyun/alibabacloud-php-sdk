<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models;

use AlibabaCloud\Dara\Model;

class DescribeImageInstanceForIsvRequest extends Model
{
    /**
     * @var int
     */
    public $customerPk;

    /**
     * @var string
     */
    public $ecsInstanceId;
    protected $_name = [
        'customerPk' => 'CustomerPk',
        'ecsInstanceId' => 'EcsInstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customerPk) {
            $res['CustomerPk'] = $this->customerPk;
        }

        if (null !== $this->ecsInstanceId) {
            $res['EcsInstanceId'] = $this->ecsInstanceId;
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
        if (isset($map['CustomerPk'])) {
            $model->customerPk = $map['CustomerPk'];
        }

        if (isset($map['EcsInstanceId'])) {
            $model->ecsInstanceId = $map['EcsInstanceId'];
        }

        return $model;
    }
}
