<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class AddIPv6TranslatorAclListEntryResponseBody extends Model
{
    /**
     * @description The ID of the ACL entry.
     *
     * @example ipv6transaclentry-bp105jrs****
     *
     * @var string
     */
    public $aclEntryId;

    /**
     * @description The request ID.
     *
     * @example 8B2F5262-6B57-43F2-defr345
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'aclEntryId' => 'AclEntryId',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclEntryId) {
            $res['AclEntryId'] = $this->aclEntryId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddIPv6TranslatorAclListEntryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclEntryId'])) {
            $model->aclEntryId = $map['AclEntryId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
