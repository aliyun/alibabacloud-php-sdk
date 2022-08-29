<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class RemoveAccessControlListEntryRequest extends Model
{
    /**
     * @var string
     */
    public $aclEntrys;

    /**
     * @var string
     */
    public $aclId;
    protected $_name = [
        'aclEntrys' => 'AclEntrys',
        'aclId'     => 'AclId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclEntrys) {
            $res['AclEntrys'] = $this->aclEntrys;
        }
        if (null !== $this->aclId) {
            $res['AclId'] = $this->aclId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveAccessControlListEntryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclEntrys'])) {
            $model->aclEntrys = $map['AclEntrys'];
        }
        if (isset($map['AclId'])) {
            $model->aclId = $map['AclId'];
        }

        return $model;
    }
}
