<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Databot\V20200330\Models;

use AlibabaCloud\Tea\Model;

class QueryDatabotResponseBody extends Model
{
    /**
     * @var int
     */
    public $costTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mixed[]
     */
    public $data;
    protected $_name = [
        'costTime'  => 'CostTime',
        'requestId' => 'RequestId',
        'data'      => 'Data',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->costTime) {
            $res['CostTime'] = $this->costTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDatabotResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CostTime'])) {
            $model->costTime = $map['CostTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }

        return $model;
    }
}
