<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Tea\Model;

class CreateCostCenterShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $costCenterEntityListShrink;

    /**
     * @example 2084210001
     *
     * @var string
     */
    public $nbid;
    protected $_name = [
        'costCenterEntityListShrink' => 'CostCenterEntityList',
        'nbid' => 'Nbid',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->costCenterEntityListShrink) {
            $res['CostCenterEntityList'] = $this->costCenterEntityListShrink;
        }
        if (null !== $this->nbid) {
            $res['Nbid'] = $this->nbid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCostCenterShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CostCenterEntityList'])) {
            $model->costCenterEntityListShrink = $map['CostCenterEntityList'];
        }
        if (isset($map['Nbid'])) {
            $model->nbid = $map['Nbid'];
        }

        return $model;
    }
}
