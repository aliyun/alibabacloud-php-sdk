<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class GetMediaLiveInputRequest extends Model
{
    /**
     * @description The ID of the input.
     *
     * This parameter is required.
     *
     * @example SEGK5KA6KYKAWQQH
     *
     * @var string
     */
    public $inputId;
    protected $_name = [
        'inputId' => 'InputId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->inputId) {
            $res['InputId'] = $this->inputId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMediaLiveInputRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InputId'])) {
            $model->inputId = $map['InputId'];
        }

        return $model;
    }
}
