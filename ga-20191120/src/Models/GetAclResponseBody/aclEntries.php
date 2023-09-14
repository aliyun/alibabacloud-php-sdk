<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\GetAclResponseBody;

use AlibabaCloud\Tea\Model;

class aclEntries extends Model
{
    /**
     * @description The list of network ACL entries that are returned. A maximum of 20 network ACL entries can be returned.
     *
     * @example 10.0.XX.XX/24
     *
     * @var string
     */
    public $entry;

    /**
     * @description The network ACL entry.
     *
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
