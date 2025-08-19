<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class DescribeClusterAddonsUpgradeStatusRequest extends Model
{
    /**
     * @var string[]
     */
    public $componentIds;
    protected $_name = [
        'componentIds' => 'componentIds',
    ];

    public function validate()
    {
        if (\is_array($this->componentIds)) {
            Model::validateArray($this->componentIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->componentIds) {
            if (\is_array($this->componentIds)) {
                $res['componentIds'] = [];
                $n1 = 0;
                foreach ($this->componentIds as $item1) {
                    $res['componentIds'][$n1] = $item1;
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
        if (isset($map['componentIds'])) {
            if (!empty($map['componentIds'])) {
                $model->componentIds = [];
                $n1 = 0;
                foreach ($map['componentIds'] as $item1) {
                    $model->componentIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
