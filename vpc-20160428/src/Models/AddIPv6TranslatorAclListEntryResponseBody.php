<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class AddIPv6TranslatorAclListEntryResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $aclEntryId;
    protected $_name = [
        'requestId'  => 'RequestId',
        'aclEntryId' => 'AclEntryId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->aclEntryId) {
            $res['AclEntryId'] = $this->aclEntryId;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AclEntryId'])) {
            $model->aclEntryId = $map['AclEntryId'];
        }

        return $model;
    }
}
