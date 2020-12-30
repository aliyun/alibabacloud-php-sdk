<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeAccessControlListAttributeResponseBody\aclEntrys;

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
    public $aclEntryIP;
    protected $_name = [
        'aclEntryComment' => 'AclEntryComment',
        'aclEntryIP'      => 'AclEntryIP',
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
        if (null !== $this->aclEntryIP) {
            $res['AclEntryIP'] = $this->aclEntryIP;
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
        if (isset($map['AclEntryIP'])) {
            $model->aclEntryIP = $map['AclEntryIP'];
        }

        return $model;
    }
}
