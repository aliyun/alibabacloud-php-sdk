<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class GetDiscoveredResourceCountsGroupByResourceTypeRequest extends Model
{
    /**
     * @description The ID of the region where the resource resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;
    protected $_name = [
        'region' => 'Region',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDiscoveredResourceCountsGroupByResourceTypeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        return $model;
    }
}
