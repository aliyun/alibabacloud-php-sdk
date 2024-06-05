<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\AddEntriesToAclRequest;

use AlibabaCloud\Tea\Model;

class aclEntries extends Model
{
    /**
     * @description The description of the IP entry. The description must be 2 to 256 characters in length, and can contain letters, digits, and the following special characters: , . ; / @ _ -.
     *
     * You can add up to 20 IP entries in each call.
     * @example test-entry
     *
     * @var string
     */
    public $description;

    /**
     * @description The CIDR block of the IP entry.
     *
     * This parameter is required.
     * @example 10.0.1.0/24
     *
     * @var string
     */
    public $entry;
    protected $_name = [
        'description' => 'Description',
        'entry'       => 'Entry',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->entry) {
            $res['Entry'] = $this->entry;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Entry'])) {
            $model->entry = $map['Entry'];
        }

        return $model;
    }
}
