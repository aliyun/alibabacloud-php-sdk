<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models;

use AlibabaCloud\Tea\Model;

class DeleteExtraDataSourceResponseBody extends Model
{
    /**
     * @description 请求ID。
     *
     * @example 8B90B646-1678-41A3-B23F-EAC6587B0E48
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 返回参数。
     *
     * @var ExtraDataSource
     */
    public $result;
    protected $_name = [
        'requestId' => 'requestId',
        'result'    => 'result',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->result) {
            $res['result'] = null !== $this->result ? $this->result->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteExtraDataSourceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['result'])) {
            $model->result = ExtraDataSource::fromMap($map['result']);
        }

        return $model;
    }
}
