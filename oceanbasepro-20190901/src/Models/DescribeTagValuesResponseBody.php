<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class DescribeTagValuesResponseBody extends Model
{
    /**
     * @description The mappings between tag groups and tags.
     *
     * @example "{\\"Tag group 2\\":[\\"Tag 2-1\\",\\"Tag 2-2\\"],\\"Tag group 1\\":[\\"Tag 1-1\\"]}"
     *
     * @var string
     */
    public $map;

    /**
     * @description The ID of the request.
     *
     * @example 4C91F7BA-xxxx-xxxx-xxxx-846ECA1A9908
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'map'       => 'Map',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->map) {
            $res['Map'] = $this->map;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTagValuesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Map'])) {
            $model->map = $map['Map'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
