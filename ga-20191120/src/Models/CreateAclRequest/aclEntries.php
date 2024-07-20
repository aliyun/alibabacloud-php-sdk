<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\CreateAclRequest;

use AlibabaCloud\Tea\Model;

class aclEntries extends Model
{
    /**
     * @description The IP addresses (192.168.XX.XX) or CIDR blocks (10.0.XX.XX/24) that you want to add to the ACL.
     *
     * You can add a maximum of 50 entries at a time.
     * @example 10.0.XX.XX/24
     *
     * @var string
     */
    public $entry;

    /**
     * @description The description of the entry that you want to add to the ACL.
     *
     * The description must be 1 to 256 characters in length, and can contain letters, digits, hyphens (-), forward slashes (/), periods (.), and underscores (_).
     * @example test-entry
     *
     * @var string
     */
    public $entryDescription;
    protected $_name = [
        'entry'            => 'Entry',
        'entryDescription' => 'EntryDescription',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entry) {
            $res['Entry'] = $this->entry;
        }
        if (null !== $this->entryDescription) {
            $res['EntryDescription'] = $this->entryDescription;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return aclEntries
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Entry'])) {
            $model->entry = $map['Entry'];
        }
        if (isset($map['EntryDescription'])) {
            $model->entryDescription = $map['EntryDescription'];
        }

        return $model;
    }
}
