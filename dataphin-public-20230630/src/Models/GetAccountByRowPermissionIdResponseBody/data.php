<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetAccountByRowPermissionIdResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetAccountByRowPermissionIdResponseBody\data\userMappingList;

class data extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var userMappingList[]
     */
    public $userMappingList;
    protected $_name = [
        'id' => 'Id',
        'userMappingList' => 'UserMappingList',
    ];

    public function validate()
    {
        if (\is_array($this->userMappingList)) {
            Model::validateArray($this->userMappingList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->userMappingList) {
            if (\is_array($this->userMappingList)) {
                $res['UserMappingList'] = [];
                $n1 = 0;
                foreach ($this->userMappingList as $item1) {
                    $res['UserMappingList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['UserMappingList'])) {
            if (!empty($map['UserMappingList'])) {
                $model->userMappingList = [];
                $n1 = 0;
                foreach ($map['UserMappingList'] as $item1) {
                    $model->userMappingList[$n1] = userMappingList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
