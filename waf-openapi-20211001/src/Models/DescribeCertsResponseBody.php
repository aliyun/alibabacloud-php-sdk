<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCertsResponseBody\certs;
use AlibabaCloud\Tea\Model;

class DescribeCertsResponseBody extends Model
{
    /**
     * @description The certificates.
     *
     * @var certs[]
     */
    public $certs;

    /**
     * @description The request ID.
     *
     * @example 19511B0D-5AE0-5600-BB8A-DC2C8345****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 8
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'certs'      => 'Certs',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
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
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
