<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Tea\Model;

class DedicatedIpPoolUpdateRequest extends Model
{
    /**
     * @description Purchased IP instance IDs, separated by commas; sourced from the DedicatedIpNonePoolList API\\"s returned IP purchase instance IDs
     *
     * @example xxx,xxx
     *
     * @var string
     */
    public $buyResourceIds;

    /**
     * @description IP pool ID
     *
     * @example xxx
     *
     * @var string
     */
    public $id;

    /**
     * @description Whether to change the associated IP, enter true
     *
     * @example true
     *
     * @var bool
     */
    public $updateResource;
    protected $_name = [
        'buyResourceIds' => 'BuyResourceIds',
        'id' => 'Id',
        'updateResource' => 'UpdateResource',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->buyResourceIds) {
            $res['BuyResourceIds'] = $this->buyResourceIds;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->updateResource) {
            $res['UpdateResource'] = $this->updateResource;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DedicatedIpPoolUpdateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BuyResourceIds'])) {
            $model->buyResourceIds = $map['BuyResourceIds'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['UpdateResource'])) {
            $model->updateResource = $map['UpdateResource'];
        }

        return $model;
    }
}
