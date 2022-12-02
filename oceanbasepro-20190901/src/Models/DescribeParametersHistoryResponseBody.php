<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeParametersHistoryResponseBody\respond;
use AlibabaCloud\Tea\Model;

class DescribeParametersHistoryResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var respond[]
     */
    public $respond;
    protected $_name = [
        'requestId' => 'RequestId',
        'respond'   => 'Respond',
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
        if (null !== $this->respond) {
            $res['Respond'] = [];
            if (null !== $this->respond && \is_array($this->respond)) {
                $n = 0;
                foreach ($this->respond as $item) {
                    $res['Respond'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeParametersHistoryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Respond'])) {
            if (!empty($map['Respond'])) {
                $model->respond = [];
                $n              = 0;
                foreach ($map['Respond'] as $item) {
                    $model->respond[$n++] = null !== $item ? respond::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
