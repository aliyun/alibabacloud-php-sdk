<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeAccessControlListAttributeResponseBody\aclEntrys;

use AlibabaCloud\Dara\Model;

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
        'aclEntryIP' => 'AclEntryIP',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
