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
     * @param BatchExportConfigurationsRequest $request
     *
     * @return BatchExportConfigurationsResponse
     */
    public function batchExportConfigurations($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchExportConfigurationsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param BatchExportConfigurationsRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return BatchExportConfigurationsResponse
     */
    public function batchExportConfigurationsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->namespaceId)) {
            @$query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->data)) {
            @$query['Data'] = $request->data;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return BatchExportConfigurationsResponse::fromMap($this->doROARequest('BatchExportConfigurations', '2020-02-06', 'HTTPS', 'GET', 'AK', '/diamond-ops/pop/batch/export', 'json', $req, $runtime));
    }

    /**
     * @param BatchImportConfigurationsRequest $request
     *
     * @return BatchImportConfigurationsResponse
     */
    public function batchImportConfigurations($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchImportConfigurationsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param BatchImportConfigurationsRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return BatchImportConfigurationsResponse
     */
    public function batchImportConfigurationsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->namespaceId)) {
            @$body['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->policy)) {
            @$body['Policy'] = $request->policy;
        }
        if (!Utils::isUnset($request->fileUrl)) {
            @$body['FileUrl'] = $request->fileUrl;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return BatchImportConfigurationsResponse::fromMap($this->doROARequestWithForm('BatchImportConfigurations', '2020-02-06', 'HTTPS', 'POST', 'AK', '/diamond-ops/pop/batch/import', 'json', $req, $runtime));
    }

    /**
     * @param CheckConfigurationCloneRequest $request
     *
     * @return CheckConfigurationCloneResponse
     */
    public function checkConfigurationClone($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->checkConfigurationCloneWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CheckConfigurationCloneRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return CheckConfigurationCloneResponse
     */
    public function checkConfigurationCloneWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->policy)) {
            @$body['Policy'] = $request->policy;
        }
        if (!Utils::isUnset($request->namespaceFrom)) {
            @$body['NamespaceFrom'] = $request->namespaceFrom;
        }
        if (!Utils::isUnset($request->namespaceTo)) {
            @$body['NamespaceTo'] = $request->namespaceTo;
        }
        if (!Utils::isUnset($request->data)) {
            @$body['Data'] = $request->data;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return CheckConfigurationCloneResponse::fromMap($this->doROARequestWithForm('CheckConfigurationClone', '2020-02-06', 'HTTPS', 'POST', 'AK', '/diamond-ops/pop/batch/checkForClone', 'json', $req, $runtime));
    }

    /**
     * @param CheckConfigurationExportRequest $request
     *
     * @return CheckConfigurationExportResponse
     */
    public function checkConfigurationExport($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->checkConfigurationExportWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CheckConfigurationExportRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return CheckConfigurationExportResponse
     */
    public function checkConfigurationExportWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->namespaceId)) {
            @$body['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->data)) {
            @$body['Data'] = $request->data;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return CheckConfigurationExportResponse::fromMap($this->doROARequestWithForm('CheckConfigurationExport', '2020-02-06', 'HTTPS', 'POST', 'AK', '/diamond-ops/pop/batch/checkForExport', 'json', $req, $runtime));
    }

    /**
     * @param CloneConfigurationRequest $request
     *
     * @return CloneConfigurationResponse
     */
    public function cloneConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cloneConfigurationWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CloneConfigurationRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CloneConfigurationResponse
     */
    public function cloneConfigurationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->policy)) {
            @$body['Policy'] = $request->policy;
        }
        if (!Utils::isUnset($request->namespaceFrom)) {
            @$body['NamespaceFrom'] = $request->namespaceFrom;
        }
        if (!Utils::isUnset($request->namespaceTo)) {
            @$body['NamespaceTo'] = $request->namespaceTo;
        }
        if (!Utils::isUnset($request->data)) {
            @$body['Data'] = $request->data;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return CloneConfigurationResponse::fromMap($this->doROARequestWithForm('CloneConfiguration', '2020-02-06', 'HTTPS', 'POST', 'AK', '/diamond-ops/pop/batch/clone', 'json', $req, $runtime));
    }

    /**
     * @param CreateConfigurationRequest $request
     *
     * @return CreateConfigurationResponse
     */
    public function createConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createConfigurationWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateConfigurationRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreateConfigurationResponse
     */
    public function createConfigurationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dataId)) {
            @$body['DataId'] = $request->dataId;
        }
        if (!Utils::isUnset($request->appName)) {
            @$body['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->group)) {
            @$body['Group'] = $request->group;
        }
        if (!Utils::isUnset($request->desc)) {
            @$body['Desc'] = $request->desc;
        }
        if (!Utils::isUnset($request->tags)) {
            @$body['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->content)) {
            @$body['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->type)) {
            @$body['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            @$body['NamespaceId'] = $request->namespaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return CreateConfigurationResponse::fromMap($this->doROARequestWithForm('CreateConfiguration', '2020-02-06', 'HTTPS', 'POST', 'AK', '/diamond-ops/pop/configuration', 'json', $req, $runtime));
    }

    /**
     * @param CreateNamespaceRequest $request
     *
     * @return CreateNamespaceResponse
     */
    public function createNamespace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createNamespaceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateNamespaceRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateNamespaceResponse
     */
    public function createNamespaceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->name)) {
            @$body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return CreateNamespaceResponse::fromMap($this->doROARequestWithForm('CreateNamespace', '2020-02-06', 'HTTPS', 'POST', 'AK', '/diamond-ops/pop/namespace', 'json', $req, $runtime));
    }

    /**
     * @param DeleteConfigurationRequest $request
     *
     * @return DeleteConfigurationResponse
     */
    public function deleteConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteConfigurationWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteConfigurationRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteConfigurationResponse
     */
    public function deleteConfigurationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dataId)) {
            @$query['DataId'] = $request->dataId;
        }
        if (!Utils::isUnset($request->group)) {
            @$query['Group'] = $request->group;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            @$query['NamespaceId'] = $request->namespaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeleteConfigurationResponse::fromMap($this->doROARequest('DeleteConfiguration', '2020-02-06', 'HTTPS', 'DELETE', 'AK', '/diamond-ops/pop/configuration', 'json', $req, $runtime));
    }

    /**
     * @param DeleteNamespaceRequest $request
     *
     * @return DeleteNamespaceResponse
     */
    public function deleteNamespace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteNamespaceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteNamespaceRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteNamespaceResponse
     */
    public function deleteNamespaceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->namespaceId)) {
            @$query['NamespaceId'] = $request->namespaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeleteNamespaceResponse::fromMap($this->doROARequest('DeleteNamespace', '2020-02-06', 'HTTPS', 'DELETE', 'AK', '/diamond-ops/pop/namespace', 'json', $req, $runtime));
    }

    /**
     * @param DeployConfigurationRequest $request
     *
     * @return DeployConfigurationResponse
     */
    public function deployConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deployConfigurationWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeployConfigurationRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return DeployConfigurationResponse
     */
    public function deployConfigurationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dataId)) {
            @$body['DataId'] = $request->dataId;
        }
        if (!Utils::isUnset($request->appName)) {
            @$body['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->group)) {
            @$body['Group'] = $request->group;
        }
        if (!Utils::isUnset($request->desc)) {
            @$body['Desc'] = $request->desc;
        }
        if (!Utils::isUnset($request->tags)) {
            @$body['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->content)) {
            @$body['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->type)) {
            @$body['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            @$body['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->betaIps)) {
            @$body['BetaIps'] = $request->betaIps;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return DeployConfigurationResponse::fromMap($this->doROARequestWithForm('DeployConfiguration', '2020-02-06', 'HTTPS', 'PUT', 'AK', '/diamond-ops/pop/configuration', 'json', $req, $runtime));
    }

    /**
     * @param DescribeConfigurationRequest $request
     *
     * @return DescribeConfigurationResponse
     */
    public function describeConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeConfigurationWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeConfigurationRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeConfigurationResponse
     */
    public function describeConfigurationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dataId)) {
            @$query['DataId'] = $request->dataId;
        }
        if (!Utils::isUnset($request->group)) {
            @$query['Group'] = $request->group;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            @$query['NamespaceId'] = $request->namespaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeConfigurationResponse::fromMap($this->doROARequest('DescribeConfiguration', '2020-02-06', 'HTTPS', 'GET', 'AK', '/diamond-ops/pop/configuration', 'json', $req, $runtime));
    }

    /**
     * @param DescribeImportFileUrlRequest $request
     *
     * @return DescribeImportFileUrlResponse
     */
    public function describeImportFileUrl($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeImportFileUrlWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeImportFileUrlRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeImportFileUrlResponse
     */
    public function describeImportFileUrlWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contentType)) {
            @$query['ContentType'] = $request->contentType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeImportFileUrlResponse::fromMap($this->doROARequest('DescribeImportFileUrl', '2020-02-06', 'HTTPS', 'GET', 'AK', '/diamond-ops/pop/batch/importFileUrl', 'json', $req, $runtime));
    }

    /**
     * @param DescribeNamespaceRequest $request
     *
     * @return DescribeNamespaceResponse
     */
    public function describeNamespace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeNamespaceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeNamespaceRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeNamespaceResponse
     */
    public function describeNamespaceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->namespaceId)) {
            @$query['NamespaceId'] = $request->namespaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeNamespaceResponse::fromMap($this->doROARequest('DescribeNamespace', '2020-02-06', 'HTTPS', 'GET', 'AK', '/diamond-ops/pop/namespace', 'json', $req, $runtime));
    }

    /**
     * @return DescribeNamespacesResponse
     */
    public function describeNamespaces()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeNamespacesWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeNamespacesResponse
     */
    public function describeNamespacesWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribeNamespacesResponse::fromMap($this->doROARequest('DescribeNamespaces', '2020-02-06', 'HTTPS', 'GET', 'AK', '/diamond-ops/pop/namespace/list', 'json', $req, $runtime));
    }

    /**
     * @return DescribeNamespacesWithCreateResponse
     */
    public function describeNamespacesWithCreate()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeNamespacesWithCreateWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeNamespacesWithCreateResponse
     */
    public function describeNamespacesWithCreateWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribeNamespacesWithCreateResponse::fromMap($this->doROARequest('DescribeNamespacesWithCreate', '2020-02-06', 'HTTPS', 'GET', 'AK', '/diamond-ops/pop/namespace/listWithCreate', 'json', $req, $runtime));
    }

    /**
     * @param DescribeTraceByConfigurationRequest $request
     *
     * @return DescribeTraceByConfigurationResponse
     */
    public function describeTraceByConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeTraceByConfigurationWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeTraceByConfigurationRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeTraceByConfigurationResponse
     */
    public function describeTraceByConfigurationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dataId)) {
            @$query['DataId'] = $request->dataId;
        }
        if (!Utils::isUnset($request->group)) {
            @$query['Group'] = $request->group;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            @$query['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->startTs)) {
            @$query['StartTs'] = $request->startTs;
        }
        if (!Utils::isUnset($request->endTs)) {
            @$query['EndTs'] = $request->endTs;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeTraceByConfigurationResponse::fromMap($this->doROARequest('DescribeTraceByConfiguration', '2020-02-06', 'HTTPS', 'GET', 'AK', '/diamond-ops/pop/trace/getByConfiguration', 'json', $req, $runtime));
    }

    /**
     * @param UpdateNamespaceRequest $request
     *
     * @return UpdateNamespaceResponse
     */
    public function updateNamespace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateNamespaceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateNamespaceRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateNamespaceResponse
     */
    public function updateNamespaceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->namespaceId)) {
            @$body['NamespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->namespaceName)) {
            @$body['NamespaceName'] = $request->namespaceName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return UpdateNamespaceResponse::fromMap($this->doROARequestWithForm('UpdateNamespace', '2020-02-06', 'HTTPS', 'PUT', 'AK', '/diamond-ops/pop/namespace', 'json', $req, $runtime));
    }
}
