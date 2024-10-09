<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BDRC\V20230808\Models;

use AlibabaCloud\SDK\BDRC\V20230808\Models\GetBdrcServiceResponseBody\data;
use AlibabaCloud\Tea\Model;

class GetBdrcServiceResponseBody extends Model
{
    /**
     * @var data
     */
    public $data;

    /**
     * @example 5748C531-80B1-5C31-8421-63A1830B9E48
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'data'      => 'Data',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetBdrcServiceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
