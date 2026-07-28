<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyApplicationEndpointAddressRequest;

use AlibabaCloud\Dara\Model;

class newPorts extends Model
{
    /**
     * @var int
     */
    public $newPort;

    /**
     * @var int
     */
    public $oldPort;

    /**
     * @var string
     */
    public $portName;
    protected $_name = [
        'newPort' => 'NewPort',
        'oldPort' => 'OldPort',
        'portName' => 'PortName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->newPort) {
            $res['NewPort'] = $this->newPort;
        }

        if (null !== $this->oldPort) {
            $res['OldPort'] = $this->oldPort;
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
        if (isset($map['NewPort'])) {
            $model->newPort = $map['NewPort'];
        }

        if (isset($map['OldPort'])) {
            $model->oldPort = $map['OldPort'];
        }

        if (isset($map['PortName'])) {
            $model->portName = $map['PortName'];
        }

        return $model;
    }
}
