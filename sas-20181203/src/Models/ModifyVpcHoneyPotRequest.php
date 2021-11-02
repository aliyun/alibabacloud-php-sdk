<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyVpcHoneyPotRequest extends Model
{
    /**
     * @var string
     */
    public $honeyPotAction;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'honeyPotAction' => 'HoneyPotAction',
        'vpcId'          => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->honeyPotAction) {
            $res['HoneyPotAction'] = $this->honeyPotAction;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['HoneyPotAction'])) {
            $model->honeyPotAction = $map['HoneyPotAction'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
