<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceGroupTagListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceGroupTagListResponseBody\data\groupTagInfo;

class data extends Model
{
    /**
     * @var groupTagInfo[]
     */
    public $groupTagInfo;
    protected $_name = [
        'groupTagInfo' => 'GroupTagInfo',
    ];

    public function validate()
    {
        if (\is_array($this->groupTagInfo)) {
            Model::validateArray($this->groupTagInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupTagInfo) {
            if (\is_array($this->groupTagInfo)) {
                $res['GroupTagInfo'] = [];
                $n1 = 0;
                foreach ($this->groupTagInfo as $item1) {
                    $res['GroupTagInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['GroupTagInfo'])) {
            if (!empty($map['GroupTagInfo'])) {
                $model->groupTagInfo = [];
                $n1 = 0;
                foreach ($map['GroupTagInfo'] as $item1) {
                    $model->groupTagInfo[$n1] = groupTagInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
