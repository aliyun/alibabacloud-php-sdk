<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetFunctionCurrentVersionResponseBody;

use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetFunctionCurrentVersionResponseBody\result\versionConfig;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $functionName;

    /**
     * @var string
     */
    public $functionType;

    /**
     * @var string
     */
    public $modelType;

    /**
     * @var versionConfig
     */
    public $versionConfig;

    /**
     * @var int
     */
    public $versionId;

    /**
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
