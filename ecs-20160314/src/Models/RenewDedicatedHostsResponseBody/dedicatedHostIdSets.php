<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\RenewDedicatedHostsResponseBody;

use AlibabaCloud\Tea\Model;

class dedicatedHostIdSets extends Model
{
    /**
     * @var string[]
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
     * @return dedicatedHostIdSets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DedicatedHostId'])) {
            if (!empty($map['DedicatedHostId'])) {
                $model->dedicatedHostId = $map['DedicatedHostId'];
            }
        }

        return $model;
    }
}
