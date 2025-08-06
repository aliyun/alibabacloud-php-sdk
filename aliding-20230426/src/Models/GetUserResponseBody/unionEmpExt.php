<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetUserResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetUserResponseBody\unionEmpExt\unionEmpMapList;

class unionEmpExt extends Model
{
    /**
     * @var string
     */
    public $corpId;

    /**
     * @var unionEmpMapList[]
     */
    public $unionEmpMapList;

    /**
     * @var string
     */
    public $userid;
    protected $_name = [
        'corpId' => 'corpId',
        'unionEmpMapList' => 'unionEmpMapList',
        'userid' => 'userid',
    ];

    public function validate()
    {
        if (\is_array($this->unionEmpMapList)) {
            Model::validateArray($this->unionEmpMapList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['corpId'] = $this->corpId;
        }

        if (null !== $this->unionEmpMapList) {
            if (\is_array($this->unionEmpMapList)) {
                $res['unionEmpMapList'] = [];
                $n1 = 0;
                foreach ($this->unionEmpMapList as $item1) {
                    $res['unionEmpMapList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
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
        if (isset($map['corpId'])) {
            $model->corpId = $map['corpId'];
        }

        if (isset($map['unionEmpMapList'])) {
            if (!empty($map['unionEmpMapList'])) {
                $model->unionEmpMapList = [];
                $n1 = 0;
                foreach ($map['unionEmpMapList'] as $item1) {
                    $model->unionEmpMapList[$n1] = unionEmpMapList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['userid'])) {
            $model->userid = $map['userid'];
        }

        return $model;
    }
}
