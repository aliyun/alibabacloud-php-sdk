<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedHostGroupsResponseBody;

use AlibabaCloud\Tea\Model;

class dedicatedHostGroups extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedHostGroupsResponseBody\dedicatedHostGroups\dedicatedHostGroups[]
     */
    public $dedicatedHostGroups;
    protected $_name = [
        'dedicatedHostGroups' => 'DedicatedHostGroups',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dedicatedHostGroups) {
            $res['DedicatedHostGroups'] = [];
            if (null !== $this->dedicatedHostGroups && \is_array($this->dedicatedHostGroups)) {
                $n = 0;
                foreach ($this->dedicatedHostGroups as $item) {
                    $res['DedicatedHostGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dedicatedHostGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DedicatedHostGroups'])) {
            if (!empty($map['DedicatedHostGroups'])) {
                $model->dedicatedHostGroups = [];
                $n                          = 0;
                foreach ($map['DedicatedHostGroups'] as $item) {
                    $model->dedicatedHostGroups[$n++] = null !== $item ? \AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedHostGroupsResponseBody\dedicatedHostGroups\dedicatedHostGroups::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
