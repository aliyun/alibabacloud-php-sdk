<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentKubeResourcesResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentKubeResourcesResponseBody\data\metadata;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example v1
     *
     * @var string
     */
    public $apiVersion;

    /**
     * @example Pod
     *
     * @var string
     */
    public $kind;

    /**
     * @var metadata
     */
    public $metadata;

    /**
     * @example {
     * }
     * @var mixed
     */
    public $spec;

    /**
     * @example run
     *
     * @var mixed
     */
    public $status;
    protected $_name = [
        'apiVersion' => 'ApiVersion',
        'kind'       => 'Kind',
        'metadata'   => 'Metadata',
        'spec'       => 'Spec',
        'status'     => 'Status',
    ];

    public function validate()
    {
    }

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
