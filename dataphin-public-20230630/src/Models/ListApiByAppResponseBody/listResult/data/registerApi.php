<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListApiByAppResponseBody\listResult\data;

use AlibabaCloud\Tea\Model;

class registerApi extends Model
{
    /**
     * @example 67890
     *
     * @var int
     */
    public $apiId;

    /**
     * @example OAuth2
     *
     * @var string
     */
    public $authenticationMode;

    /**
     * @example ds67890
     *
     * @var string
     */
    public $datasourceId;

    /**
     * @example registerDatasource
     *
     * @var string
     */
    public $datasourceName;

    /**
     * @example {"status":"error","message":"Invalid request"}
     *
     * @var string
     */
    public $failExample;

    /**
     * @example 1
     *
     * @var int
     */
    public $httpMethod;

    /**
     * @example 0
     *
     * @var int
     */
    public $modelType;

    /**
     * @example /api/v1/register
     *
     * @var string
     */
    public $path;

    /**
     * @example HTTPS
     *
     * @var string
     */
    public $protocol;

    /**
     * @example {"status":"success","data":[]}
     *
     * @var string
     */
    public $successExample;

    /**
     * @example 30
     *
     * @var int
     */
    public $timeout;

    /**
     * @example https://example.com/register_api
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return registerApi
     */
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
