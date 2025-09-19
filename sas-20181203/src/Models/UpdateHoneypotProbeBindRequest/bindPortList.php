<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\UpdateHoneypotProbeBindRequest;

use AlibabaCloud\Dara\Model;

class bindPortList extends Model
{
    /**
     * @var bool
     */
    public $bindPort;

    /**
     * @var int
     */
    public $endPort;

    /**
     * @var bool
     */
    public $fixed;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $proto;

    /**
     * @var int
     */
    public $startPort;

    /**
     * @var int
     */
    public $targetPort;
    protected $_name = [
        'bindPort' => 'BindPort',
        'endPort' => 'EndPort',
        'fixed' => 'Fixed',
        'id' => 'Id',
        'proto' => 'Proto',
        'startPort' => 'StartPort',
        'targetPort' => 'TargetPort',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
