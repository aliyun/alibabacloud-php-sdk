<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class CreatePortRangeListResponseBody extends Model
{
    /**
     * @description The ID of the port list.
     *
     * @example prl-2ze9743****
     *
     * @var string
     */
    public $portRangeListId;

    /**
     * @description The request ID.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'portRangeListId' => 'PortRangeListId',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->portRangeListId) {
            $res['PortRangeListId'] = $this->portRangeListId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePortRangeListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PortRangeListId'])) {
            $model->portRangeListId = $map['PortRangeListId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
