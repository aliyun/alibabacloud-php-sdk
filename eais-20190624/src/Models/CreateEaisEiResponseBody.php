<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eais\V20190624\Models;

use AlibabaCloud\Tea\Model;

class CreateEaisEiResponseBody extends Model
{
    /**
     * @example eais-hzu00xufs1c8j5nn****
     *
     * @var string
     */
    public $eiInstanceId;

    /**
     * @example F5FEB9AA-C108-577C-AB3D-D13524AF****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'eiInstanceId' => 'EiInstanceId',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eiInstanceId) {
            $res['EiInstanceId'] = $this->eiInstanceId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateEaisEiResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EiInstanceId'])) {
            $model->eiInstanceId = $map['EiInstanceId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
