<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainAdminDivisionResponseBody\adminDivisions;

class QueryDomainAdminDivisionResponseBody extends Model
{
    /**
     * @var adminDivisions
     */
    public $adminDivisions;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'adminDivisions' => 'AdminDivisions',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->adminDivisions) {
            $this->adminDivisions->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adminDivisions) {
            $res['AdminDivisions'] = null !== $this->adminDivisions ? $this->adminDivisions->toArray($noStream) : $this->adminDivisions;
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
        if (isset($map['AdminDivisions'])) {
            $model->adminDivisions = adminDivisions::fromMap($map['AdminDivisions']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
