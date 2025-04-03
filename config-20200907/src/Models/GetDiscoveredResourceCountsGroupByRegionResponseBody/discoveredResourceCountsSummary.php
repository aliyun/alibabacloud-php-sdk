<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetDiscoveredResourceCountsGroupByRegionResponseBody;

use AlibabaCloud\Dara\Model;

class discoveredResourceCountsSummary extends Model
{
    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $region;

    /**
     * @var int
     */
    public $resourceCount;
    protected $_name = [
        'groupName' => 'GroupName',
        'region' => 'Region',
        'resourceCount' => 'ResourceCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->resourceCount) {
            $res['ResourceCount'] = $this->resourceCount;
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
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['ResourceCount'])) {
            $model->resourceCount = $map['ResourceCount'];
        }

        return $model;
    }
}
