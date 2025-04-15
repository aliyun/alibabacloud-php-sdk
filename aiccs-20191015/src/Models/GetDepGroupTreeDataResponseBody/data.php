<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetDepGroupTreeDataResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetDepGroupTreeDataResponseBody\data\groupDTOS;

class data extends Model
{
    /**
     * @var string
     */
    public $depGroupId;

    /**
     * @var string
     */
    public $depGroupName;

    /**
     * @var groupDTOS[]
     */
    public $groupDTOS;
    protected $_name = [
        'depGroupId' => 'DepGroupId',
        'depGroupName' => 'DepGroupName',
        'groupDTOS' => 'GroupDTOS',
    ];

    public function validate()
    {
        if (\is_array($this->groupDTOS)) {
            Model::validateArray($this->groupDTOS);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->depGroupId) {
            $res['DepGroupId'] = $this->depGroupId;
        }

        if (null !== $this->depGroupName) {
            $res['DepGroupName'] = $this->depGroupName;
        }

        if (null !== $this->groupDTOS) {
            if (\is_array($this->groupDTOS)) {
                $res['GroupDTOS'] = [];
                $n1 = 0;
                foreach ($this->groupDTOS as $item1) {
                    $res['GroupDTOS'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DepGroupId'])) {
            $model->depGroupId = $map['DepGroupId'];
        }

        if (isset($map['DepGroupName'])) {
            $model->depGroupName = $map['DepGroupName'];
        }

        if (isset($map['GroupDTOS'])) {
            if (!empty($map['GroupDTOS'])) {
                $model->groupDTOS = [];
                $n1 = 0;
                foreach ($map['GroupDTOS'] as $item1) {
                    $model->groupDTOS[$n1++] = groupDTOS::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
