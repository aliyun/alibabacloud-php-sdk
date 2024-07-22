<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\ListAclEntriesResponseBody;

use AlibabaCloud\Tea\Model;

class aclEntries extends Model
{
    /**
     * @description The description of the ACL entry. The description must be 1 to 256 characters in length, and can contain letters, digits, hyphens (-), forward slashes (/), periods (.), and underscores (_).
     *
     * @example test-entry
     *
     * @var string
     */
    public $description;

    /**
     * @description The CIDR block for the ACL entry.
     *
     * @example 10.0.1.1/24
     *
     * @var string
     */
    public $entry;

    /**
     * @description The status of the ACL entry. Valid values:
     *
     *   **Adding**: The ACL entry is being added.
     *   **Available**: The ACL entry is added and available.
     *   **Removing**: The ACL entry is being removed.
     *
     * @example Available
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'description' => 'Description',
        'entry'       => 'Entry',
        'status'      => 'Status',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
