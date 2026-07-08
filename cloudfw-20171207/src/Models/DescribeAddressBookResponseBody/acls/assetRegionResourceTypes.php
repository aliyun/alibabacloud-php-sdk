<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAddressBookResponseBody\acls;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAddressBookResponseBody\acls\assetRegionResourceTypes\resourceType;

class assetRegionResourceTypes extends Model
{
    /**
     * @var string
     */
    public $assetRegionId;

    /**
     * @var resourceType
     */
    public $resourceType;
    protected $_name = [
        'assetRegionId' => 'AssetRegionId',
        'resourceType' => 'ResourceType',
    ];

    public function validate()
    {
        if (null !== $this->resourceType) {
            $this->resourceType->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetRegionId) {
            $res['AssetRegionId'] = $this->assetRegionId;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = null !== $this->resourceType ? $this->resourceType->toArray($noStream) : $this->resourceType;
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
        if (isset($map['AssetRegionId'])) {
            $model->assetRegionId = $map['AssetRegionId'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = resourceType::fromMap($map['ResourceType']);
        }

        return $model;
    }
}
