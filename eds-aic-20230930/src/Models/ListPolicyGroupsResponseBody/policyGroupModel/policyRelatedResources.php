<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\ListPolicyGroupsResponseBody\policyGroupModel;

use AlibabaCloud\Dara\Model;

class policyRelatedResources extends Model
{
    /**
     * @var string[]
     */
    public $androidInstanceGroupIds;

    /**
     * @var string[]
     */
    public $cloudPhoneMatrixIds;
    protected $_name = [
        'androidInstanceGroupIds' => 'AndroidInstanceGroupIds',
        'cloudPhoneMatrixIds' => 'CloudPhoneMatrixIds',
    ];

    public function validate()
    {
        if (\is_array($this->androidInstanceGroupIds)) {
            Model::validateArray($this->androidInstanceGroupIds);
        }
        if (\is_array($this->cloudPhoneMatrixIds)) {
            Model::validateArray($this->cloudPhoneMatrixIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->androidInstanceGroupIds) {
            if (\is_array($this->androidInstanceGroupIds)) {
                $res['AndroidInstanceGroupIds'] = [];
                $n1 = 0;
                foreach ($this->androidInstanceGroupIds as $item1) {
                    $res['AndroidInstanceGroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->cloudPhoneMatrixIds) {
            if (\is_array($this->cloudPhoneMatrixIds)) {
                $res['CloudPhoneMatrixIds'] = [];
                $n1 = 0;
                foreach ($this->cloudPhoneMatrixIds as $item1) {
                    $res['CloudPhoneMatrixIds'][$n1] = $item1;
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
        if (isset($map['AndroidInstanceGroupIds'])) {
            if (!empty($map['AndroidInstanceGroupIds'])) {
                $model->androidInstanceGroupIds = [];
                $n1 = 0;
                foreach ($map['AndroidInstanceGroupIds'] as $item1) {
                    $model->androidInstanceGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CloudPhoneMatrixIds'])) {
            if (!empty($map['CloudPhoneMatrixIds'])) {
                $model->cloudPhoneMatrixIds = [];
                $n1 = 0;
                foreach ($map['CloudPhoneMatrixIds'] as $item1) {
                    $model->cloudPhoneMatrixIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
