<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\KubeletConfig;

use AlibabaCloud\Dara\Model;

class tracing extends Model
{
    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var int
     */
    public $samplingRatePerMillion;
    protected $_name = [
        'endpoint' => 'endpoint',
        'samplingRatePerMillion' => 'samplingRatePerMillion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endpoint) {
            $res['endpoint'] = $this->endpoint;
        }

        if (null !== $this->samplingRatePerMillion) {
            $res['samplingRatePerMillion'] = $this->samplingRatePerMillion;
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
        if (isset($map['endpoint'])) {
            $model->endpoint = $map['endpoint'];
        }

        if (isset($map['samplingRatePerMillion'])) {
            $model->samplingRatePerMillion = $map['samplingRatePerMillion'];
        }

        return $model;
    }
}
