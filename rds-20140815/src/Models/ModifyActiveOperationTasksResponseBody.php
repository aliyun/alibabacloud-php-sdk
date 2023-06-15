<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyActiveOperationTasksResponseBody extends Model
{
    /**
     * @description The ID of the O\&M task. IDs are separated by commas (,).
     *
     * @example 11111,22222
     *
     * @var string
     */
    public $ids;

    /**
     * @description The ID of the region.
     *
     * @example E9ADB6BE-1598-57FC-B86D-D7F4C69B****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ids'       => 'Ids',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ids) {
            $res['Ids'] = $this->ids;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyActiveOperationTasksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ids'])) {
            $model->ids = $map['Ids'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
