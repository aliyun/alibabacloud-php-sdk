<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetHoneypotProbeResponseBody\data\honeypotProbeBindList;

use AlibabaCloud\Tea\Model;

class bindPortList extends Model
{
    /**
     * @description Indicates whether the port is bound.
     *
     * @example false
     *
     * @var bool
     */
    public $bindPort;

    /**
     * @description The end port on which the probe monitors.
     *
     * @example 80
     *
     * @var int
     */
    public $endPort;

    /**
     * @description The error that is returned if an error occurred in the port of the honeypot that is bound to the probe.
     *
     * @example portmap failed
     *
     * @var string
     */
    public $err;

    /**
     * @description Indicates whether the port is a fixed port.
     *
     * @example false
     *
     * @var bool
     */
    public $fixed;

    /**
     * @description The unique ID of the port binding record.
     *
     * @example 2512
     *
     * @var int
     */
    public $id;

    /**
     * @description The error message that is returned if an error occurred in the port of the honeypot that is bound to the probe.
     *
     * @example listen 22 tcp4 failed
     *
     * @var string
     */
    public $msg;

    /**
     * @description The type of the protocol.
     *
     * @example tcp
     *
     * @var string
     */
    public $proto;

    /**
     * @description The start port on which the probe monitors.
     *
     * @example 22
     *
     * @var int
     */
    public $startPort;

    /**
     * @description The status of the port of the honeypot that is bound to the probe. Valid values:
     *
     *   **1**: abnormal
     *   **3**: normal
     *
     * @example 3
     *
     * @var int
     */
    public $status;

    /**
     * @description The destination port.
     *
     * @example 80
     *
     * @var int
     */
    public $targetPort;
    protected $_name = [
        'bindPort'   => 'BindPort',
        'endPort'    => 'EndPort',
        'err'        => 'Err',
        'fixed'      => 'Fixed',
        'id'         => 'Id',
        'msg'        => 'Msg',
        'proto'      => 'Proto',
        'startPort'  => 'StartPort',
        'status'     => 'Status',
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
        if (null !== $this->err) {
            $res['Err'] = $this->err;
        }
        if (null !== $this->fixed) {
            $res['Fixed'] = $this->fixed;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
        }
        if (null !== $this->proto) {
            $res['Proto'] = $this->proto;
        }
        if (null !== $this->startPort) {
            $res['StartPort'] = $this->startPort;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Err'])) {
            $model->err = $map['Err'];
        }
        if (isset($map['Fixed'])) {
            $model->fixed = $map['Fixed'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }
        if (isset($map['Proto'])) {
            $model->proto = $map['Proto'];
        }
        if (isset($map['StartPort'])) {
            $model->startPort = $map['StartPort'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TargetPort'])) {
            $model->targetPort = $map['TargetPort'];
        }

        return $model;
    }
}
