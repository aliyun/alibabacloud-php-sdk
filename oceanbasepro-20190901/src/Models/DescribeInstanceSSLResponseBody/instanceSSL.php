<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceSSLResponseBody;

use AlibabaCloud\Dara\Model;

class instanceSSL extends Model
{
    /**
     * @var string
     */
    public $autoUpdate;

    /**
     * @var string
     */
    public $caUrl;

    /**
     * @var string
     */
    public $enableSSL;

    /**
     * @var string
     */
    public $forceSSL;

    /**
     * @var bool
     */
    public $forceSSLSupport;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $validPeriod;
    protected $_name = [
        'autoUpdate' => 'AutoUpdate',
        'caUrl' => 'CaUrl',
        'enableSSL' => 'EnableSSL',
        'forceSSL' => 'ForceSSL',
        'forceSSLSupport' => 'ForceSSLSupport',
        'instanceId' => 'InstanceId',
        'status' => 'Status',
        'tenantId' => 'TenantId',
        'validPeriod' => 'ValidPeriod',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoUpdate) {
            $res['AutoUpdate'] = $this->autoUpdate;
        }

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

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->validPeriod) {
            $res['ValidPeriod'] = $this->validPeriod;
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
        if (isset($map['AutoUpdate'])) {
            $model->autoUpdate = $map['AutoUpdate'];
        }

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

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['ValidPeriod'])) {
            $model->validPeriod = $map['ValidPeriod'];
        }

        return $model;
    }
}
