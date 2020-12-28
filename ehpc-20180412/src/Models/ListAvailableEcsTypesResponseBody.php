<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListAvailableEcsTypesResponseBody\instanceTypeFamilies;
use AlibabaCloud\Tea\Model;

class ListAvailableEcsTypesResponseBody extends Model
{
    /**
     * @var bool
     */
    public $supportSpotInstance;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var instanceTypeFamilies[]
     */
    public $instanceTypeFamilies;
    protected $_name = [
        'supportSpotInstance'  => 'SupportSpotInstance',
        'requestId'            => 'RequestId',
        'instanceTypeFamilies' => 'InstanceTypeFamilies',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportSpotInstance) {
            $res['SupportSpotInstance'] = $this->supportSpotInstance;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->instanceTypeFamilies) {
            $res['InstanceTypeFamilies'] = [];
            if (null !== $this->instanceTypeFamilies && \is_array($this->instanceTypeFamilies)) {
                $n = 0;
                foreach ($this->instanceTypeFamilies as $item) {
                    $res['InstanceTypeFamilies'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['SupportSpotInstance'])) {
            $model->supportSpotInstance = $map['SupportSpotInstance'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['InstanceTypeFamilies'])) {
            if (!empty($map['InstanceTypeFamilies'])) {
                $model->instanceTypeFamilies = [];
                $n                           = 0;
                foreach ($map['InstanceTypeFamilies'] as $item) {
                    $model->instanceTypeFamilies[$n++] = null !== $item ? instanceTypeFamilies::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
