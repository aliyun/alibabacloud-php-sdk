<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyVpcHoneyPotRequest extends Model
{
    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $honeyPotAction;
    protected $_name = [
        'vpcId'          => 'VpcId',
        'honeyPotAction' => 'HoneyPotAction',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->honeyPotAction) {
            $res['HoneyPotAction'] = $this->honeyPotAction;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyVpcHoneyPotRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['HoneyPotAction'])) {
            $model->honeyPotAction = $map['HoneyPotAction'];
        }

        return $model;
    }
}
