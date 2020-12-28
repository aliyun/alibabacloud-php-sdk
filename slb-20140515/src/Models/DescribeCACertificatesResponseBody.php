<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeCACertificatesResponseBody\CACertificates;
use AlibabaCloud\Tea\Model;

class DescribeCACertificatesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var CACertificates[]
     */
    public $CACertificates;
    protected $_name = [
        'requestId'      => 'RequestId',
        'CACertificates' => 'CACertificates',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->CACertificates) {
            $res['CACertificates'] = [];
            if (null !== $this->CACertificates && \is_array($this->CACertificates)) {
                $n = 0;
                foreach ($this->CACertificates as $item) {
                    $res['CACertificates'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCACertificatesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CACertificates'])) {
            if (!empty($map['CACertificates'])) {
                $model->CACertificates = [];
                $n                     = 0;
                foreach ($map['CACertificates'] as $item) {
                    $model->CACertificates[$n++] = null !== $item ? CACertificates::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
