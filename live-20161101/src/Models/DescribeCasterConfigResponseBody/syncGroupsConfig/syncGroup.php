<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterConfigResponseBody\syncGroupsConfig;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterConfigResponseBody\syncGroupsConfig\syncGroup\resourceIds;
use AlibabaCloud\Tea\Model;

class syncGroup extends Model
{
    /**
     * @var string
     */
    public $hostResourceId;

    /**
     * @var int
     */
    public $mode;

    /**
     * @var resourceIds
     */
    public $resourceIds;
    protected $_name = [
        'hostResourceId' => 'HostResourceId',
        'mode'           => 'Mode',
        'resourceIds'    => 'ResourceIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostResourceId) {
            $res['HostResourceId'] = $this->hostResourceId;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->resourceIds) {
            $res['ResourceIds'] = null !== $this->resourceIds ? $this->resourceIds->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return syncGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostResourceId'])) {
            $model->hostResourceId = $map['HostResourceId'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['ResourceIds'])) {
            $model->resourceIds = resourceIds::fromMap($map['ResourceIds']);
        }

        return $model;
    }
}
