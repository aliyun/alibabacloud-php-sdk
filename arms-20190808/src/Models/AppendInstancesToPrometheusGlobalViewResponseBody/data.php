<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\AppendInstancesToPrometheusGlobalViewResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The Info-level information.
     *
     * @example {regionId: the region where the aggregation instance resides. globalViewClusterId: the ID of the aggregation instance. failedInstances: the ID of the object that failed to be added.}
     *
     * @var string
     */
    public $info;

    /**
     * @description The additional information.
     *
     * @example OK
     *
     * @var string
     */
    public $msg;

    /**
     * @description Indicates whether the call was successful. Valid values:
     *
     *   `true`: The call was successful.
     *   `false`: The call failed.
     *
     * @example True
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'info' => 'Info',
        'msg' => 'Msg',
        'success' => 'Success',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->info) {
            $res['Info'] = $this->info;
        }
        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Info'])) {
            $model->info = $map['Info'];
        }
        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
