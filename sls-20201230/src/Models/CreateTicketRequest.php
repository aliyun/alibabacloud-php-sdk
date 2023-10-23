<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class CreateTicketRequest extends Model
{
    /**
     * @example L*****************a
     *
     * @var string
     */
    public $playAccessKeyId;

    /**
     * @example O******************8
     *
     * @var string
     */
    public $playAccessKeySecret;
    protected $_name = [
        'playAccessKeyId'     => 'playAccessKeyId',
        'playAccessKeySecret' => 'playAccessKeySecret',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->playAccessKeyId) {
            $res['playAccessKeyId'] = $this->playAccessKeyId;
        }
        if (null !== $this->playAccessKeySecret) {
            $res['playAccessKeySecret'] = $this->playAccessKeySecret;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTicketRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['playAccessKeyId'])) {
            $model->playAccessKeyId = $map['playAccessKeyId'];
        }
        if (isset($map['playAccessKeySecret'])) {
            $model->playAccessKeySecret = $map['playAccessKeySecret'];
        }

        return $model;
    }
}
