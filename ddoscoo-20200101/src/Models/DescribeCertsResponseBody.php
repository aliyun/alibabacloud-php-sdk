<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeCertsResponseBody\certs;

class DescribeCertsResponseBody extends Model
{
    /**
     * @var certs[]
     */
    public $certs;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'certs'     => 'Certs',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->certs)) {
            Model::validateArray($this->certs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certs) {
            if (\is_array($this->certs)) {
                $res['Certs'] = [];
                $n1           = 0;
                foreach ($this->certs as $item1) {
                    $res['Certs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Certs'])) {
            if (!empty($map['Certs'])) {
                $model->certs = [];
                $n1           = 0;
                foreach ($map['Certs'] as $item1) {
                    $model->certs[$n1++] = certs::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
