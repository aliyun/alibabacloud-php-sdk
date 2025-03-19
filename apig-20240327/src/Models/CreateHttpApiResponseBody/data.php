<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\CreateHttpApiResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description HTTP API ID.
     *
     * @example api-xxx
     *
     * @var string
     */
    public $httpApiId;

    /**
     * @description Name of the API.
     *
     * @example test-api
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'httpApiId' => 'httpApiId',
        'name' => 'name',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->httpApiId) {
            $res['httpApiId'] = $this->httpApiId;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['httpApiId'])) {
            $model->httpApiId = $map['httpApiId'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
