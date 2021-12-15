<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models;

use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedHostGroupsResponseBody\dedicatedHostGroups;
use AlibabaCloud\Tea\Model;

class DescribeDedicatedHostGroupsResponseBody extends Model
{
    /**
     * @var dedicatedHostGroups
     */
    public $dedicatedHostGroups;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dedicatedHostGroups' => 'DedicatedHostGroups',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dedicatedHostGroups) {
            $res['DedicatedHostGroups'] = null !== $this->dedicatedHostGroups ? $this->dedicatedHostGroups->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDedicatedHostGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DedicatedHostGroups'])) {
            $model->dedicatedHostGroups = dedicatedHostGroups::fromMap($map['DedicatedHostGroups']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
