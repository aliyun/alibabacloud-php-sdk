<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Acm\V20200206;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Acm\V20200206\Models\BatchExportConfigurationsRequest;
use AlibabaCloud\SDK\Acm\V20200206\Models\BatchExportConfigurationsResponse;
use AlibabaCloud\SDK\Acm\V20200206\Models\BatchImportConfigurationsRequest;
use AlibabaCloud\SDK\Acm\V20200206\Models\BatchImportConfigurationsResponse;
use AlibabaCloud\SDK\Acm\V20200206\Models\CheckConfigurationCloneRequest;
use AlibabaCloud\SDK\Acm\V20200206\Models\CheckConfigurationCloneResponse;
use AlibabaCloud\SDK\Acm\V20200206\Models\CheckConfigurationExportRequest;
use AlibabaCloud\SDK\Acm\V20200206\Models\CheckConfigurationExportResponse;
use AlibabaCloud\SDK\Acm\V20200206\Models\CloneConfigurationRequest;
use AlibabaCloud\SDK\Acm\V20200206\Models\CloneConfigurationResponse;
use AlibabaCloud\SDK\Acm\V20200206\Models\CreateConfigurationRequest;
use AlibabaCloud\SDK\Acm\V20200206\Models\CreateConfigurationResponse;
use AlibabaCloud\SDK\Acm\V20200206\Models\CreateNamespaceRequest;
use AlibabaCloud\SDK\Acm\V20200206\Models\CreateNamespaceResponse;
use AlibabaCloud\SDK\Acm\V20200206\Models\DeleteConfigurationRequest;
use AlibabaCloud\SDK\Acm\V20200206\Models\DeleteConfigurationResponse;
use AlibabaCloud\SDK\Acm\V20200206\Models\DeleteNamespaceRequest;
use AlibabaCloud\SDK\Acm\V20200206\Models\DeleteNamespaceResponse;
use AlibabaCloud\SDK\Acm\V20200206\Models\DeployConfigurationRequest;
use AlibabaCloud\SDK\Acm\V20200206\Models\DeployConfigurationResponse;
use AlibabaCloud\SDK\Acm\V20200206\Models\DescribeConfigurationRequest;
use AlibabaCloud\SDK\Acm\V20200206\Models\DescribeConfigurationResponse;
use AlibabaCloud\SDK\Acm\V20200206\Models\DescribeImportFileUrlRequest;
use AlibabaCloud\SDK\Acm\V20200206\Models\DescribeImportFileUrlResponse;
use AlibabaCloud\SDK\Acm\V20200206\Models\DescribeNamespaceRequest;
use AlibabaCloud\SDK\Acm\V20200206\Models\DescribeNamespaceResponse;
use AlibabaCloud\SDK\Acm\V20200206\Models\DescribeNamespacesResponse;
use AlibabaCloud\SDK\Acm\V20200206\Models\DescribeNamespacesWithCreateResponse;
use AlibabaCloud\SDK\Acm\V20200206\Models\DescribeTraceByConfigurationRequest;
use AlibabaCloud\SDK\Acm\V20200206\Models\DescribeTraceByConfigurationResponse;
use AlibabaCloud\SDK\Acm\V20200206\Models\UpdateNamespaceRequest;
use AlibabaCloud\SDK\Acm\V20200206\Models\UpdateNamespaceResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Acm extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('acm', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param string   $productId
     * @param string   $regionId
     * @param string   $endpointRule
     * @param string   $network
     * @param string   $suffix
     * @param string[] $endpointMap
     * @param string   $endpoint
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param BatchExportConfigurationsRequest $request BatchExportConfigurationsRequest
     * @param string[]                         $headers map
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchExportConfigurationsResponse BatchExportConfigurationsResponse
     */
    public function batchExportConfigurationsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->data)) {
            $query['Data'] = $request->data;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchExportConfigurations',
            'version'     => '2020-02-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/diamond-ops/pop/batch/export',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return BatchExportConfigurationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchExportConfigurationsRequest $request BatchExportConfigurationsRequest
     *
     * @return BatchExportConfigurationsResponse BatchExportConfigurationsResponse
     */
    public function batchExportConfigurations($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchExportConfigurationsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param BatchImportConfigurationsRequest $request BatchImportConfigurationsRequest
     * @param string[]                         $headers map
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchImportConfigurationsResponse BatchImportConfigurationsResponse
     */
    public function batchImportConfigurationsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->fileUrl)) {
            $body['FileUrl'] = $request->fileUrl;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $body['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->policy)) {
            $body['Policy'] = $request->policy;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BatchImportConfigurations',
            'version'     => '2020-02-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/diamond-ops/pop/batch/import',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchImportConfigurationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchImportConfigurationsRequest $request BatchImportConfigurationsRequest
     *
     * @return BatchImportConfigurationsResponse BatchImportConfigurationsResponse
     */
    public function batchImportConfigurations($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchImportConfigurationsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CheckConfigurationCloneRequest $request CheckConfigurationCloneRequest
     * @param string[]                       $headers map
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckConfigurationCloneResponse CheckConfigurationCloneResponse
     */
    public function checkConfigurationCloneWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->data)) {
            $body['Data'] = $request->data;
        }
        if (!Utils::isUnset($request->namespaceFrom)) {
            $body['NamespaceFrom'] = $request->namespaceFrom;
        }
        if (!Utils::isUnset($request->namespaceTo)) {
            $body['NamespaceTo'] = $request->namespaceTo;
        }
        if (!Utils::isUnset($request->policy)) {
            $body['Policy'] = $request->policy;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CheckConfigurationClone',
            'version'     => '2020-02-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/diamond-ops/pop/batch/checkForClone',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckConfigurationCloneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckConfigurationCloneRequest $request CheckConfigurationCloneRequest
     *
     * @return CheckConfigurationCloneResponse CheckConfigurationCloneResponse
     */
    public function checkConfigurationClone($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->checkConfigurationCloneWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CheckConfigurationExportRequest $request CheckConfigurationExportRequest
     * @param string[]                        $headers map
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckConfigurationExportResponse CheckConfigurationExportResponse
     */
    public function checkConfigurationExportWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->data)) {
            $body['Data'] = $request->data;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $body['NamespaceId'] = $request->namespaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CheckConfigurationExport',
            'version'     => '2020-02-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/diamond-ops/pop/batch/checkForExport',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckConfigurationExportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckConfigurationExportRequest $request CheckConfigurationExportRequest
     *
     * @return CheckConfigurationExportResponse CheckConfigurationExportResponse
     */
    public function checkConfigurationExport($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->checkConfigurationExportWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CloneConfigurationRequest $request CloneConfigurationRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CloneConfigurationResponse CloneConfigurationResponse
     */
    public function cloneConfigurationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->data)) {
            $body['Data'] = $request->data;
        }
        if (!Utils::isUnset($request->namespaceFrom)) {
            $body['NamespaceFrom'] = $request->namespaceFrom;
        }
        if (!Utils::isUnset($request->namespaceTo)) {
            $body['NamespaceTo'] = $request->namespaceTo;
        }
        if (!Utils::isUnset($request->policy)) {
            $body['Policy'] = $request->policy;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CloneConfiguration',
            'version'     => '2020-02-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/diamond-ops/pop/batch/clone',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CloneConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CloneConfigurationRequest $request CloneConfigurationRequest
     *
     * @return CloneConfigurationResponse CloneConfigurationResponse
     */
    public function cloneConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cloneConfigurationWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateConfigurationRequest $request CreateConfigurationRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateConfigurationResponse CreateConfigurationResponse
     */
    public function createConfigurationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appName)) {
            $body['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->content)) {
            $body['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->dataId)) {
            $body['DataId'] = $request->dataId;
        }
        if (!Utils::isUnset($request->desc)) {
            $body['Desc'] = $request->desc;
        }
        if (!Utils::isUnset($request->group)) {
            $body['Group'] = $request->group;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $body['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->tags)) {
            $body['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateConfiguration',
            'version'     => '2020-02-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/diamond-ops/pop/configuration',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateConfigurationRequest $request CreateConfigurationRequest
     *
     * @return CreateConfigurationResponse CreateConfigurationResponse
     */
    public function createConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createConfigurationWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateNamespaceRequest $request CreateNamespaceRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateNamespaceResponse CreateNamespaceResponse
     */
    public function createNamespaceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateNamespace',
            'version'     => '2020-02-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/diamond-ops/pop/namespace',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateNamespaceRequest $request CreateNamespaceRequest
     *
     * @return CreateNamespaceResponse CreateNamespaceResponse
     */
    public function createNamespace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createNamespaceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteConfigurationRequest $request DeleteConfigurationRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteConfigurationResponse DeleteConfigurationResponse
     */
    public function deleteConfigurationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dataId)) {
            $query['DataId'] = $request->dataId;
        }
        if (!Utils::isUnset($request->group)) {
            $query['Group'] = $request->group;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteConfiguration',
            'version'     => '2020-02-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/diamond-ops/pop/configuration',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteConfigurationRequest $request DeleteConfigurationRequest
     *
     * @return DeleteConfigurationResponse DeleteConfigurationResponse
     */
    public function deleteConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteConfigurationWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteNamespaceRequest $request DeleteNamespaceRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteNamespaceResponse DeleteNamespaceResponse
     */
    public function deleteNamespaceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteNamespace',
            'version'     => '2020-02-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/diamond-ops/pop/namespace',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteNamespaceRequest $request DeleteNamespaceRequest
     *
     * @return DeleteNamespaceResponse DeleteNamespaceResponse
     */
    public function deleteNamespace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteNamespaceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeployConfigurationRequest $request DeployConfigurationRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeployConfigurationResponse DeployConfigurationResponse
     */
    public function deployConfigurationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appName)) {
            $body['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->betaIps)) {
            $body['BetaIps'] = $request->betaIps;
        }
        if (!Utils::isUnset($request->content)) {
            $body['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->dataId)) {
            $body['DataId'] = $request->dataId;
        }
        if (!Utils::isUnset($request->desc)) {
            $body['Desc'] = $request->desc;
        }
        if (!Utils::isUnset($request->group)) {
            $body['Group'] = $request->group;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $body['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->tags)) {
            $body['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeployConfiguration',
            'version'     => '2020-02-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/diamond-ops/pop/configuration',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeployConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeployConfigurationRequest $request DeployConfigurationRequest
     *
     * @return DeployConfigurationResponse DeployConfigurationResponse
     */
    public function deployConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deployConfigurationWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeConfigurationRequest $request DescribeConfigurationRequest
     * @param string[]                     $headers map
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeConfigurationResponse DescribeConfigurationResponse
     */
    public function describeConfigurationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dataId)) {
            $query['DataId'] = $request->dataId;
        }
        if (!Utils::isUnset($request->group)) {
            $query['Group'] = $request->group;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeConfiguration',
            'version'     => '2020-02-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/diamond-ops/pop/configuration',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeConfigurationRequest $request DescribeConfigurationRequest
     *
     * @return DescribeConfigurationResponse DescribeConfigurationResponse
     */
    public function describeConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeConfigurationWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeImportFileUrlRequest $request DescribeImportFileUrlRequest
     * @param string[]                     $headers map
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeImportFileUrlResponse DescribeImportFileUrlResponse
     */
    public function describeImportFileUrlWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contentType)) {
            $query['ContentType'] = $request->contentType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeImportFileUrl',
            'version'     => '2020-02-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/diamond-ops/pop/batch/importFileUrl',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeImportFileUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeImportFileUrlRequest $request DescribeImportFileUrlRequest
     *
     * @return DescribeImportFileUrlResponse DescribeImportFileUrlResponse
     */
    public function describeImportFileUrl($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeImportFileUrlWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeNamespaceRequest $request DescribeNamespaceRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeNamespaceResponse DescribeNamespaceResponse
     */
    public function describeNamespaceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeNamespace',
            'version'     => '2020-02-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/diamond-ops/pop/namespace',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeNamespaceRequest $request DescribeNamespaceRequest
     *
     * @return DescribeNamespaceResponse DescribeNamespaceResponse
     */
    public function describeNamespace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeNamespaceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeNamespacesResponse DescribeNamespacesResponse
     */
    public function describeNamespacesWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeNamespaces',
            'version'     => '2020-02-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/diamond-ops/pop/namespace/list',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeNamespacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeNamespacesResponse DescribeNamespacesResponse
     */
    public function describeNamespaces()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeNamespacesWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeNamespacesWithCreateResponse DescribeNamespacesWithCreateResponse
     */
    public function describeNamespacesWithCreateWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeNamespacesWithCreate',
            'version'     => '2020-02-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/diamond-ops/pop/namespace/listWithCreate',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeNamespacesWithCreateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeNamespacesWithCreateResponse DescribeNamespacesWithCreateResponse
     */
    public function describeNamespacesWithCreate()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeNamespacesWithCreateWithOptions($headers, $runtime);
    }

    /**
     * @param DescribeTraceByConfigurationRequest $request DescribeTraceByConfigurationRequest
     * @param string[]                            $headers map
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTraceByConfigurationResponse DescribeTraceByConfigurationResponse
     */
    public function describeTraceByConfigurationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dataId)) {
            $query['DataId'] = $request->dataId;
        }
        if (!Utils::isUnset($request->endTs)) {
            $query['EndTs'] = $request->endTs;
        }
        if (!Utils::isUnset($request->group)) {
            $query['Group'] = $request->group;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->startTs)) {
            $query['StartTs'] = $request->startTs;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTraceByConfiguration',
            'version'     => '2020-02-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/diamond-ops/pop/trace/getByConfiguration',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeTraceByConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeTraceByConfigurationRequest $request DescribeTraceByConfigurationRequest
     *
     * @return DescribeTraceByConfigurationResponse DescribeTraceByConfigurationResponse
     */
    public function describeTraceByConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeTraceByConfigurationWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateNamespaceRequest $request UpdateNamespaceRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateNamespaceResponse UpdateNamespaceResponse
     */
    public function updateNamespaceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->namespaceId)) {
            $body['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->namespaceName)) {
            $body['NamespaceName'] = $request->namespaceName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateNamespace',
            'version'     => '2020-02-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/diamond-ops/pop/namespace',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateNamespaceRequest $request UpdateNamespaceRequest
     *
     * @return UpdateNamespaceResponse UpdateNamespaceResponse
     */
    public function updateNamespace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateNamespaceWithOptions($request, $headers, $runtime);
    }
}
