<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeMembersResponseBody;

use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeMembersResponseBody\result\pagination;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string[]
     */
    public $memberList;

    /**
     * @var pagination
     */
    public $pagination;
    protected $_name = [
        'memberList' => 'MemberList',
        'pagination' => 'Pagination',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->memberList) {
            $res['MemberList'] = $this->memberList;
        }
        if (null !== $this->pagination) {
            $res['Pagination'] = null !== $this->pagination ? $this->pagination->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MemberList'])) {
            if (!empty($map['MemberList'])) {
                $model->memberList = $map['MemberList'];
            }
        }
        if (isset($map['Pagination'])) {
            $model->pagination = pagination::fromMap($map['Pagination']);
        }

        return $model;
    }
}
