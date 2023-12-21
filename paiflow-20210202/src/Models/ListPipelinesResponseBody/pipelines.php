<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIFlow\V20210202\Models\ListPipelinesResponseBody;

use AlibabaCloud\Tea\Model;

class pipelines extends Model
{
    /**
     * @example 2021-01-06T14:32:50Z
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @example 2021-01-06T22:26:24Z
     *
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @example SqlWriteTable_2
     *
     * @var string
     */
    public $identifier;

    /**
     * @example pipeline-c0h44g3wlwkj8o*****
     *
     * @var string
     */
    public $pipelineId;

    /**
     * @example pai
     *
     * @var string
     */
    public $provider;

    /**
     * @example q8dp9hklueznh*****
     *
     * @var string
     */
    public $uuid;

    /**
     * @example v1
     *
     * @var string
     */
    public $version;

    /**
     * @example 726**
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'gmtCreateTime'   => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'identifier'      => 'Identifier',
        'pipelineId'      => 'PipelineId',
        'provider'        => 'Provider',
        'uuid'            => 'Uuid',
        'version'         => 'Version',
        'workspaceId'     => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->identifier) {
            $res['Identifier'] = $this->identifier;
        }
        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }
        if (null !== $this->provider) {
            $res['Provider'] = $this->provider;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pipelines
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['Identifier'])) {
            $model->identifier = $map['Identifier'];
        }
        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }
        if (isset($map['Provider'])) {
            $model->provider = $map['Provider'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
