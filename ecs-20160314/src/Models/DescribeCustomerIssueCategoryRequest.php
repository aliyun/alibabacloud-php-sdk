<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\Tea\Model;

class DescribeCustomerIssueCategoryRequest extends Model
{
    /**
     * @var int
     */
    public $layer;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'layer'    => 'Layer',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->layer) {
            $res['Layer'] = $this->layer;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCustomerIssueCategoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Layer'])) {
            $model->layer = $map['Layer'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
