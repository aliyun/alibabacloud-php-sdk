<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\CreateHoneypotProbeRequest\honeypotBindList;

use AlibabaCloud\Tea\Model;

class bindPortList extends Model
{
    /**
     * @description Specifies whether to bind a port. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $bindPort;

    /**
     * @description The end of the port range.
     *
     * @example 90
     *
     * @var int
     */
    public $endPort;

    /**
     * @description Specifies whether the port is a fixed port. Valid values:
     *
     *   **0**: no
     *   **1**: yes
     *
     * @example 0
     *
     * @var bool
     */
    public $fixed;

    /**
     * @description The start of the port range.
     *
     * @example 80
     *
     * @var int
     */
    public $startPort;

    /**
     * @description The destination port.
     *
     * > If **HoneypotId** is specified, this parameter is required.
     * @example 80
     *
     * @var int
     */
    public $targetPort;
    protected $_name = [
        'bindPort'   => 'BindPort',
        'endPort'    => 'EndPort',
        'fixed'      => 'Fixed',
        'startPort'  => 'StartPort',
        'targetPort' => 'TargetPort',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindPort) {
            $res['BindPort'] = $this->bindPort;
        }
        if (null !== $this->endPort) {
            $res['EndPort'] = $this->endPort;
        }
        if (null !== $this->fixed) {
            $res['Fixed'] = $this->fixed;
        }
        if (null !== $this->startPort) {
            $res['StartPort'] = $this->startPort;
        }
        if (null !== $this->targetPort) {
            $res['TargetPort'] = $this->targetPort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bindPortList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindPort'])) {
            $model->bindPort = $map['BindPort'];
        }
        if (isset($map['EndPort'])) {
            $model->endPort = $map['EndPort'];
        }
        if (isset($map['Fixed'])) {
            $model->fixed = $map['Fixed'];
        }
        if (isset($map['StartPort'])) {
            $model->startPort = $map['StartPort'];
        }
        if (isset($map['TargetPort'])) {
            $model->targetPort = $map['TargetPort'];
        }

        return $model;
    }
}
