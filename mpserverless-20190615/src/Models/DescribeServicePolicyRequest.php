<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class DescribeServicePolicyRequest extends Model
{
    /**
     * @var string
     */
    public $spaceId;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $collectionName;
    protected $_name = [
        'spaceId'        => 'SpaceId',
        'serviceName'    => 'ServiceName',
        'collectionName' => 'CollectionName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->collectionName) {
            $res['CollectionName'] = $this->collectionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeServicePolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['CollectionName'])) {
            $model->collectionName = $map['CollectionName'];
        }

        return $model;
    }
}
