<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models\GetDingTalkUserOrgByAliyunTmpCodeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\GetDingTalkUserOrgByAliyunTmpCodeResponseBody\data\orgDtoList;

class data extends Model
{
    /**
     * @var string
     */
    public $associatedUnionId;

    /**
     * @var string
     */
    public $nick;

    /**
     * @var orgDtoList[]
     */
    public $orgDtoList;
    protected $_name = [
        'associatedUnionId' => 'AssociatedUnionId',
        'nick' => 'Nick',
        'orgDtoList' => 'OrgDtoList',
    ];

    public function validate()
    {
        if (\is_array($this->orgDtoList)) {
            Model::validateArray($this->orgDtoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->associatedUnionId) {
            $res['AssociatedUnionId'] = $this->associatedUnionId;
        }

        if (null !== $this->nick) {
            $res['Nick'] = $this->nick;
        }

        if (null !== $this->orgDtoList) {
            if (\is_array($this->orgDtoList)) {
                $res['OrgDtoList'] = [];
                $n1 = 0;
                foreach ($this->orgDtoList as $item1) {
                    $res['OrgDtoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AssociatedUnionId'])) {
            $model->associatedUnionId = $map['AssociatedUnionId'];
        }

        if (isset($map['Nick'])) {
            $model->nick = $map['Nick'];
        }

        if (isset($map['OrgDtoList'])) {
            if (!empty($map['OrgDtoList'])) {
                $model->orgDtoList = [];
                $n1 = 0;
                foreach ($map['OrgDtoList'] as $item1) {
                    $model->orgDtoList[$n1] = orgDtoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
