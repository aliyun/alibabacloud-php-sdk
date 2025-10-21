<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models\GetPolicyInfoResponseBody;

use AlibabaCloud\Dara\Model;

class promptAttackModelInfo extends Model
{
    /**
     * @var string
     */
    public $easServiceName;

    /**
     * @var int
     */
    public $modelInstanceId;
    protected $_name = [
        'easServiceName' => 'EasServiceName',
        'modelInstanceId' => 'ModelInstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->easServiceName) {
            $res['EasServiceName'] = $this->easServiceName;
        }

        if (null !== $this->modelInstanceId) {
            $res['ModelInstanceId'] = $this->modelInstanceId;
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
        if (isset($map['EasServiceName'])) {
            $model->easServiceName = $map['EasServiceName'];
        }

        if (isset($map['ModelInstanceId'])) {
            $model->modelInstanceId = $map['ModelInstanceId'];
        }

        return $model;
    }
}
