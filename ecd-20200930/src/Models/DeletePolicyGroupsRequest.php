<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class DeletePolicyGroupsRequest extends Model
{
    /**
     * @var string[]
     */
    public $policyGroupId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'policyGroupId' => 'PolicyGroupId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->policyGroupId)) {
            Model::validateArray($this->policyGroupId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->policyGroupId) {
            if (\is_array($this->policyGroupId)) {
                $res['PolicyGroupId'] = [];
                $n1 = 0;
                foreach ($this->policyGroupId as $item1) {
                    $res['PolicyGroupId'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['PolicyGroupId'])) {
            if (!empty($map['PolicyGroupId'])) {
                $model->policyGroupId = [];
                $n1 = 0;
                foreach ($map['PolicyGroupId'] as $item1) {
                    $model->policyGroupId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
