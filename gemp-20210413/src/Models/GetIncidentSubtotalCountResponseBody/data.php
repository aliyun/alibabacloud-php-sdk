<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetIncidentSubtotalCountResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description map
     *
     * @var mixed[]
     */
    public $subtotalCount;

    /**
     * @description id of the request
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'subtotalCount' => 'subtotalCount',
        'requestId'     => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subtotalCount) {
            $res['subtotalCount'] = $this->subtotalCount;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['subtotalCount'])) {
            $model->subtotalCount = $map['subtotalCount'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
