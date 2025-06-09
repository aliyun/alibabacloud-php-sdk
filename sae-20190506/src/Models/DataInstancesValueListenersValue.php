<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class DataInstancesValueListenersValue extends Model
{
    /**
     * @var string
     */
    public $protocol;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $targetPort;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
