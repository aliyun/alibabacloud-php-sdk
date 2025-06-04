<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedHostGroupsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedHostGroupsResponseBody\dedicatedHostGroups\dedicatedHostGroups;

class dedicatedHostGroups extends Model
{
    /**
     * @var dedicatedHostGroups[]
     */
    public $dedicatedHostGroups;
    protected $_name = [
        'dedicatedHostGroups' => 'DedicatedHostGroups',
    ];

    public function validate()
    {
        if (\is_array($this->dedicatedHostGroups)) {
            Model::validateArray($this->dedicatedHostGroups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dedicatedHostGroups) {
            if (\is_array($this->dedicatedHostGroups)) {
                $res['DedicatedHostGroups'] = [];
                $n1 = 0;
                foreach ($this->dedicatedHostGroups as $item1) {
                    $res['DedicatedHostGroups'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
            if (!empty($map['DedicatedHostGroups'])) {
                $model->dedicatedHostGroups = [];
                $n1 = 0;
                foreach ($map['DedicatedHostGroups'] as $item1) {
                    $model->dedicatedHostGroups[$n1++] = self::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
