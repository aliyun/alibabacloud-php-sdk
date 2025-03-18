<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeRegionIspsResponseBody\isps;
use AlibabaCloud\Tea\Model;

class DescribeRegionIspsResponseBody extends Model
{
    /**
     * @description The list of ISPs.
     *
     * @var isps[]
     */
    public $isps;

    /**
     * @description The request ID.
     *
     * @example DC90CC7E-23B6-5A90-9097-A17CE4A161C4
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'isps' => 'Isps',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->isps) {
            $res['Isps'] = [];
            if (null !== $this->isps && \is_array($this->isps)) {
                $n = 0;
                foreach ($this->isps as $item) {
                    $res['Isps'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeRegionIspsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Isps'])) {
            if (!empty($map['Isps'])) {
                $model->isps = [];
                $n = 0;
                foreach ($map['Isps'] as $item) {
                    $model->isps[$n++] = null !== $item ? isps::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
