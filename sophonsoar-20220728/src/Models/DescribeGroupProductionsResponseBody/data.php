<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeGroupProductionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeGroupProductionsResponseBody\data\productions;

class data extends Model
{
    /**
     * @var string
     */
    public $groupName;

    /**
     * @var productions[]
     */
    public $productions;
    protected $_name = [
        'groupName' => 'GroupName',
        'productions' => 'Productions',
    ];

    public function validate()
    {
        if (\is_array($this->productions)) {
            Model::validateArray($this->productions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->productions) {
            if (\is_array($this->productions)) {
                $res['Productions'] = [];
                $n1 = 0;
                foreach ($this->productions as $item1) {
                    $res['Productions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['Productions'])) {
            if (!empty($map['Productions'])) {
                $model->productions = [];
                $n1 = 0;
                foreach ($map['Productions'] as $item1) {
                    $model->productions[$n1] = productions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
