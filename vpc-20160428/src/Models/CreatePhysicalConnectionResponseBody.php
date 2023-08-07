<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreatePhysicalConnectionResponseBody extends Model
{
    /**
     * @description The ID of the Express Connect circuit.
     *
     * @example pc-bp1ciz7ekd2grn1as****
     *
     * @var string
     */
    public $physicalConnectionId;

    /**
     * @description The ID of the request.
     *
     * @example 8A6A5EC5-6F6C-4906-9689-56ACE58A13E0
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'physicalConnectionId' => 'PhysicalConnectionId',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->physicalConnectionId) {
            $res['PhysicalConnectionId'] = $this->physicalConnectionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePhysicalConnectionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PhysicalConnectionId'])) {
            $model->physicalConnectionId = $map['PhysicalConnectionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
