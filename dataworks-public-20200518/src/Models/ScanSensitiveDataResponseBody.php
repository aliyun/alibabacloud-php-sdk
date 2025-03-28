<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class ScanSensitiveDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mixed[]
     */
    public $sensitives;
    protected $_name = [
        'requestId' => 'RequestId',
        'sensitives' => 'Sensitives',
    ];

    public function validate()
    {
        if (\is_array($this->sensitives)) {
            Model::validateArray($this->sensitives);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sensitives) {
            if (\is_array($this->sensitives)) {
                $res['Sensitives'] = [];
                foreach ($this->sensitives as $key1 => $value1) {
                    $res['Sensitives'][$key1] = $value1;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Sensitives'])) {
            if (!empty($map['Sensitives'])) {
                $model->sensitives = [];
                foreach ($map['Sensitives'] as $key1 => $value1) {
                    $model->sensitives[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
