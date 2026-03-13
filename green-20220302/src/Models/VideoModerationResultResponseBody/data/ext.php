<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultResponseBody\data\ext\aigcData;

class ext extends Model
{
    /**
     * @var aigcData
     */
    public $aigcData;
    protected $_name = [
        'aigcData' => 'AigcData',
    ];

    public function validate()
    {
        if (null !== $this->aigcData) {
            $this->aigcData->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aigcData) {
            $res['AigcData'] = null !== $this->aigcData ? $this->aigcData->toArray($noStream) : $this->aigcData;
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
        if (isset($map['AigcData'])) {
            $model->aigcData = aigcData::fromMap($map['AigcData']);
        }

        return $model;
    }
}
