<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIFlow\V20210202\Models;

use AlibabaCloud\Tea\Model;

class GetPipelineResponseBody extends Model
{
    /**
     * @example 2021-01-21T17:12:35.232Z
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @example 2021-01-21T17:12:35.232Z
     *
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @example SqlWrite
     *
     * @var string
     */
    public $identifier;

    /**
     * @example apiVersion: ****
     *
     * @var string
     */
    public $manifest;

    /**
     * @example pipeline-hynm2bv8wqhp5e****
     *
     * @var string
     */
    public $pipelineId;

    /**
     * @example 132668941337****
     *
     * @var string
     */
    public $provider;

    /**
     * @example 63EDFF2F-4D51-46F0-9D65-2F8F393B****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example q8dp9hklueznhg****
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
        'manifest'        => 'Manifest',
        'pipelineId'      => 'PipelineId',
        'provider'        => 'Provider',
        'requestId'       => 'RequestId',
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
        if (null !== $this->manifest) {
            $res['Manifest'] = $this->manifest;
        }
        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }
        if (null !== $this->provider) {
            $res['Provider'] = $this->provider;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
     * @return GetPipelineResponseBody
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
        if (isset($map['Manifest'])) {
            $model->manifest = $map['Manifest'];
        }
        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }
        if (isset($map['Provider'])) {
            $model->provider = $map['Provider'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
