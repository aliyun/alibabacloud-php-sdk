<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models;

use AlibabaCloud\Dara\Model;

class DescribeServiceLinkedRoleResponseBody extends Model
{
    /**
     * @var bool
     */
    public $entityRoleGrant;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'entityRoleGrant' => 'EntityRoleGrant',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->entityRoleGrant) {
            $res['EntityRoleGrant'] = $this->entityRoleGrant;
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
        if (isset($map['EntityRoleGrant'])) {
            $model->entityRoleGrant = $map['EntityRoleGrant'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
