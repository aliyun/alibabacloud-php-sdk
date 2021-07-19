<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\SDK\Oos\V20190601\Models\UpdateApplicationGroupResponseBody\applicationGroup;
use AlibabaCloud\Tea\Model;

class UpdateApplicationGroupResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var applicationGroup
     */
    public $applicationGroup;
    protected $_name = [
        'requestId'        => 'RequestId',
        'applicationGroup' => 'ApplicationGroup',
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
        if (null !== $this->applicationGroup) {
            $res['ApplicationGroup'] = null !== $this->applicationGroup ? $this->applicationGroup->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateApplicationGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ApplicationGroup'])) {
            $model->applicationGroup = applicationGroup::fromMap($map['ApplicationGroup']);
        }

        return $model;
    }
}
