<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class ListEnvironmentKubeResourcesRequest extends Model
{
    /**
     * @description The environment ID.
     *
     * This parameter is required.
     *
     * @example env-xxx
     *
     * @var string
     */
    public $environmentId;

    /**
     * @description The resource type. Valid values: Pod, Deployment, and Service.
     *
     * This parameter is required.
     *
     * @example Pod
     *
     * @var string
     */
    public $kind;

    /**
     * @description The tags.
     *
     * @var string[]
     */
    public $labelSelectors;

    /**
     * @description The namespace.
     *
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'environmentId' => 'EnvironmentId',
        'kind' => 'Kind',
        'labelSelectors' => 'LabelSelectors',
        'namespace' => 'Namespace',
        'regionId' => 'RegionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->environmentId) {
            $res['EnvironmentId'] = $this->environmentId;
        }
        if (null !== $this->kind) {
            $res['Kind'] = $this->kind;
        }
        if (null !== $this->labelSelectors) {
            $res['LabelSelectors'] = $this->labelSelectors;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEnvironmentKubeResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnvironmentId'])) {
            $model->environmentId = $map['EnvironmentId'];
        }
        if (isset($map['Kind'])) {
            $model->kind = $map['Kind'];
        }
        if (isset($map['LabelSelectors'])) {
            $model->labelSelectors = $map['LabelSelectors'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
