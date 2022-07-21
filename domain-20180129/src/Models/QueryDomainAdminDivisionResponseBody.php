<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainAdminDivisionResponseBody\adminDivisions;
use AlibabaCloud\Tea\Model;

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
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adminDivisions) {
            $res['AdminDivisions'] = null !== $this->adminDivisions ? $this->adminDivisions->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDomainAdminDivisionResponseBody
     */
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
