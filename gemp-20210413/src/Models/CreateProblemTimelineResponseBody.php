<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateProblemTimelineResponseBody\data;
use AlibabaCloud\Tea\Model;

class CreateProblemTimelineResponseBody extends Model
{
    /**
     * @description id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Object
     *
     * @var data
     */
    public $data;
    protected $_name = [
        'requestId' => 'requestId',
        'data'      => 'data',
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
        if (null !== $this->data) {
            $res['data'] = null !== $this->data ? $this->data->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateProblemTimelineResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['data'])) {
            $model->data = data::fromMap($map['data']);
        }

        return $model;
    }
}
