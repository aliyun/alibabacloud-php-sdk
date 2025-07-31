<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetAccountByRowPermissionIdResponseBody;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetAccountByRowPermissionIdResponseBody\data\userMappingList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 300001235
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->userMappingList) {
            $res['UserMappingList'] = [];
            if (null !== $this->userMappingList && \is_array($this->userMappingList)) {
                $n = 0;
                foreach ($this->userMappingList as $item) {
                    $res['UserMappingList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['UserMappingList'])) {
            if (!empty($map['UserMappingList'])) {
                $model->userMappingList = [];
                $n = 0;
                foreach ($map['UserMappingList'] as $item) {
                    $model->userMappingList[$n++] = null !== $item ? userMappingList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
