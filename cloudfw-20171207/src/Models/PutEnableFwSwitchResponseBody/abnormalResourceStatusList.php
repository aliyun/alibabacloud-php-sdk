<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\PutEnableFwSwitchResponseBody;

use AlibabaCloud\Tea\Model;

class abnormalResourceStatusList extends Model
{
    /**
     * @description The message displayed when the asset is not synchronized to Cloud Firewall. Valid values:
     *
     *   cloudfirewall do not sync this ip address: This IP address is not synchronized to Cloud Firewall.
     *
     * @example cloudfirewall do not sync this ip address
     *
     * @var string
     */
    public $msg;

    /**
     * @description The IP address of the asset.
     *
     * @example 203.0.113.0
     *
     * @var string
     */
    public $resource;

    /**
     * @description The status of the asset when it is not synchronized to Cloud Firewall. Valid values:
     *
     *   ip_not_sync: The asset is not synchronized.
     *
     * @example ip_not_sync
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'msg'      => 'Msg',
        'resource' => 'Resource',
        'status'   => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
        }
        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return abnormalResourceStatusList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }
        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
