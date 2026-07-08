<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCSandbox\V20260509\Models;

use AlibabaCloud\Dara\Model;

class NetworkConfiguration extends Model
{
    /**
     * @var string
     */
    public $networkMode;

    /**
     * @var string
     */
    public $securityGroupID;

    /**
     * @var string
     */
    public $vpcID;

    /**
     * @var string[]
     */
    public $vswitchIDs;
    protected $_name = [
        'networkMode' => 'networkMode',
        'securityGroupID' => 'securityGroupID',
        'vpcID' => 'vpcID',
        'vswitchIDs' => 'vswitchIDs',
    ];

    public function validate()
    {
        if (\is_array($this->vswitchIDs)) {
            Model::validateArray($this->vswitchIDs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->networkMode) {
            $res['networkMode'] = $this->networkMode;
        }

        if (null !== $this->securityGroupID) {
            $res['securityGroupID'] = $this->securityGroupID;
        }

        if (null !== $this->vpcID) {
            $res['vpcID'] = $this->vpcID;
        }

        if (null !== $this->vswitchIDs) {
            if (\is_array($this->vswitchIDs)) {
                $res['vswitchIDs'] = [];
                $n1 = 0;
                foreach ($this->vswitchIDs as $item1) {
                    $res['vswitchIDs'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['networkMode'])) {
            $model->networkMode = $map['networkMode'];
        }

        if (isset($map['securityGroupID'])) {
            $model->securityGroupID = $map['securityGroupID'];
        }

        if (isset($map['vpcID'])) {
            $model->vpcID = $map['vpcID'];
        }

        if (isset($map['vswitchIDs'])) {
            if (!empty($map['vswitchIDs'])) {
                $model->vswitchIDs = [];
                $n1 = 0;
                foreach ($map['vswitchIDs'] as $item1) {
                    $model->vswitchIDs[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
