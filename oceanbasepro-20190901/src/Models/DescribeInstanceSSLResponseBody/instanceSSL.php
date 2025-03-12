<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceSSLResponseBody;

use AlibabaCloud\Tea\Model;

class instanceSSL extends Model
{
    /**
     * @description The status of automatic update of SSL certificates. Valid values:
     * CLOSE: The automatic update of SSL certificates is disabled.
     * OPEN: The automatic update of SSL certificates is enabled.
     *
     * @example OPEN
     *
     * @var string
     */
    public $autoUpdate;

    /**
     * @description The URL of the certificate authority (CA) node.
     *
     * @example https://xxxx
     *
     * @var string
     */
    public $caUrl;

    /**
     * @description The operation to modify the SSL status. Valid values:
     *
     * - close: Disable SSL encryption.
     * @example OPEN
     *
     * @var string
     */
    public $enableSSL;

    /**
     * @description The forced enabling status of SSL.
     *
     * @example CLOSE
     *
     * @var string
     */
    public $forceSSL;

    /**
     * @description Indicates whether SSL can be forcibly enabled.
     *
     * @example false
     *
     * @var bool
     */
    public $forceSSLSupport;

    /**
     * @description The ID of the OceanBase cluster.
     *
     * @example ob317v4uif****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The SSL status of the cluster.
     *
     * @example RUNNING
     *
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @description The validity period of the SSL certificate.
     *
     * @example 2024-09-20 07:55:03.0
     *
     * @var string
     */
    public $validPeriod;
    protected $_name = [
        'autoUpdate'      => 'AutoUpdate',
        'caUrl'           => 'CaUrl',
        'enableSSL'       => 'EnableSSL',
        'forceSSL'        => 'ForceSSL',
        'forceSSLSupport' => 'ForceSSLSupport',
        'instanceId'      => 'InstanceId',
        'status'          => 'Status',
        'tenantId'        => 'TenantId',
        'validPeriod'     => 'ValidPeriod',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return instanceSSL
     */
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
