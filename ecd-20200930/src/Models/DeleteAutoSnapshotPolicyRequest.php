<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class DeleteAutoSnapshotPolicyRequest extends Model
{
    /**
     * @var string[]
     */
    public $policyId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'policyId' => 'PolicyId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->policyId)) {
            Model::validateArray($this->policyId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->policyId) {
            if (\is_array($this->policyId)) {
                $res['PolicyId'] = [];
                $n1 = 0;
                foreach ($this->policyId as $item1) {
                    $res['PolicyId'][$n1] = $item1;
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
        if (isset($map['PolicyId'])) {
            if (!empty($map['PolicyId'])) {
                $model->policyId = [];
                $n1 = 0;
                foreach ($map['PolicyId'] as $item1) {
                    $model->policyId[$n1] = $item1;
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
