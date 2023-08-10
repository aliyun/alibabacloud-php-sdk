<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetFunctionVersionResponseBody;

use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetFunctionVersionResponseBody\result\versionConfig;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The name of the feature.
     *
     * @example ctr
     *
     * @var string
     */
    public $functionName;

    /**
     * @description The type of the feature. Valid values:
     *
     *   PAAS
     *   SAAS
     *
     * @example PAAS
     *
     * @var string
     */
    public $functionType;

    /**
     * @description The type of the model.
     *
     * @example tf_checkpoint
     *
     * @var string
     */
    public $modelType;

    /**
     * @description The configuration information.
     *
     * @var versionConfig
     */
    public $versionConfig;

    /**
     * @description The ID of the version.
     *
     * @example 101
     *
     * @var int
     */
    public $versionId;

    /**
     * @description The name of the version.
     *
     * @example v1
     *
     * @var string
     */
    public $versionName;
    protected $_name = [
        'functionName'  => 'FunctionName',
        'functionType'  => 'FunctionType',
        'modelType'     => 'ModelType',
        'versionConfig' => 'VersionConfig',
        'versionId'     => 'VersionId',
        'versionName'   => 'VersionName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->functionName) {
            $res['FunctionName'] = $this->functionName;
        }
        if (null !== $this->functionType) {
            $res['FunctionType'] = $this->functionType;
        }
        if (null !== $this->modelType) {
            $res['ModelType'] = $this->modelType;
        }
        if (null !== $this->versionConfig) {
            $res['VersionConfig'] = null !== $this->versionConfig ? $this->versionConfig->toMap() : null;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }
        if (null !== $this->versionName) {
            $res['VersionName'] = $this->versionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FunctionName'])) {
            $model->functionName = $map['FunctionName'];
        }
        if (isset($map['FunctionType'])) {
            $model->functionType = $map['FunctionType'];
        }
        if (isset($map['ModelType'])) {
            $model->modelType = $map['ModelType'];
        }
        if (isset($map['VersionConfig'])) {
            $model->versionConfig = versionConfig::fromMap($map['VersionConfig']);
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }
        if (isset($map['VersionName'])) {
            $model->versionName = $map['VersionName'];
        }

        return $model;
    }
}
