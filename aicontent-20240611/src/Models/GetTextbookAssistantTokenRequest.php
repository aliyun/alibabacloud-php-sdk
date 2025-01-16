<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Tea\Model;

class GetTextbookAssistantTokenRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 700d4d9411efbe6e0
     *
     * @var string
     */
    public $deviceId;

    /**
     * @description This parameter is required.
     *
     * @example 25032PS56C
     *
     * @var string
     */
    public $model;
    protected $_name = [
        'deviceId' => 'deviceId',
        'model'    => 'model',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceId) {
            $res['deviceId'] = $this->deviceId;
        }
        if (null !== $this->model) {
            $res['model'] = $this->model;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTextbookAssistantTokenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['deviceId'])) {
            $model->deviceId = $map['deviceId'];
        }
        if (isset($map['model'])) {
            $model->model = $map['model'];
        }

        return $model;
    }
}
