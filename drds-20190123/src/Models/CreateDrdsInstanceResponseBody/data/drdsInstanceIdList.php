<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\CreateDrdsInstanceResponseBody\data;

use AlibabaCloud\Dara\Model;

class drdsInstanceIdList extends Model
{
    /**
     * @var string[]
     */
    public $drdsInstanceIdList;
    protected $_name = [
        'drdsInstanceIdList' => 'drdsInstanceIdList',
    ];

    public function validate()
    {
        if (\is_array($this->drdsInstanceIdList)) {
            Model::validateArray($this->drdsInstanceIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->drdsInstanceIdList) {
            if (\is_array($this->drdsInstanceIdList)) {
                $res['drdsInstanceIdList'] = [];
                $n1 = 0;
                foreach ($this->drdsInstanceIdList as $item1) {
                    $res['drdsInstanceIdList'][$n1] = $item1;
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
        if (isset($map['drdsInstanceIdList'])) {
            if (!empty($map['drdsInstanceIdList'])) {
                $model->drdsInstanceIdList = [];
                $n1 = 0;
                foreach ($map['drdsInstanceIdList'] as $item1) {
                    $model->drdsInstanceIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
