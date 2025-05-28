<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Dara\Model;

class ModifyCostCenterShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $costCenterEntityListShrink;

    /**
     * @var string
     */
    public $nbid;
    protected $_name = [
        'costCenterEntityListShrink' => 'CostCenterEntityList',
        'nbid' => 'Nbid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
