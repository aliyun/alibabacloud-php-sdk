<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetUserResponseBody;

use AlibabaCloud\SDK\Aliding\V20230426\Models\GetUserResponseBody\unionEmpExt\unionEmpMapList;
use AlibabaCloud\Tea\Model;

class unionEmpExt extends Model
{
    /**
     * @example dingxxx
     *
     * @var string
     */
    public $corpId;

    /**
     * @var unionEmpMapList[]
     */
    public $unionEmpMapList;

    /**
     * @example zhangsan
     *
     * @var string
     */
    public $userid;
    protected $_name = [
        'corpId'          => 'corpId',
        'unionEmpMapList' => 'unionEmpMapList',
        'userid'          => 'userid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['corpId'] = $this->corpId;
        }
        if (null !== $this->unionEmpMapList) {
            $res['unionEmpMapList'] = [];
            if (null !== $this->unionEmpMapList && \is_array($this->unionEmpMapList)) {
                $n = 0;
                foreach ($this->unionEmpMapList as $item) {
                    $res['unionEmpMapList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return unionEmpExt
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['corpId'])) {
            $model->corpId = $map['corpId'];
        }
        if (isset($map['unionEmpMapList'])) {
            if (!empty($map['unionEmpMapList'])) {
                $model->unionEmpMapList = [];
                $n                      = 0;
                foreach ($map['unionEmpMapList'] as $item) {
                    $model->unionEmpMapList[$n++] = null !== $item ? unionEmpMapList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['userid'])) {
            $model->userid = $map['userid'];
        }

        return $model;
    }
}
