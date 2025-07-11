<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeVisitUasResponseBody\uas;
use AlibabaCloud\Tea\Model;

class DescribeVisitUasResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 2847CE98-AFAE-5A64-B80E-60461717F9DE
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The array of the top 10 user agents that are used to initiate requests.
     *
     * @var uas[]
     */
    public $uas;
    protected $_name = [
        'requestId' => 'RequestId',
        'uas' => 'Uas',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->uas) {
            $res['Uas'] = [];
            if (null !== $this->uas && \is_array($this->uas)) {
                $n = 0;
                foreach ($this->uas as $item) {
                    $res['Uas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVisitUasResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Uas'])) {
            if (!empty($map['Uas'])) {
                $model->uas = [];
                $n = 0;
                foreach ($map['Uas'] as $item) {
                    $model->uas[$n++] = null !== $item ? uas::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
