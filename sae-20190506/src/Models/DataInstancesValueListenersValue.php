<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class DataInstancesValueListenersValue extends Model
{
    /**
     * @description The listener protocol.
     *
     * @example TCPSSL
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The listener port of the NLB instance.
     *
     * @example 80
     *
     * @var int
     */
    public $port;

    /**
     * @description The status of the NLB listener.
     *
     *   **Creating**: The listener is being created.
     *   **Configuring**: The listener is being configured.
     *   **Bounded**: The listener runs as expected.
     *   **Unbinding**: The listener is being deleted.
     *   **Failed**: The listener is unavailable.
     *
     * @example Bounded
     *
     * @var string
     */
    public $status;

    /**
     * @description The open ports of the NLB instance.
     *
     * @example 8080
     *
     * @var int
     */
    public $targetPort;

    /**
     * @description The server certificates.
     *
     * @example 123157******
     *
     * @var string
     */
    public $certIds;
    protected $_name = [
        'protocol' => 'Protocol',
        'port' => 'Port',
        'status' => 'Status',
        'targetPort' => 'TargetPort',
        'certIds' => 'CertIds',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->targetPort) {
            $res['TargetPort'] = $this->targetPort;
        }
        if (null !== $this->certIds) {
            $res['CertIds'] = $this->certIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DataInstancesValueListenersValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TargetPort'])) {
            $model->targetPort = $map['TargetPort'];
        }
        if (isset($map['CertIds'])) {
            $model->certIds = $map['CertIds'];
        }

        return $model;
    }
}
