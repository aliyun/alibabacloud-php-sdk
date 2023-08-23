<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetPrometheusRemoteWriteResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the Prometheus instance.
     *
     * @example c589a1b8db05c4561aefbb898ca8fb1cf
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The name of the remote write configuration item.
     *
     * @example abc123
     *
     * @var string
     */
    public $remoteWriteName;

    /**
     * @description The details of the remote write configuration item. The value is in the YAML format.
     *
     * @example remote_write:
     * action: keep
     * @var string
     */
    public $remoteWriteYaml;
    protected $_name = [
        'clusterId'       => 'ClusterId',
        'remoteWriteName' => 'RemoteWriteName',
        'remoteWriteYaml' => 'RemoteWriteYaml',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->remoteWriteName) {
            $res['RemoteWriteName'] = $this->remoteWriteName;
        }
        if (null !== $this->remoteWriteYaml) {
            $res['RemoteWriteYaml'] = $this->remoteWriteYaml;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['RemoteWriteName'])) {
            $model->remoteWriteName = $map['RemoteWriteName'];
        }
        if (isset($map['RemoteWriteYaml'])) {
            $model->remoteWriteYaml = $map['RemoteWriteYaml'];
        }

        return $model;
    }
}
