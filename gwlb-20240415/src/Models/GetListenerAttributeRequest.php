<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gwlb\V20240415\Models;

use AlibabaCloud\Tea\Model;

class GetListenerAttributeRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example lsn-brx2y3hqdinciz****
     *
     * @var string
     */
    public $listenerId;
    protected $_name = [
        'listenerId' => 'ListenerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetListenerAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }

        return $model;
    }
}
