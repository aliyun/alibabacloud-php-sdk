<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCanFixVulListResponseBody\vulRecords;
use AlibabaCloud\Tea\Model;

class DescribeCanFixVulListResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 1408FDB3-46F4-513C-9918-FE7D356DF048
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the vulnerability.
     *
     * @var vulRecords[]
     */
    public $vulRecords;
    protected $_name = [
        'requestId'  => 'RequestId',
        'vulRecords' => 'VulRecords',
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
        if (null !== $this->vulRecords) {
            $res['VulRecords'] = [];
            if (null !== $this->vulRecords && \is_array($this->vulRecords)) {
                $n = 0;
                foreach ($this->vulRecords as $item) {
                    $res['VulRecords'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCanFixVulListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VulRecords'])) {
            if (!empty($map['VulRecords'])) {
                $model->vulRecords = [];
                $n                 = 0;
                foreach ($map['VulRecords'] as $item) {
                    $model->vulRecords[$n++] = null !== $item ? vulRecords::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
