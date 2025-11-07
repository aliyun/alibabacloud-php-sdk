<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Oos\V20190601\Models\UpdateApplicationGroupResponseBody\applicationGroup;

class UpdateApplicationGroupResponseBody extends Model
{
    /**
     * @var applicationGroup
     */
    public $applicationGroup;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'applicationGroup' => 'ApplicationGroup',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->applicationGroup) {
            $this->applicationGroup->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationGroup) {
            $res['ApplicationGroup'] = null !== $this->applicationGroup ? $this->applicationGroup->toArray($noStream) : $this->applicationGroup;
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
        if (isset($map['ApplicationGroup'])) {
            $model->applicationGroup = applicationGroup::fromMap($map['ApplicationGroup']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
