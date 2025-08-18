<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListApiByAppResponseBody\listResult\data;

use AlibabaCloud\Dara\Model;

class registerApi extends Model
{
    /**
     * @var int
     */
    public $apiId;

    /**
     * @var string
     */
    public $authenticationMode;

    /**
     * @var string
     */
    public $datasourceId;

    /**
     * @var string
     */
    public $datasourceName;

    /**
     * @var string
     */
    public $failExample;

    /**
     * @var int
     */
    public $httpMethod;

    /**
     * @var int
     */
    public $modelType;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $successExample;

    /**
     * @var int
     */
    public $timeout;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'apiId' => 'ApiId',
        'authenticationMode' => 'AuthenticationMode',
        'datasourceId' => 'DatasourceId',
        'datasourceName' => 'DatasourceName',
        'failExample' => 'FailExample',
        'httpMethod' => 'HttpMethod',
        'modelType' => 'ModelType',
        'path' => 'Path',
        'protocol' => 'Protocol',
        'successExample' => 'SuccessExample',
        'timeout' => 'Timeout',
        'url' => 'Url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }

        if (null !== $this->authenticationMode) {
            $res['AuthenticationMode'] = $this->authenticationMode;
        }

        if (null !== $this->datasourceId) {
            $res['DatasourceId'] = $this->datasourceId;
        }

        if (null !== $this->datasourceName) {
            $res['DatasourceName'] = $this->datasourceName;
        }

        if (null !== $this->failExample) {
            $res['FailExample'] = $this->failExample;
        }

        if (null !== $this->httpMethod) {
            $res['HttpMethod'] = $this->httpMethod;
        }

        if (null !== $this->modelType) {
            $res['ModelType'] = $this->modelType;
        }

        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        if (null !== $this->successExample) {
            $res['SuccessExample'] = $this->successExample;
        }

        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }

        if (isset($map['AuthenticationMode'])) {
            $model->authenticationMode = $map['AuthenticationMode'];
        }

        if (isset($map['DatasourceId'])) {
            $model->datasourceId = $map['DatasourceId'];
        }

        if (isset($map['DatasourceName'])) {
            $model->datasourceName = $map['DatasourceName'];
        }

        if (isset($map['FailExample'])) {
            $model->failExample = $map['FailExample'];
        }

        if (isset($map['HttpMethod'])) {
            $model->httpMethod = $map['HttpMethod'];
        }

        if (isset($map['ModelType'])) {
            $model->modelType = $map['ModelType'];
        }

        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        if (isset($map['SuccessExample'])) {
            $model->successExample = $map['SuccessExample'];
        }

        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
