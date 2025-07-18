<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SasRasp\V20240727\Models;

use AlibabaCloud\SDK\SasRasp\V20240727\Models\DescribeAttacksResponseBody\attacks;
use AlibabaCloud\Tea\Model;

class DescribeAttacksResponseBody extends Model
{
    /**
     * @var attacks[]
     */
    public $attacks;

    /**
     * @example 4E7772EA-1AD0-5583-BA55-A4E7B65F****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 289
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'attacks' => 'Attacks',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->attacks) {
            $res['Attacks'] = [];
            if (null !== $this->attacks && \is_array($this->attacks)) {
                $n = 0;
                foreach ($this->attacks as $item) {
                    $res['Attacks'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeAttacksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Attacks'])) {
            if (!empty($map['Attacks'])) {
                $model->attacks = [];
                $n = 0;
                foreach ($map['Attacks'] as $item) {
                    $model->attacks[$n++] = null !== $item ? attacks::fromMap($item) : $item;
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
