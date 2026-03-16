<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Dara\Model;

class CreateResourceGroupRequest extends Model
{
    /**
     * @var string
     */
    public $businessChannel;

    /**
     * @var int
     */
    public $isResourceGroupWithOfficeSite;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $resourceGroupName;
    protected $_name = [
        'businessChannel' => 'BusinessChannel',
        'isResourceGroupWithOfficeSite' => 'IsResourceGroupWithOfficeSite',
        'platform' => 'Platform',
        'resourceGroupName' => 'ResourceGroupName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->businessChannel) {
            $res['BusinessChannel'] = $this->businessChannel;
        }

        if (null !== $this->isResourceGroupWithOfficeSite) {
            $res['IsResourceGroupWithOfficeSite'] = $this->isResourceGroupWithOfficeSite;
        }

        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }

        if (null !== $this->resourceGroupName) {
            $res['ResourceGroupName'] = $this->resourceGroupName;
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
        if (isset($map['BusinessChannel'])) {
            $model->businessChannel = $map['BusinessChannel'];
        }

        if (isset($map['IsResourceGroupWithOfficeSite'])) {
            $model->isResourceGroupWithOfficeSite = $map['IsResourceGroupWithOfficeSite'];
        }

        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }

        if (isset($map['ResourceGroupName'])) {
            $model->resourceGroupName = $map['ResourceGroupName'];
        }

        return $model;
    }
}
