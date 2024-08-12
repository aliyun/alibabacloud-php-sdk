<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\GetLibraryListResponseBody\data\records\indexSetting;

use AlibabaCloud\Tea\Model;

class modelConfig extends Model
{
    /**
     * @example 0.8
     *
     * @var float
     */
    public $temperature;

    /**
     * @description topP
     *
     * @example 0.8
     *
     * @var float
     */
    public $topP;
    protected $_name = [
        'temperature' => 'temperature',
        'topP'        => 'topP',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->temperature) {
            $res['temperature'] = $this->temperature;
        }
        if (null !== $this->topP) {
            $res['topP'] = $this->topP;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return modelConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['temperature'])) {
            $model->temperature = $map['temperature'];
        }
        if (isset($map['topP'])) {
            $model->topP = $map['topP'];
        }

        return $model;
    }
}
