<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeParametersHistoryResponseBody\respond;
use AlibabaCloud\Tea\Model;

class DescribeParametersHistoryResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example EE205C00-30E4-XXXX-XXXX-87E3A8A2AA0C
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The list of parameter modification records.
     *
     * @var respond
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
            $res['Respond'] = null !== $this->respond ? $this->respond->toMap() : null;
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
            $model->respond = respond::fromMap($map['Respond']);
        }

        return $model;
    }
}
