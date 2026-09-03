<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\CreateApplicationRequest;

use AlibabaCloud\Dara\Model;

class dnatEntries extends Model
{
    /**
     * @var int
     */
    public $frontPort;

    /**
     * @var string
     */
    public $portName;
    protected $_name = [
        'frontPort' => 'FrontPort',
        'portName' => 'PortName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->frontPort) {
            $res['FrontPort'] = $this->frontPort;
        }

        if (null !== $this->portName) {
            $res['PortName'] = $this->portName;
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
        if (isset($map['FrontPort'])) {
            $model->frontPort = $map['FrontPort'];
        }

        if (isset($map['PortName'])) {
            $model->portName = $map['PortName'];
        }

        return $model;
    }
}
