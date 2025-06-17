<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cdn\V20180510\Models\ListUserCustomLogConfigResponseBody\configIds;

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
        if (null !== $this->configIds) {
            $this->configIds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configIds) {
            $res['ConfigIds'] = null !== $this->configIds ? $this->configIds->toArray($noStream) : $this->configIds;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
