<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\Tea\Model;

class ListInstanceStatisticsResponseBody extends Model
{
    /**
     * @description 请求Id
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 统计信息
     *
     * @var mixed[][]
     */
    public $statistics;
    protected $_name = [
        'requestId'  => 'RequestId',
        'statistics' => 'Statistics',
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
        if (null !== $this->statistics) {
            $res['Statistics'] = $this->statistics;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInstanceStatisticsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Statistics'])) {
            $model->statistics = $map['Statistics'];
        }

        return $model;
    }
}
