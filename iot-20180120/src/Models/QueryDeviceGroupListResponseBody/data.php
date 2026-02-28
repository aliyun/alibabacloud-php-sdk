<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceGroupListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceGroupListResponseBody\data\groupInfo;

class data extends Model
{
    /**
     * @var groupInfo[]
     */
    public $groupInfo;
    protected $_name = [
        'groupInfo' => 'GroupInfo',
    ];

    public function validate()
    {
        if (\is_array($this->groupInfo)) {
            Model::validateArray($this->groupInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupInfo) {
            if (\is_array($this->groupInfo)) {
                $res['GroupInfo'] = [];
                $n1 = 0;
                foreach ($this->groupInfo as $item1) {
                    $res['GroupInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['GroupInfo'])) {
            if (!empty($map['GroupInfo'])) {
                $model->groupInfo = [];
                $n1 = 0;
                foreach ($map['GroupInfo'] as $item1) {
                    $model->groupInfo[$n1] = groupInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
