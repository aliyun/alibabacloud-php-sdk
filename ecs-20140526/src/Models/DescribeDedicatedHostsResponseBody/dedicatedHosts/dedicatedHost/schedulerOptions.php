<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostsResponseBody\dedicatedHosts\dedicatedHost;

use AlibabaCloud\Tea\Model;

class schedulerOptions extends Model
{
    /**
     * @var string
     */
    public $managedPrivateSpaceId;
    protected $_name = [
        'managedPrivateSpaceId' => 'ManagedPrivateSpaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->managedPrivateSpaceId) {
            $res['ManagedPrivateSpaceId'] = $this->managedPrivateSpaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return schedulerOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ManagedPrivateSpaceId'])) {
            $model->managedPrivateSpaceId = $map['ManagedPrivateSpaceId'];
        }

        return $model;
    }
}
