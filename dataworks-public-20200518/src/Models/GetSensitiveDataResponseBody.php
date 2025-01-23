<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class GetSensitiveDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var mixed[]
     */
    public $sensitiveData;
    protected $_name = [
        'requestId'     => 'RequestId',
        'sensitiveData' => 'SensitiveData',
    ];

    public function validate()
    {
        if (\is_array($this->sensitiveData)) {
            Model::validateArray($this->sensitiveData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sensitiveData) {
            if (\is_array($this->sensitiveData)) {
                $res['SensitiveData'] = [];
                foreach ($this->sensitiveData as $key1 => $value1) {
                    $res['SensitiveData'][$key1] = $value1;
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

        if (isset($map['SensitiveData'])) {
            if (!empty($map['SensitiveData'])) {
                $model->sensitiveData = [];
                foreach ($map['SensitiveData'] as $key1 => $value1) {
                    $model->sensitiveData[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
