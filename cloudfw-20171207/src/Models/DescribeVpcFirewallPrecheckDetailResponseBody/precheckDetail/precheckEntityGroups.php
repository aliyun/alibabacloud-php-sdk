<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallPrecheckDetailResponseBody\precheckDetail;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallPrecheckDetailResponseBody\precheckDetail\precheckEntityGroups\precheckEntities;

class precheckEntityGroups extends Model
{
    /**
     * @var int
     */
    public $failedCount;

    /**
     * @var string
     */
    public $name;

    /**
     * @var precheckEntities[]
     */
    public $precheckEntities;

    /**
     * @var string
     */
    public $precheckEntityGroupStatus;
    protected $_name = [
        'failedCount' => 'FailedCount',
        'name' => 'Name',
        'precheckEntities' => 'PrecheckEntities',
        'precheckEntityGroupStatus' => 'PrecheckEntityGroupStatus',
    ];

    public function validate()
    {
        if (\is_array($this->precheckEntities)) {
            Model::validateArray($this->precheckEntities);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failedCount) {
            $res['FailedCount'] = $this->failedCount;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->precheckEntities) {
            if (\is_array($this->precheckEntities)) {
                $res['PrecheckEntities'] = [];
                $n1 = 0;
                foreach ($this->precheckEntities as $item1) {
                    $res['PrecheckEntities'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->precheckEntityGroupStatus) {
            $res['PrecheckEntityGroupStatus'] = $this->precheckEntityGroupStatus;
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
        if (isset($map['FailedCount'])) {
            $model->failedCount = $map['FailedCount'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PrecheckEntities'])) {
            if (!empty($map['PrecheckEntities'])) {
                $model->precheckEntities = [];
                $n1 = 0;
                foreach ($map['PrecheckEntities'] as $item1) {
                    $model->precheckEntities[$n1] = precheckEntities::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PrecheckEntityGroupStatus'])) {
            $model->precheckEntityGroupStatus = $map['PrecheckEntityGroupStatus'];
        }

        return $model;
    }
}
