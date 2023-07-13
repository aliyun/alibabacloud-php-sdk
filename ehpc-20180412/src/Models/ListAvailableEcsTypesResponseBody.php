<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListAvailableEcsTypesResponseBody\instanceTypeFamilies;
use AlibabaCloud\Tea\Model;

class ListAvailableEcsTypesResponseBody extends Model
{
    /**
     * @description The instance family to which the instance type belongs.
     *
     * @var instanceTypeFamilies
     */
    public $instanceTypeFamilies;

    /**
     * @description The request ID.
     *
     * @example D9DD3AF8-1F91-4075-8669-55D10E45****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Specifies whether preemptible instances are supported. Valid values:
     *
     *   false: not supported
     *   true: supported
     *
     * @example false
     *
     * @var bool
     */
    public $supportSpotInstance;
    protected $_name = [
        'instanceTypeFamilies' => 'InstanceTypeFamilies',
        'requestId'            => 'RequestId',
        'supportSpotInstance'  => 'SupportSpotInstance',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceTypeFamilies) {
            $res['InstanceTypeFamilies'] = null !== $this->instanceTypeFamilies ? $this->instanceTypeFamilies->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->supportSpotInstance) {
            $res['SupportSpotInstance'] = $this->supportSpotInstance;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAvailableEcsTypesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceTypeFamilies'])) {
            $model->instanceTypeFamilies = instanceTypeFamilies::fromMap($map['InstanceTypeFamilies']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SupportSpotInstance'])) {
            $model->supportSpotInstance = $map['SupportSpotInstance'];
        }

        return $model;
    }
}
