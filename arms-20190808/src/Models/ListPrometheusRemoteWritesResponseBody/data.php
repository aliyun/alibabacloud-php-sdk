<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListPrometheusRemoteWritesResponseBody;

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
     * @description The name of the remote write configuration.
     *
     * @example abc123
     *
     * @var string
     */
    public $remoteWriteName;

    /**
     * @description The remote write configuration. The configuration is displayed in the YAML format.
     *
     * @example Please refer to the supplementary explanation of the request parameters.
     *
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
