<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\CreateDedicatedHostResponseBody\dedicateHostList;

use AlibabaCloud\Tea\Model;

class dedicateHostList extends Model
{
    /**
     * @var string
     */
    public $dedicatedHostId;
    protected $_name = [
        'dedicatedHostId' => 'DedicatedHostId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dedicatedHostId) {
            $res['DedicatedHostId'] = $this->dedicatedHostId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dedicateHostList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DedicatedHostId'])) {
            $model->dedicatedHostId = $map['DedicatedHostId'];
        }

        return $model;
    }
}
