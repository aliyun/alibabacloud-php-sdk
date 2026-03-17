<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagHaResponseBody;

use AlibabaCloud\Dara\Model;

class ports extends Model
{
    /**
     * @var string
     */
    public $portName;

    /**
     * @var string
     */
    public $virtualIp;
    protected $_name = [
        'portName' => 'PortName',
        'virtualIp' => 'VirtualIp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->portName) {
            $res['PortName'] = $this->portName;
        }

        if (null !== $this->virtualIp) {
            $res['VirtualIp'] = $this->virtualIp;
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
        if (isset($map['PortName'])) {
            $model->portName = $map['PortName'];
        }

        if (isset($map['VirtualIp'])) {
            $model->virtualIp = $map['VirtualIp'];
        }

        return $model;
    }
}
