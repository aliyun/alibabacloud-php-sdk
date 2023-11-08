<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class UpgradeDetailGatewayStatusRecordValue extends Model
{
    /**
     * @description The upgrade status of the ingress gateway. Valid values:
     *
     *   `upgrading`: The ingress gateway is being upgraded.
     *   `pending`: The ingress gateway waits to be upgraded.
     *   `finished`: The ingress gateway upgrade is complete.
     *   `notStart`: The ingress gateway upgrade does not start.
     *   `failed`: The ingress gateway upgrade fails.
     *   `unknown`: The upgrade status of the ingress gateway is unknown.
     *
     * @example upgrading
     *
     * @var string
     */
    public $status;

    /**
     * @description Additional status information of the ingress gateway.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The version of the ingress gateway.
     *
     * @example 1.9.7
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'status'  => 'Status',
        'message' => 'Message',
        'version' => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpgradeDetailGatewayStatusRecordValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
