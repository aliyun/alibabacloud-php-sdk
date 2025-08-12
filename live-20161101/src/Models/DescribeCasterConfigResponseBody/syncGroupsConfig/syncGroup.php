<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterConfigResponseBody\syncGroupsConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterConfigResponseBody\syncGroupsConfig\syncGroup\resourceIds;

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
        'mode' => 'Mode',
        'resourceIds' => 'ResourceIds',
    ];

    public function validate()
    {
        if (null !== $this->resourceIds) {
            $this->resourceIds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hostResourceId) {
            $res['HostResourceId'] = $this->hostResourceId;
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->resourceIds) {
            $res['ResourceIds'] = null !== $this->resourceIds ? $this->resourceIds->toArray($noStream) : $this->resourceIds;
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
