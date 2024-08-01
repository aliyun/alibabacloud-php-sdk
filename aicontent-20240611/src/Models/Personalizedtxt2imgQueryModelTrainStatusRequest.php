<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Tea\Model;

class Personalizedtxt2imgQueryModelTrainStatusRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example modelId-xxxx-xxxx-xxxx
     *
     * @var string
     */
    public $modelId;
    protected $_name = [
        'modelId' => 'modelId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->modelId) {
            $res['modelId'] = $this->modelId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Personalizedtxt2imgQueryModelTrainStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['modelId'])) {
            $model->modelId = $map['modelId'];
        }

        return $model;
    }
}
