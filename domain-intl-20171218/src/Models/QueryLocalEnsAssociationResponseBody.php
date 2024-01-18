<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domainintl\V20171218\Models;

use AlibabaCloud\Tea\Model;

class QueryLocalEnsAssociationResponseBody extends Model
{
    /**
     * @example 0x0000000000000000000000000000000000000003
     *
     * @var string
     */
    public $address;

    /**
     * @example AF7D4DCE-0776-47F2-A9B2-6FB85A87AA60
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'address'   => 'Address',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryLocalEnsAssociationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
