<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class CheckServiceLinkedRoleResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 7BE0D8D2-6702-5639-A9C2-xxxxxxx
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether an SLR is created.
     *
     * @example True
     *
     * @var bool
     */
    public $serviceLinkedRoleExists;
    protected $_name = [
        'requestId' => 'RequestId',
        'serviceLinkedRoleExists' => 'ServiceLinkedRoleExists',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->serviceLinkedRoleExists) {
            $res['ServiceLinkedRoleExists'] = $this->serviceLinkedRoleExists;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckServiceLinkedRoleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServiceLinkedRoleExists'])) {
            $model->serviceLinkedRoleExists = $map['ServiceLinkedRoleExists'];
        }

        return $model;
    }
}
