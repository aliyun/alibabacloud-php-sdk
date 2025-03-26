<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDedicatedHostGroupsResponseBody\dedicatedHostGroups;

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
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->dedicatedHostGroups) {
            $this->dedicatedHostGroups->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dedicatedHostGroups) {
            $res['DedicatedHostGroups'] = null !== $this->dedicatedHostGroups ? $this->dedicatedHostGroups->toArray($noStream) : $this->dedicatedHostGroups;
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
        if (isset($map['DedicatedHostGroups'])) {
            $model->dedicatedHostGroups = dedicatedHostGroups::fromMap($map['DedicatedHostGroups']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
