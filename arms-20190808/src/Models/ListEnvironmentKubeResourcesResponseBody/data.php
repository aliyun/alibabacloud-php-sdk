<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentKubeResourcesResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentKubeResourcesResponseBody\data\metadata;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The version number of the API.
     *
     * @example v1
     *
     * @var string
     */
    public $apiVersion;

    /**
     * @description The resource type.
     *
     * @example Pod
     *
     * @var string
     */
    public $kind;

    /**
     * @description The metadata.
     *
     * @var metadata
     */
    public $metadata;

    /**
     * @description The resource specifications.
     *
     * @example {
     * "dnsPolicy": "ClusterFirst",
     * "nodeName": "cn-hangzhou.172.16.0.60",
     * "terminationGracePeriodSeconds": 30,
     * "enableServiceLinks": true,
     * "serviceAccountName": "arms-prom-operator",
     * "volumes": [
     * {
     * "name": "certs",
     * "secret": {
     * "secretName": "arms-prometheus-ack-arms-prometheus-cert",
     * "defaultMode": 420
     * }
     * }
     *
     * @var mixed
     */
    public $spec;

    /**
     * @description The status of the resource.
     *
     * @example run
     *
     * @var mixed
     */
    public $status;
    protected $_name = [
        'apiVersion' => 'ApiVersion',
        'kind' => 'Kind',
        'metadata' => 'Metadata',
        'spec' => 'Spec',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiVersion) {
            $res['ApiVersion'] = $this->apiVersion;
        }
        if (null !== $this->kind) {
            $res['Kind'] = $this->kind;
        }
        if (null !== $this->metadata) {
            $res['Metadata'] = null !== $this->metadata ? $this->metadata->toMap() : null;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ApiVersion'])) {
            $model->apiVersion = $map['ApiVersion'];
        }
        if (isset($map['Kind'])) {
            $model->kind = $map['Kind'];
        }
        if (isset($map['Metadata'])) {
            $model->metadata = metadata::fromMap($map['Metadata']);
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
