<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Tea\Model;

class CreateLgfResponseBody extends Model
{
    /**
     * @description LGF ID
     *
     * @example 123453433453
     *
     * @var int
     */
    public $lgfId;

    /**
     * @example af5fg3sdf457j5
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'lgfId'     => 'LgfId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lgfId) {
            $res['LgfId'] = $this->lgfId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLgfResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LgfId'])) {
            $model->lgfId = $map['LgfId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
