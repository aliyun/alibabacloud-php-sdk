<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetIncidentSubtotalCountResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description id of the request
     *
     * @example 24343424234
     *
     * @var string
     */
    public $requestId;

    /**
     * @description map
     *
     * @example {12:12}
     *
     * @var mixed[]
     */
    public $subtotalCount;
    protected $_name = [
        'requestId'     => 'requestId',
        'subtotalCount' => 'subtotalCount',
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
        if (null !== $this->subtotalCount) {
            $res['subtotalCount'] = $this->subtotalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['subtotalCount'])) {
            $model->subtotalCount = $map['subtotalCount'];
        }

        return $model;
    }
}
