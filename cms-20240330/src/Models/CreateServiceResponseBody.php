<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Tea\Model;

class CreateServiceResponseBody extends Model
{
    /**
     * @example cwzxvuc6uo@d60088ad4797d26
     *
     * @var string
     */
    public $pid;

    /**
     * @example 3A2FA9E9-9CF1-5CB1-A808-52828F14310D
     *
     * @var string
     */
    public $requestId;

    /**
     * @example cwzxvuc6uo@4bc6b15ad81f166174ffb
     *
     * @var string
     */
    public $serviceId;
    protected $_name = [
        'pid' => 'pid',
        'requestId' => 'requestId',
        'serviceId' => 'serviceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->pid) {
            $res['pid'] = $this->pid;
        }
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
     * @return CreateServiceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['pid'])) {
            $model->pid = $map['pid'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['serviceId'])) {
            $model->serviceId = $map['serviceId'];
        }

        return $model;
    }
}
