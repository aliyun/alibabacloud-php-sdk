<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models;

use AlibabaCloud\Tea\Model;

class RecordDemandRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example SE20183A0Q7C5556
     *
     * @var string
     */
    public $bizId;

    /**
     * @description This parameter is required.
     *
     * @example some message
     *
     * @var string
     */
    public $message;
    protected $_name = [
        'bizId' => 'BizId',
        'message' => 'Message',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecordDemandRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        return $model;
    }
}
