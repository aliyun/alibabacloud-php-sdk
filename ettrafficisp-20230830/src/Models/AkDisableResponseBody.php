<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EttrafficIsp\V20230830\Models;

use AlibabaCloud\Tea\Model;

class AkDisableResponseBody extends Model
{
    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @example The specified region of cn-zhengzhou-jva is not authorized.
     *
     * @var string
     */
    public $message;

    /**
     * @example ECF1C255-DA3D-52E5-BBE5-4F0F86793CBA
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'      => 'code',
        'message'   => 'message',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AkDisableResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
