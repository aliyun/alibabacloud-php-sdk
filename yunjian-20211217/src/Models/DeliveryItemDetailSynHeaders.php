<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yunjian\V20211217\Models;

use AlibabaCloud\Tea\Model;

class DeliveryItemDetailSynHeaders extends Model
{
    public $commonHeaders;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $yunUserId;
    protected $_name = [
        'yunUserId' => 'Yun-User-Id',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->commonHeaders) {
            $res['commonHeaders'] = $this->commonHeaders;
        }
        if (null !== $this->yunUserId) {
            $res['Yun-User-Id'] = $this->yunUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeliveryItemDetailSynHeaders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['commonHeaders'])) {
            $model->commonHeaders = $map['commonHeaders'];
        }
        if (isset($map['Yun-User-Id'])) {
            $model->yunUserId = $map['Yun-User-Id'];
        }

        return $model;
    }
}
