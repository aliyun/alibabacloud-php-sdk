<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240118\Models;

use AlibabaCloud\Tea\Model;

class DeleteDigitalVideoRequest extends Model
{
    /**
     * @example 715307080659124224
     *
     * @var string
     */
    public $accountId;

    /**
     * @example 123124123
     *
     * @var string
     */
    public $videoId;
    protected $_name = [
        'accountId' => 'accountId',
        'videoId'   => 'videoId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }
        if (null !== $this->videoId) {
            $res['videoId'] = $this->videoId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteDigitalVideoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }
        if (isset($map['videoId'])) {
            $model->videoId = $map['videoId'];
        }

        return $model;
    }
}
