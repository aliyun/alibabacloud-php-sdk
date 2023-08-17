<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Advisor\V20180120\Models;

use AlibabaCloud\SDK\Advisor\V20180120\Models\RefreshAdvisorCheckResponseBody\data;
use AlibabaCloud\Tea\Model;

class RefreshAdvisorCheckResponseBody extends Model
{
    /**
     * @var data
     */
    public $data;

    /**
     * @example 566331F9-5AB3-550F-B745-A730331F97A9
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
     * @return RefreshAdvisorCheckResponseBody
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
