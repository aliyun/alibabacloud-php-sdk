<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeNfsAclResponseBody\acl;
use AlibabaCloud\Tea\Model;

class DescribeNfsAclResponseBody extends Model
{
    /**
     * @description The information about the ACL feature.
     *
     * @var acl
     */
    public $acl;

    /**
     * @description The request ID.
     *
     * @example A1098673-1746-505E-A5F1-08527B7EDBDF
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'acl'       => 'Acl',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acl) {
            $res['Acl'] = null !== $this->acl ? $this->acl->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNfsAclResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Acl'])) {
            $model->acl = acl::fromMap($map['Acl']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
