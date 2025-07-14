<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Tea\Model;

class CreateVscResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 887FA855-89F4-5DB3-B305-C5879EC480E6
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The VSC ID.
     *
     * @example vsc-001
     *
     * @var string
     */
    public $vscId;
    protected $_name = [
        'requestId' => 'RequestId',
        'vscId' => 'VscId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->vscId) {
            $res['VscId'] = $this->vscId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVscResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VscId'])) {
            $model->vscId = $map['VscId'];
        }

        return $model;
    }
}
