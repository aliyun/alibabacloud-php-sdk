<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Tea\Model;

class DedicatedIpPoolCreateRequest extends Model
{
    /**
     * @description Purchased IP instance IDs, separated by commas; derived from the IP purchase instance IDs returned by the DedicatedIpNonePoolList interface.
     *
     * @example xxx,xxx
     *
     * @var string
     */
    public $buyResourceIds;

    /**
     * @description IP pool name;
     * Length should be 1-50 characters, allowing English letters, numbers, _, and -. The name cannot be modified after the IP pool is created.
     *
     * @example xxx
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'buyResourceIds' => 'BuyResourceIds',
        'name' => 'Name',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->buyResourceIds) {
            $res['BuyResourceIds'] = $this->buyResourceIds;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DedicatedIpPoolCreateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BuyResourceIds'])) {
            $model->buyResourceIds = $map['BuyResourceIds'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
