<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class GetRoutineStagingEnvIpResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $IPV4;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'IPV4' => 'IPV4',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->IPV4)) {
            Model::validateArray($this->IPV4);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->IPV4) {
            if (\is_array($this->IPV4)) {
                $res['IPV4'] = [];
                $n1 = 0;
                foreach ($this->IPV4 as $item1) {
                    $res['IPV4'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['IPV4'])) {
            if (!empty($map['IPV4'])) {
                $model->IPV4 = [];
                $n1 = 0;
                foreach ($map['IPV4'] as $item1) {
                    $model->IPV4[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
