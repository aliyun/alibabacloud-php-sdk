<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeInstanceAuthInfoResponseBody;

use AlibabaCloud\Dara\Model;

class apiKeys extends Model
{
    /**
     * @var string
     */
    public $anonKey;

    /**
     * @var string
     */
    public $serviceKey;
    protected $_name = [
        'anonKey' => 'AnonKey',
        'serviceKey' => 'ServiceKey',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->anonKey) {
            $res['AnonKey'] = $this->anonKey;
        }

        if (null !== $this->serviceKey) {
            $res['ServiceKey'] = $this->serviceKey;
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
        if (isset($map['AnonKey'])) {
            $model->anonKey = $map['AnonKey'];
        }

        if (isset($map['ServiceKey'])) {
            $model->serviceKey = $map['ServiceKey'];
        }

        return $model;
    }
}
