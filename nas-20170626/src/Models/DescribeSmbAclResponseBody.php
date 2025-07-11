<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeSmbAclResponseBody\acl;

class DescribeSmbAclResponseBody extends Model
{
    /**
     * @var acl
     */
    public $acl;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'acl' => 'Acl',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->acl) {
            $this->acl->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acl) {
            $res['Acl'] = null !== $this->acl ? $this->acl->toArray($noStream) : $this->acl;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Acl'])) {
            $model->acl = acl::fromMap($map['Acl']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
