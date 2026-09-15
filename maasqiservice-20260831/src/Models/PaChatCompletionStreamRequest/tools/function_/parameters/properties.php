<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaasQIService\V20260831\Models\PaChatCompletionStreamRequest\tools\function_\parameters;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaasQIService\V20260831\Models\PaChatCompletionStreamRequest\tools\function_\parameters\properties\city;

class properties extends Model
{
    /**
     * @var city
     */
    public $city;
    protected $_name = [
        'city' => 'city',
    ];

    public function validate()
    {
        if (null !== $this->city) {
            $this->city->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->city) {
            $res['city'] = null !== $this->city ? $this->city->toArray($noStream) : $this->city;
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
        if (isset($map['city'])) {
            $model->city = city::fromMap($map['city']);
        }

        return $model;
    }
}
