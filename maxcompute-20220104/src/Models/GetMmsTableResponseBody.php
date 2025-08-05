<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetMmsTableResponseBody\data;
use AlibabaCloud\Tea\Model;

class GetMmsTableResponseBody extends Model
{
    /**
     * @var data
     */
    public $data;

    /**
     * @example E7FB14F1-4ACD-5C73-A755-B302D70AB9AD
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'data' => 'data',
        'requestId' => 'requestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMmsTableResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['data'])) {
            $model->data = data::fromMap($map['data']);
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
