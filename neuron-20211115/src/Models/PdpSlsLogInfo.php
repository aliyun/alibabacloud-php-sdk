<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class PdpSlsLogInfo extends Model
{
    /**
     * @var string
     */
    public $slsUrl;
    protected $_name = [
        'slsUrl' => 'slsUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->slsUrl) {
            $res['slsUrl'] = $this->slsUrl;
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
        if (isset($map['slsUrl'])) {
            $model->slsUrl = $map['slsUrl'];
        }

        return $model;
    }
}
