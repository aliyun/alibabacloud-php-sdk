<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IoTCC\V20210513\Models;

use AlibabaCloud\Tea\Model;

class CreateServiceEntryResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $serviceEntryId;
    protected $_name = [
        'requestId'      => 'RequestId',
        'serviceEntryId' => 'ServiceEntryId',
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
        if (null !== $this->serviceEntryId) {
            $res['ServiceEntryId'] = $this->serviceEntryId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateServiceEntryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServiceEntryId'])) {
            $model->serviceEntryId = $map['ServiceEntryId'];
        }

        return $model;
    }
}
