<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eais\V20190624\Models;

use AlibabaCloud\Tea\Model;

class AttachEaisEiResponseBody extends Model
{
    /**
     * @example i-bp14ws9hbt1oe0u9****
     *
     * @var string
     */
    public $clientInstanceId;

    /**
     * @example eais-hzu00xufs1c8j5nn****
     *
     * @var string
     */
    public $eiInstanceId;

    /**
     * @example C3BCB7DA-BEB6-4982-A765-6EA61EC8****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clientInstanceId' => 'ClientInstanceId',
        'eiInstanceId'     => 'EiInstanceId',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientInstanceId) {
            $res['ClientInstanceId'] = $this->clientInstanceId;
        }
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
     * @return AttachEaisEiResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientInstanceId'])) {
            $model->clientInstanceId = $map['ClientInstanceId'];
        }
        if (isset($map['EiInstanceId'])) {
            $model->eiInstanceId = $map['EiInstanceId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
