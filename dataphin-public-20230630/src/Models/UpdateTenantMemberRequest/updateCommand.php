<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateTenantMemberRequest;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateTenantMemberRequest\updateCommand\memberList;
use AlibabaCloud\Tea\Model;

class updateCommand extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var memberList[]
     */
    public $memberList;
    protected $_name = [
        'memberList' => 'MemberList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->memberList) {
            $res['MemberList'] = [];
            if (null !== $this->memberList && \is_array($this->memberList)) {
                $n = 0;
                foreach ($this->memberList as $item) {
                    $res['MemberList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return updateCommand
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MemberList'])) {
            if (!empty($map['MemberList'])) {
                $model->memberList = [];
                $n                 = 0;
                foreach ($map['MemberList'] as $item) {
                    $model->memberList[$n++] = null !== $item ? memberList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
