<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\ListUserCustomLogConfigResponseBody\configIds;
use AlibabaCloud\Tea\Model;

class ListUserCustomLogConfigResponseBody extends Model
{
    /**
     * @var configIds
     */
    public $configIds;

    /**
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
