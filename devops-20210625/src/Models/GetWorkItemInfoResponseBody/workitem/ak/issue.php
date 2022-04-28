<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkItemInfoResponseBody\workitem\ak;

use AlibabaCloud\Tea\Model;

class issue extends Model
{
    /**
     * @description 参与人account id列表
     *
     * @var string[]
     */
    public $member;
    protected $_name = [
        'member' => 'member',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->member) {
            $res['member'] = $this->member;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return issue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['member'])) {
            if (!empty($map['member'])) {
                $model->member = $map['member'];
            }
        }

        return $model;
    }
}
