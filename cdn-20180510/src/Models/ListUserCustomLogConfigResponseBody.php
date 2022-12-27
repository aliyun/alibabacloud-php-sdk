<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\ListUserCustomLogConfigResponseBody\configIds;
use AlibabaCloud\Tea\Model;

class ListUserCustomLogConfigResponseBody extends Model
{
    /**
     * @description The list of configuration ID.
     *
     * @var configIds
     */
    public $configIds;

    /**
     * @description The ID of the request.
     *
     * @example 95D5B69F-8AEC-419B-8F3A-612B35032B0D
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'configIds' => 'ConfigIds',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configIds) {
            $res['ConfigIds'] = null !== $this->configIds ? $this->configIds->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUserCustomLogConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigIds'])) {
            $model->configIds = configIds::fromMap($map['ConfigIds']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
