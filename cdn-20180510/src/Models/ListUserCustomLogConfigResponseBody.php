<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\ListUserCustomLogConfigResponseBody\configIds;
use AlibabaCloud\Tea\Model;

class ListUserCustomLogConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var configIds
     */
    public $configIds;
    protected $_name = [
        'requestId' => 'RequestId',
        'configIds' => 'ConfigIds',
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
        if (null !== $this->configIds) {
            $res['ConfigIds'] = null !== $this->configIds ? $this->configIds->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ConfigIds'])) {
            $model->configIds = configIds::fromMap($map['ConfigIds']);
        }

        return $model;
    }
}
