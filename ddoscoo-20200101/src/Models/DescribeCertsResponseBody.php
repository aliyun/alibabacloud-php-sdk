<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeCertsResponseBody\certs;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certs) {
            $res['Certs'] = [];
            if (null !== $this->certs && \is_array($this->certs)) {
                $n = 0;
                foreach ($this->certs as $item) {
                    $res['Certs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCertsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Certs'])) {
            if (!empty($map['Certs'])) {
                $model->certs = [];
                $n            = 0;
                foreach ($map['Certs'] as $item) {
                    $model->certs[$n++] = null !== $item ? certs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
