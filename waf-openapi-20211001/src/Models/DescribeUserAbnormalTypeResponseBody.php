<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeUserAbnormalTypeResponseBody\abnormal;
use AlibabaCloud\Tea\Model;

class DescribeUserAbnormalTypeResponseBody extends Model
{
    /**
     * @description The types and statistics of risks.
     *
     * @var abnormal[]
     */
    public $abnormal;

    /**
     * @description The request ID.
     *
     * @example 3E1CB966-1407-5988-9432-7***D784
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'abnormal' => 'Abnormal',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->abnormal) {
            $res['Abnormal'] = [];
            if (null !== $this->abnormal && \is_array($this->abnormal)) {
                $n = 0;
                foreach ($this->abnormal as $item) {
                    $res['Abnormal'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeUserAbnormalTypeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Abnormal'])) {
            if (!empty($map['Abnormal'])) {
                $model->abnormal = [];
                $n = 0;
                foreach ($map['Abnormal'] as $item) {
                    $model->abnormal[$n++] = null !== $item ? abnormal::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
