<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class ChatappBindWabaRequest extends Model
{
    /**
     * @description WabaId
     *
     * @example 2293938222343****
     *
     * @var string
     */
    public $wabaId;
    protected $_name = [
        'wabaId' => 'WabaId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->wabaId) {
            $res['WabaId'] = $this->wabaId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChatappBindWabaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WabaId'])) {
            $model->wabaId = $map['WabaId'];
        }

        return $model;
    }
}
