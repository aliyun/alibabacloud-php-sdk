<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Tea\Model;

class UpdateServiceResponseBody extends Model
{
    /**
     * @example 123-0F43-23423-AC43-34234
     *
     * @var string
     */
    public $requestId;

    /**
     * @example em87vd@c2e25bcfe0e21ce0***
     *
     * @var string
     */
    public $serviceId;
    protected $_name = [
        'requestId' => 'requestId',
        'serviceId' => 'serviceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->serviceId) {
            $res['serviceId'] = $this->serviceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateServiceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['serviceId'])) {
            $model->serviceId = $map['serviceId'];
        }

        return $model;
    }
}
