<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class AttachDdosToAcceleratorResponseBody extends Model
{
    /**
     * @description The ID of the Anti-DDoS Pro/Premium instance that is associated with the GA instance.
     *
     * @example ddoscoo-cn-zz11vq7j****
     *
     * @var string
     */
    public $ddosId;

    /**
     * @description The ID of the GA instance that is associated with the Anti-DDoS Pro/Premium instance.
     *
     * @example ga-bp1odcab8tmno0hdq****
     *
     * @var string
     */
    public $gaId;

    /**
     * @description The ID of the request.
     *
     * @example DE77A7F3-3B74-41C0-A5BC-CAFD188C28B6
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ddosId'    => 'DdosId',
        'gaId'      => 'GaId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ddosId) {
            $res['DdosId'] = $this->ddosId;
        }
        if (null !== $this->gaId) {
            $res['GaId'] = $this->gaId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AttachDdosToAcceleratorResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DdosId'])) {
            $model->ddosId = $map['DdosId'];
        }
        if (isset($map['GaId'])) {
            $model->gaId = $map['GaId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
