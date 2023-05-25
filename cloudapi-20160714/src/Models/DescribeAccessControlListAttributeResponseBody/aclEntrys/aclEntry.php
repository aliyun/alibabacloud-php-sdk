<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAccessControlListAttributeResponseBody\aclEntrys;

use AlibabaCloud\Tea\Model;

class aclEntry extends Model
{
    /**
     * @example default
     *
     * @var string
     */
    public $aclEntryComment;

    /**
     * @example 192.168.1.0/24
     *
     * @var string
     */
    public $aclEntryIp;
    protected $_name = [
        'aclEntryComment' => 'AclEntryComment',
        'aclEntryIp'      => 'AclEntryIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclEntryComment) {
            $res['AclEntryComment'] = $this->aclEntryComment;
        }
        if (null !== $this->aclEntryIp) {
            $res['AclEntryIp'] = $this->aclEntryIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return aclEntry
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclEntryComment'])) {
            $model->aclEntryComment = $map['AclEntryComment'];
        }
        if (isset($map['AclEntryIp'])) {
            $model->aclEntryIp = $map['AclEntryIp'];
        }

        return $model;
    }
}
