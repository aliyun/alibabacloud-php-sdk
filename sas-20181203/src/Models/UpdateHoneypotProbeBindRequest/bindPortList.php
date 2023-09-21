<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\UpdateHoneypotProbeBindRequest;

use AlibabaCloud\Tea\Model;

class bindPortList extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $bindPort;

    /**
     * @example 81
     *
     * @var int
     */
    public $endPort;

    /**
     * @example 0
     *
     * @var bool
     */
    public $fixed;

    /**
     * @example 3183
     *
     * @var int
     */
    public $id;

    /**
     * @example tcp
     *
     * @var string
     */
    public $proto;

    /**
     * @example 81
     *
     * @var int
     */
    public $startPort;

    /**
     * @example 80
     *
     * @var int
     */
    public $targetPort;
    protected $_name = [
        'bindPort'   => 'BindPort',
        'endPort'    => 'EndPort',
        'fixed'      => 'Fixed',
        'id'         => 'Id',
        'proto'      => 'Proto',
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
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->proto) {
            $res['Proto'] = $this->proto;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Proto'])) {
            $model->proto = $map['Proto'];
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
