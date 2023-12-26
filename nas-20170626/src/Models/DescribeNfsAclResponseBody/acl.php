<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeNfsAclResponseBody;

use AlibabaCloud\Tea\Model;

class acl extends Model
{
    /**
     * @description Indicates whether the NFS ACL feature is enabled.
     *
     *   true: The NFS ACL feature is enabled.
     *   false: The NFS ACL feature is disabled.
     *
     * @example true
     *
     * @var bool
     */
    public $enabled;
    protected $_name = [
        'enabled' => 'Enabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return acl
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        return $model;
    }
}
