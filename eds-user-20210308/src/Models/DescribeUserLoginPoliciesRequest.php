<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Dara\Model;

class DescribeUserLoginPoliciesRequest extends Model
{
    /**
     * @var string
     */
    public $businessChannel;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $policyIds;
    protected $_name = [
        'businessChannel' => 'BusinessChannel',
        'name' => 'Name',
        'policyIds' => 'PolicyIds',
    ];

    public function validate()
    {
        if (\is_array($this->policyIds)) {
            Model::validateArray($this->policyIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->businessChannel) {
            $res['BusinessChannel'] = $this->businessChannel;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->policyIds) {
            if (\is_array($this->policyIds)) {
                $res['PolicyIds'] = [];
                $n1 = 0;
                foreach ($this->policyIds as $item1) {
                    $res['PolicyIds'][$n1] = $item1;
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
        if (isset($map['BusinessChannel'])) {
            $model->businessChannel = $map['BusinessChannel'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PolicyIds'])) {
            if (!empty($map['PolicyIds'])) {
                $model->policyIds = [];
                $n1 = 0;
                foreach ($map['PolicyIds'] as $item1) {
                    $model->policyIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
