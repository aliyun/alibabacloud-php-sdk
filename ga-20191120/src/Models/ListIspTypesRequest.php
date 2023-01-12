<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class ListIspTypesRequest extends Model
{
    /**
     * @example basic
     *
     * @var string
     */
    public $acceleratorType;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $businessRegionId;
    protected $_name = [
        'acceleratorType'  => 'AcceleratorType',
        'businessRegionId' => 'BusinessRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceleratorType) {
            $res['AcceleratorType'] = $this->acceleratorType;
        }
        if (null !== $this->businessRegionId) {
            $res['BusinessRegionId'] = $this->businessRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListIspTypesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceleratorType'])) {
            $model->acceleratorType = $map['AcceleratorType'];
        }
        if (isset($map['BusinessRegionId'])) {
            $model->businessRegionId = $map['BusinessRegionId'];
        }

        return $model;
    }
}
