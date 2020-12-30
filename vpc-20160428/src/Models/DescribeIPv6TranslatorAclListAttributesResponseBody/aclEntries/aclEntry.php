<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIPv6TranslatorAclListAttributesResponseBody\aclEntries;

use AlibabaCloud\Tea\Model;

class aclEntry extends Model
{
    /**
     * @var string
     */
    public $aclEntryComment;

    /**
     * @var string
     */
    public $aclEntryId;

    /**
     * @var string
     */
    public $aclEntryIp;
    protected $_name = [
        'aclEntryComment' => 'AclEntryComment',
        'aclEntryId'      => 'AclEntryId',
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
        if (null !== $this->aclEntryId) {
            $res['AclEntryId'] = $this->aclEntryId;
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
        if (isset($map['AclEntryId'])) {
            $model->aclEntryId = $map['AclEntryId'];
        }
        if (isset($map['AclEntryIp'])) {
            $model->aclEntryIp = $map['AclEntryIp'];
        }

        return $model;
    }
}
