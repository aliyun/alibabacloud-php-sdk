<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\GetLibraryResponseBody\data\indexSetting;

use AlibabaCloud\Dara\Model;

class modelConfig extends Model
{
    /**
     * @var float
     */
    public $temperature;
    /**
     * @var float
     */
    public $topP;
    protected $_name = [
        'temperature' => 'temperature',
        'topP'        => 'topP',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
