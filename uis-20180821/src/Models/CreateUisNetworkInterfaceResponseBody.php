<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Uis\V20180821\Models;

use AlibabaCloud\Tea\Model;

class CreateUisNetworkInterfaceResponseBody extends Model
{
    /**
     * @var string
     */
    public $uisEniId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'uisEniId'  => 'UisEniId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->uisEniId) {
            $res['UisEniId'] = $this->uisEniId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateUisNetworkInterfaceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UisEniId'])) {
            $model->uisEniId = $map['UisEniId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
