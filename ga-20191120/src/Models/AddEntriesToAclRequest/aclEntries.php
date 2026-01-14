<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\AddEntriesToAclRequest;

use AlibabaCloud\Dara\Model;

class aclEntries extends Model
{
    /**
     * @var string
     */
    public $entry;

    /**
     * @var string
     */
    public $entryDescription;
    protected $_name = [
        'entry' => 'Entry',
        'entryDescription' => 'EntryDescription',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
