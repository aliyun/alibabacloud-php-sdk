<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudphone\V20201230\Models;

use AlibabaCloud\SDK\Cloudphone\V20201230\Models\ListInstanceTypesResponseBody\instanceTypes;
use AlibabaCloud\Tea\Model;

class ListInstanceTypesResponseBody extends Model
{
    /**
     * @var instanceTypes
     */
    public $instanceTypes;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceTypes' => 'InstanceTypes',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceTypes) {
            $res['InstanceTypes'] = null !== $this->instanceTypes ? $this->instanceTypes->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInstanceTypesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceTypes'])) {
            $model->instanceTypes = instanceTypes::fromMap($map['InstanceTypes']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
