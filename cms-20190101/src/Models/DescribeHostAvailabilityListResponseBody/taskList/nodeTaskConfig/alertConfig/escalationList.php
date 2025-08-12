<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHostAvailabilityListResponseBody\taskList\nodeTaskConfig\alertConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHostAvailabilityListResponseBody\taskList\nodeTaskConfig\alertConfig\escalationList\escalationList;

class escalationList extends Model
{
    /**
     * @var escalationList[]
     */
    public $escalationList;
    protected $_name = [
        'escalationList' => 'escalationList',
    ];

    public function validate()
    {
        if (\is_array($this->escalationList)) {
            Model::validateArray($this->escalationList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->escalationList) {
            if (\is_array($this->escalationList)) {
                $res['escalationList'] = [];
                $n1 = 0;
                foreach ($this->escalationList as $item1) {
                    $res['escalationList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['escalationList'])) {
            if (!empty($map['escalationList'])) {
                $model->escalationList = [];
                $n1 = 0;
                foreach ($map['escalationList'] as $item1) {
                    $model->escalationList[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
