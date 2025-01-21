<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetRumAppInfoResponseBody\data\bonreeSDKConfig;

use AlibabaCloud\Dara\Model;

class samplingConfig extends Model
{
    /**
     * @var int
     */
    public $samplingRate;
    /**
     * @var int
     */
    public $samplingType;
    protected $_name = [
        'samplingRate' => 'samplingRate',
        'samplingType' => 'samplingType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->samplingRate) {
            $res['samplingRate'] = $this->samplingRate;
        }

        if (null !== $this->samplingType) {
            $res['samplingType'] = $this->samplingType;
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
        if (isset($map['samplingRate'])) {
            $model->samplingRate = $map['samplingRate'];
        }

        if (isset($map['samplingType'])) {
            $model->samplingType = $map['samplingType'];
        }

        return $model;
    }
}
