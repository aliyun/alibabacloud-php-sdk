<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateIPv6TranslatorAclListResponseBody extends Model
{
    /**
     * @description The ACL ID.
     *
     * @example ipv6transacl-bp1de2xxxx
     *
     * @var string
     */
    public $aclId;

    /**
     * @description The request ID.
     *
     * @example 8B2F5262-6B57-43F2-xxxxx
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'aclId'     => 'AclId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclId) {
            $res['AclId'] = $this->aclId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateIPv6TranslatorAclListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclId'])) {
            $model->aclId = $map['AclId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
