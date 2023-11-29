<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceSSLResponseBody;

use AlibabaCloud\Tea\Model;

class instanceSSL extends Model
{
    /**
     * @example https://xxxx
     *
     * @var string
     */
    public $caUrl;

    /**
     * @example OPEN
     *
     * @var string
     */
    public $enableSSL;

    /**
     * @example CLOSE
     *
     * @var string
     */
    public $forceSSL;

    /**
     * @example false
     *
     * @var bool
     */
    public $forceSSLSupport;

    /**
     * @example ob317v4uif****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $status;

    /**
     * @example 2024-09-20 07:55:03.0
     *
     * @var string
     */
    public $validPeriod;
    protected $_name = [
        'caUrl'           => 'CaUrl',
        'enableSSL'       => 'EnableSSL',
        'forceSSL'        => 'ForceSSL',
        'forceSSLSupport' => 'ForceSSLSupport',
        'instanceId'      => 'InstanceId',
        'status'          => 'Status',
        'validPeriod'     => 'ValidPeriod',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->caUrl) {
            $res['CaUrl'] = $this->caUrl;
        }
        if (null !== $this->enableSSL) {
            $res['EnableSSL'] = $this->enableSSL;
        }
        if (null !== $this->forceSSL) {
            $res['ForceSSL'] = $this->forceSSL;
        }
        if (null !== $this->forceSSLSupport) {
            $res['ForceSSLSupport'] = $this->forceSSLSupport;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->validPeriod) {
            $res['ValidPeriod'] = $this->validPeriod;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceSSL
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CaUrl'])) {
            $model->caUrl = $map['CaUrl'];
        }
        if (isset($map['EnableSSL'])) {
            $model->enableSSL = $map['EnableSSL'];
        }
        if (isset($map['ForceSSL'])) {
            $model->forceSSL = $map['ForceSSL'];
        }
        if (isset($map['ForceSSLSupport'])) {
            $model->forceSSLSupport = $map['ForceSSLSupport'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ValidPeriod'])) {
            $model->validPeriod = $map['ValidPeriod'];
        }

        return $model;
    }
}
