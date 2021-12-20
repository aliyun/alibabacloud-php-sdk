<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\SDK\Oss\V20190517\Models\GetObjectAclResponseBody\accessControlList;
use AlibabaCloud\Tea\Model;

class GetObjectAclResponseBody extends Model
{
    /**
     * @var accessControlList
     */
    public $accessControlList;

    /**
     * @var Owner
     */
    public $owner;
    protected $_name = [
        'accessControlList' => 'AccessControlList',
        'owner'             => 'Owner',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessControlList) {
            $res['AccessControlList'] = null !== $this->accessControlList ? $this->accessControlList->toMap() : null;
        }
        if (null !== $this->owner) {
            $res['Owner'] = null !== $this->owner ? $this->owner->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetObjectAclResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessControlList'])) {
            $model->accessControlList = accessControlList::fromMap($map['AccessControlList']);
        }
        if (isset($map['Owner'])) {
            $model->owner = Owner::fromMap($map['Owner']);
        }

        return $model;
    }
}
