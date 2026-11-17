<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaasQIService\V20260831\Models\CameraConsoleDebugStreamRequest\config;

use AlibabaCloud\Dara\Model;

class model_ extends Model
{
    /**
     * @var string
     */
    public $catalogModelId;
    protected $_name = [
        'catalogModelId' => 'catalogModelId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->catalogModelId) {
            $res['catalogModelId'] = $this->catalogModelId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['catalogModelId'])) {
            $model->catalogModelId = $map['catalogModelId'];
        }

        return $model;
    }
}
