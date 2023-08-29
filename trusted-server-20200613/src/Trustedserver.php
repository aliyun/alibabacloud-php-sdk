<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trustedserver\V20200613;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Trustedserver\V20200613\Models\DescribeBootRequest;
use AlibabaCloud\SDK\Trustedserver\V20200613\Models\DescribeBootResponse;
use AlibabaCloud\SDK\Trustedserver\V20200613\Models\DescribeEventsRequest;
use AlibabaCloud\SDK\Trustedserver\V20200613\Models\DescribeEventsResponse;
use AlibabaCloud\SDK\Trustedserver\V20200613\Models\DescribeInstanceRequest;
use AlibabaCloud\SDK\Trustedserver\V20200613\Models\DescribeInstanceResponse;
use AlibabaCloud\SDK\Trustedserver\V20200613\Models\GenerateAikcertRequest;
use AlibabaCloud\SDK\Trustedserver\V20200613\Models\GenerateAikcertResponse;
use AlibabaCloud\SDK\Trustedserver\V20200613\Models\GenerateNonceRequest;
use AlibabaCloud\SDK\Trustedserver\V20200613\Models\GenerateNonceResponse;
use AlibabaCloud\SDK\Trustedserver\V20200613\Models\IgnoreEventsRequest;
use AlibabaCloud\SDK\Trustedserver\V20200613\Models\IgnoreEventsResponse;
use AlibabaCloud\SDK\Trustedserver\V20200613\Models\ProduceAikcertRequest;
use AlibabaCloud\SDK\Trustedserver\V20200613\Models\ProduceAikcertResponse;
use AlibabaCloud\SDK\Trustedserver\V20200613\Models\PutMessageRequest;
use AlibabaCloud\SDK\Trustedserver\V20200613\Models\PutMessageResponse;
use AlibabaCloud\SDK\Trustedserver\V20200613\Models\RegisterMessageRequest;
use AlibabaCloud\SDK\Trustedserver\V20200613\Models\RegisterMessageResponse;
use AlibabaCloud\SDK\Trustedserver\V20200613\Models\TrustEventsRequest;
use AlibabaCloud\SDK\Trustedserver\V20200613\Models\TrustEventsResponse;
use AlibabaCloud\SDK\Trustedserver\V20200613\Models\UnregisterMessageRequest;
use AlibabaCloud\SDK\Trustedserver\V20200613\Models\UnregisterMessageResponse;
use AlibabaCloud\SDK\Trustedserver\V20200613\Models\VerifyMessageRequest;
use AlibabaCloud\SDK\Trustedserver\V20200613\Models\VerifyMessageResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Trustedserver extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_signatureAlgorithm = 'v2';
        $this->_endpointRule       = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('trusted-server', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param DescribeBootRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeBootResponse
     */
    public function describeBootWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->propertyUuid)) {
            $query['PropertyUuid'] = $request->propertyUuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBoot',
            'version'     => '2020-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBootResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBootRequest $request
     *
     * @return DescribeBootResponse
     */
    public function describeBoot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBootWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEventsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeEventsResponse
     */
    public function describeEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->createEndDate)) {
            $query['CreateEndDate'] = $request->createEndDate;
        }
        if (!Utils::isUnset($request->createStartDate)) {
            $query['CreateStartDate'] = $request->createStartDate;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->eventAffiliation)) {
            $query['EventAffiliation'] = $request->eventAffiliation;
        }
        if (!Utils::isUnset($request->eventLevel)) {
            $query['EventLevel'] = $request->eventLevel;
        }
        if (!Utils::isUnset($request->eventStatus)) {
            $query['EventStatus'] = $request->eventStatus;
        }
        if (!Utils::isUnset($request->eventType)) {
            $query['EventType'] = $request->eventType;
        }
        if (!Utils::isUnset($request->handleEndDate)) {
            $query['HandleEndDate'] = $request->handleEndDate;
        }
        if (!Utils::isUnset($request->handleStartDate)) {
            $query['HandleStartDate'] = $request->handleStartDate;
        }
        if (!Utils::isUnset($request->handleType)) {
            $query['HandleType'] = $request->handleType;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->propertyName)) {
            $query['PropertyName'] = $request->propertyName;
        }
        if (!Utils::isUnset($request->propertyPrivateIp)) {
            $query['PropertyPrivateIp'] = $request->propertyPrivateIp;
        }
        if (!Utils::isUnset($request->propertyPublicIp)) {
            $query['PropertyPublicIp'] = $request->propertyPublicIp;
        }
        if (!Utils::isUnset($request->propertyUuid)) {
            $query['PropertyUuid'] = $request->propertyUuid;
        }
        if (!Utils::isUnset($request->suspect)) {
            $query['Suspect'] = $request->suspect;
        }
        if (!Utils::isUnset($request->suspectSig)) {
            $query['SuspectSig'] = $request->suspectSig;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEvents',
            'version'     => '2020-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeEventsRequest $request
     *
     * @return DescribeEventsResponse
     */
    public function describeEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeInstanceResponse
     */
    public function describeInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->propertyUuid)) {
            $query['PropertyUuid'] = $request->propertyUuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstance',
            'version'     => '2020-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstanceRequest $request
     *
     * @return DescribeInstanceResponse
     */
    public function describeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceWithOptions($request, $runtime);
    }

    /**
     * @param GenerateAikcertRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GenerateAikcertResponse
     */
    public function generateAikcertWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aikName)) {
            $query['AikName'] = $request->aikName;
        }
        if (!Utils::isUnset($request->aikPub)) {
            $query['AikPub'] = $request->aikPub;
        }
        if (!Utils::isUnset($request->ekCert)) {
            $query['EkCert'] = $request->ekCert;
        }
        if (!Utils::isUnset($request->ekPub)) {
            $query['EkPub'] = $request->ekPub;
        }
        if (!Utils::isUnset($request->nonceDigest)) {
            $query['NonceDigest'] = $request->nonceDigest;
        }
        if (!Utils::isUnset($request->propertyUuid)) {
            $query['PropertyUuid'] = $request->propertyUuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GenerateAikcert',
            'version'     => '2020-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GenerateAikcertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GenerateAikcertRequest $request
     *
     * @return GenerateAikcertResponse
     */
    public function generateAikcert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateAikcertWithOptions($request, $runtime);
    }

    /**
     * @param GenerateNonceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GenerateNonceResponse
     */
    public function generateNonceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aikName)) {
            $query['AikName'] = $request->aikName;
        }
        if (!Utils::isUnset($request->ekCert)) {
            $query['EkCert'] = $request->ekCert;
        }
        if (!Utils::isUnset($request->ekPub)) {
            $query['EkPub'] = $request->ekPub;
        }
        if (!Utils::isUnset($request->propertyUuid)) {
            $query['PropertyUuid'] = $request->propertyUuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GenerateNonce',
            'version'     => '2020-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GenerateNonceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GenerateNonceRequest $request
     *
     * @return GenerateNonceResponse
     */
    public function generateNonce($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateNonceWithOptions($request, $runtime);
    }

    /**
     * @param IgnoreEventsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return IgnoreEventsResponse
     */
    public function ignoreEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eventUuids)) {
            $query['EventUuids'] = $request->eventUuids;
        }
        if (!Utils::isUnset($request->handleStyle)) {
            $query['HandleStyle'] = $request->handleStyle;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'IgnoreEvents',
            'version'     => '2020-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return IgnoreEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param IgnoreEventsRequest $request
     *
     * @return IgnoreEventsResponse
     */
    public function ignoreEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->ignoreEventsWithOptions($request, $runtime);
    }

    /**
     * @param ProduceAikcertRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ProduceAikcertResponse
     */
    public function produceAikcertWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aikName)) {
            $query['AikName'] = $request->aikName;
        }
        if (!Utils::isUnset($request->certRequest)) {
            $query['CertRequest'] = $request->certRequest;
        }
        if (!Utils::isUnset($request->ekCert)) {
            $query['EkCert'] = $request->ekCert;
        }
        if (!Utils::isUnset($request->ekPubKey)) {
            $query['EkPubKey'] = $request->ekPubKey;
        }
        if (!Utils::isUnset($request->includeCertChain)) {
            $query['IncludeCertChain'] = $request->includeCertChain;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ProduceAikcert',
            'version'     => '2020-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ProduceAikcertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ProduceAikcertRequest $request
     *
     * @return ProduceAikcertResponse
     */
    public function produceAikcert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->produceAikcertWithOptions($request, $runtime);
    }

    /**
     * @param PutMessageRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return PutMessageResponse
     */
    public function putMessageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileData)) {
            $query['FileData'] = $request->fileData;
        }
        if (!Utils::isUnset($request->propertyUuid)) {
            $query['PropertyUuid'] = $request->propertyUuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PutMessage',
            'version'     => '2020-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PutMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PutMessageRequest $request
     *
     * @return PutMessageResponse
     */
    public function putMessage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putMessageWithOptions($request, $runtime);
    }

    /**
     * @param RegisterMessageRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RegisterMessageResponse
     */
    public function registerMessageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->extensions)) {
            $query['Extensions'] = $request->extensions;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->propertyAffiliation)) {
            $query['PropertyAffiliation'] = $request->propertyAffiliation;
        }
        if (!Utils::isUnset($request->propertyName)) {
            $query['PropertyName'] = $request->propertyName;
        }
        if (!Utils::isUnset($request->propertyPrivateIp)) {
            $query['PropertyPrivateIp'] = $request->propertyPrivateIp;
        }
        if (!Utils::isUnset($request->propertyPublicIp)) {
            $query['PropertyPublicIp'] = $request->propertyPublicIp;
        }
        if (!Utils::isUnset($request->propertyUuid)) {
            $query['PropertyUuid'] = $request->propertyUuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RegisterMessage',
            'version'     => '2020-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RegisterMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RegisterMessageRequest $request
     *
     * @return RegisterMessageResponse
     */
    public function registerMessage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerMessageWithOptions($request, $runtime);
    }

    /**
     * @param TrustEventsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return TrustEventsResponse
     */
    public function trustEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eventUuids)) {
            $query['EventUuids'] = $request->eventUuids;
        }
        if (!Utils::isUnset($request->handleStyle)) {
            $query['HandleStyle'] = $request->handleStyle;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TrustEvents',
            'version'     => '2020-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TrustEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TrustEventsRequest $request
     *
     * @return TrustEventsResponse
     */
    public function trustEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->trustEventsWithOptions($request, $runtime);
    }

    /**
     * @param UnregisterMessageRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UnregisterMessageResponse
     */
    public function unregisterMessageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->properties)) {
            $query['Properties'] = $request->properties;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnregisterMessage',
            'version'     => '2020-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnregisterMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UnregisterMessageRequest $request
     *
     * @return UnregisterMessageResponse
     */
    public function unregisterMessage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unregisterMessageWithOptions($request, $runtime);
    }

    /**
     * @param VerifyMessageRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return VerifyMessageResponse
     */
    public function verifyMessageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->fileData)) {
            $body['FileData'] = $request->fileData;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'VerifyMessage',
            'version'     => '2020-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VerifyMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param VerifyMessageRequest $request
     *
     * @return VerifyMessageResponse
     */
    public function verifyMessage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyMessageWithOptions($request, $runtime);
    }
}
