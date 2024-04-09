<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeRdMemberListResponseBody;

use AlibabaCloud\Tea\Model;

class memberList extends Model
{
    /**
     * @example 1624954942000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example test1
     *
     * @var string
     */
    public $name;

    /**
     * @example 1960279802016267
     *
     * @var string
     */
    public $uid;
    protected $_name = [
        'gmtCreate' => 'GmtCreate',
        'name'      => 'Name',
        'uid'       => 'Uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return memberList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
