<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models\ListDevicesResponseBody\data;

use AlibabaCloud\Tea\Model;

class connectConfigs extends Model
{
    /**
     * @var string
     */
    public $connectScript;

    /**
     * @var string
     */
    public $peripheralPid;

    /**
     * @var string
     */
    public $peripheralVid;

    /**
     * @var int
     */
    public $redirectPolicy;
    protected $_name = [
        'connectScript'  => 'ConnectScript',
        'peripheralPid'  => 'PeripheralPid',
        'peripheralVid'  => 'PeripheralVid',
        'redirectPolicy' => 'RedirectPolicy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectScript) {
            $res['ConnectScript'] = $this->connectScript;
        }
        if (null !== $this->peripheralPid) {
            $res['PeripheralPid'] = $this->peripheralPid;
        }
        if (null !== $this->peripheralVid) {
            $res['PeripheralVid'] = $this->peripheralVid;
        }
        if (null !== $this->redirectPolicy) {
            $res['RedirectPolicy'] = $this->redirectPolicy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return connectConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectScript'])) {
            $model->connectScript = $map['ConnectScript'];
        }
        if (isset($map['PeripheralPid'])) {
            $model->peripheralPid = $map['PeripheralPid'];
        }
        if (isset($map['PeripheralVid'])) {
            $model->peripheralVid = $map['PeripheralVid'];
        }
        if (isset($map['RedirectPolicy'])) {
            $model->redirectPolicy = $map['RedirectPolicy'];
        }

        return $model;
    }
}
