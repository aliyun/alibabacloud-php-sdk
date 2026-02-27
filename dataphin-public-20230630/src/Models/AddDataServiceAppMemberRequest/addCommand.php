<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\AddDataServiceAppMemberRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\AddDataServiceAppMemberRequest\addCommand\memberList;

class addCommand extends Model
{
    /**
     * @var int
     */
    public $appId;

    /**
     * @var memberList[]
     */
    public $memberList;
    protected $_name = [
        'appId' => 'AppId',
        'memberList' => 'MemberList',
    ];

    public function validate()
    {
        if (\is_array($this->memberList)) {
            Model::validateArray($this->memberList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->memberList) {
            if (\is_array($this->memberList)) {
                $res['MemberList'] = [];
                $n1 = 0;
                foreach ($this->memberList as $item1) {
                    $res['MemberList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['MemberList'])) {
            if (!empty($map['MemberList'])) {
                $model->memberList = [];
                $n1 = 0;
                foreach ($map['MemberList'] as $item1) {
                    $model->memberList[$n1] = memberList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
