<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AmpTest\V20201230;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\AmpTest\V20201230\Models\CreateRulesRequest;
use AlibabaCloud\SDK\AmpTest\V20201230\Models\CreateRulesResponse;
use AlibabaCloud\SDK\AmpTest\V20201230\Models\CreateRulesShrinkRequest;
use AlibabaCloud\SDK\AmpTest\V20201230\Models\HuichengetestResponse;
use AlibabaCloud\SDK\AmpTest\V20201230\Models\HuichengetRequest;
use AlibabaCloud\SDK\AmpTest\V20201230\Models\HuichengetResponse;
use AlibabaCloud\SDK\AmpTest\V20201230\Models\HuichengTestGrayEightRequest;
use AlibabaCloud\SDK\AmpTest\V20201230\Models\HuichengTestGrayEightResponse;
use AlibabaCloud\SDK\AmpTest\V20201230\Models\HuichengTestGrayEightShrinkRequest;
use AlibabaCloud\SDK\AmpTest\V20201230\Models\HuichengTestGrayFifthRequest;
use AlibabaCloud\SDK\AmpTest\V20201230\Models\HuichengTestGrayFifthResponse;
use AlibabaCloud\SDK\AmpTest\V20201230\Models\HuichengTestGrayFifthShrinkRequest;
use AlibabaCloud\SDK\AmpTest\V20201230\Models\HuichengTestGrayNineRequest;
use AlibabaCloud\SDK\AmpTest\V20201230\Models\HuichengTestGrayNineResponse;
use AlibabaCloud\SDK\AmpTest\V20201230\Models\HuichengTestGrayNineShrinkRequest;
use AlibabaCloud\SDK\AmpTest\V20201230\Models\HuichengTestGrayRequest;
use AlibabaCloud\SDK\AmpTest\V20201230\Models\HuichengTestGrayResponse;
use AlibabaCloud\SDK\AmpTest\V20201230\Models\HuichengTestGraySecondRequest;
use AlibabaCloud\SDK\AmpTest\V20201230\Models\HuichengTestGraySecondResponse;
use AlibabaCloud\SDK\AmpTest\V20201230\Models\HuichengTestGraySecondShrinkRequest;
use AlibabaCloud\SDK\AmpTest\V20201230\Models\HuichengTestGraySevenRequest;
use AlibabaCloud\SDK\AmpTest\V20201230\Models\HuichengTestGraySevenResponse;
use AlibabaCloud\SDK\AmpTest\V20201230\Models\HuichengTestGraySevenShrinkRequest;
use AlibabaCloud\SDK\AmpTest\V20201230\Models\HuichengTestGrayShrinkRequest;
use AlibabaCloud\SDK\AmpTest\V20201230\Models\HuichengTestGraySixRequest;
use AlibabaCloud\SDK\AmpTest\V20201230\Models\HuichengTestGraySixResponse;
use AlibabaCloud\SDK\AmpTest\V20201230\Models\HuichengTestGraySixShrinkRequest;
use AlibabaCloud\SDK\AmpTest\V20201230\Models\HuichengTestGrayTenRequest;
use AlibabaCloud\SDK\AmpTest\V20201230\Models\HuichengTestGrayTenResponse;
use AlibabaCloud\SDK\AmpTest\V20201230\Models\HuichengTestGrayTenShrinkRequest;
use AlibabaCloud\SDK\AmpTest\V20201230\Models\HuichengTestGrayThirdRequest;
use AlibabaCloud\SDK\AmpTest\V20201230\Models\HuichengTestGrayThirdResponse;
use AlibabaCloud\SDK\AmpTest\V20201230\Models\HuichengTestGrayThirdShrinkRequest;
use AlibabaCloud\SDK\AmpTest\V20201230\Models\HuichengTestResourceOwnerIdResponse;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

/**
 * @internal
 * @coversNothing
 */
class AmpTest extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('amptest', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CreateRulesRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return CreateRulesResponse
     */
    public function createRulesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateRulesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->home)) {
            $request->homeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->home), 'Home', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->homeShrink)) {
            $query['Home'] = $request->homeShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateRules',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateRulesRequest $request
     *
     * @return CreateRulesResponse
     */
    public function createRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRulesWithOptions($request, $runtime);
    }

    /**
     * @param HuichengTestGrayRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return HuichengTestGrayResponse
     */
    public function huichengTestGrayWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new HuichengTestGrayShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->home)) {
            $request->homeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->home), 'Home', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->homeShrink)) {
            $query['Home'] = $request->homeShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'HuichengTestGray',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return HuichengTestGrayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param HuichengTestGrayRequest $request
     *
     * @return HuichengTestGrayResponse
     */
    public function huichengTestGray($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->huichengTestGrayWithOptions($request, $runtime);
    }

    /**
     * @param HuichengTestGrayEightRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return HuichengTestGrayEightResponse
     */
    public function huichengTestGrayEightWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new HuichengTestGrayEightShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->home)) {
            $request->homeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->home), 'Home', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->homeShrink)) {
            $query['Home'] = $request->homeShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'HuichengTestGrayEight',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return HuichengTestGrayEightResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param HuichengTestGrayEightRequest $request
     *
     * @return HuichengTestGrayEightResponse
     */
    public function huichengTestGrayEight($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->huichengTestGrayEightWithOptions($request, $runtime);
    }

    /**
     * @param HuichengTestGrayFifthRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return HuichengTestGrayFifthResponse
     */
    public function huichengTestGrayFifthWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new HuichengTestGrayFifthShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->home)) {
            $request->homeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->home), 'Home', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->homeShrink)) {
            $query['Home'] = $request->homeShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'HuichengTestGrayFifth',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return HuichengTestGrayFifthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param HuichengTestGrayFifthRequest $request
     *
     * @return HuichengTestGrayFifthResponse
     */
    public function huichengTestGrayFifth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->huichengTestGrayFifthWithOptions($request, $runtime);
    }

    /**
     * @param HuichengTestGrayNineRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return HuichengTestGrayNineResponse
     */
    public function huichengTestGrayNineWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new HuichengTestGrayNineShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->home)) {
            $request->homeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->home), 'Home', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->homeShrink)) {
            $query['Home'] = $request->homeShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'HuichengTestGrayNine',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return HuichengTestGrayNineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param HuichengTestGrayNineRequest $request
     *
     * @return HuichengTestGrayNineResponse
     */
    public function huichengTestGrayNine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->huichengTestGrayNineWithOptions($request, $runtime);
    }

    /**
     * @param HuichengTestGraySecondRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return HuichengTestGraySecondResponse
     */
    public function huichengTestGraySecondWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new HuichengTestGraySecondShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->home)) {
            $request->homeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->home), 'Home', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->homeShrink)) {
            $query['Home'] = $request->homeShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'HuichengTestGraySecond',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return HuichengTestGraySecondResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param HuichengTestGraySecondRequest $request
     *
     * @return HuichengTestGraySecondResponse
     */
    public function huichengTestGraySecond($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->huichengTestGraySecondWithOptions($request, $runtime);
    }

    /**
     * @param HuichengTestGraySevenRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return HuichengTestGraySevenResponse
     */
    public function huichengTestGraySevenWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new HuichengTestGraySevenShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->home)) {
            $request->homeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->home), 'Home', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->homeShrink)) {
            $query['Home'] = $request->homeShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'HuichengTestGraySeven',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return HuichengTestGraySevenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param HuichengTestGraySevenRequest $request
     *
     * @return HuichengTestGraySevenResponse
     */
    public function huichengTestGraySeven($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->huichengTestGraySevenWithOptions($request, $runtime);
    }

    /**
     * @param HuichengTestGraySixRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return HuichengTestGraySixResponse
     */
    public function huichengTestGraySixWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new HuichengTestGraySixShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->home)) {
            $request->homeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->home), 'Home', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->homeShrink)) {
            $query['Home'] = $request->homeShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'HuichengTestGraySix',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return HuichengTestGraySixResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param HuichengTestGraySixRequest $request
     *
     * @return HuichengTestGraySixResponse
     */
    public function huichengTestGraySix($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->huichengTestGraySixWithOptions($request, $runtime);
    }

    /**
     * @param HuichengTestGrayTenRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return HuichengTestGrayTenResponse
     */
    public function huichengTestGrayTenWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new HuichengTestGrayTenShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->home)) {
            $request->homeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->home), 'Home', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->homeShrink)) {
            $query['Home'] = $request->homeShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'HuichengTestGrayTen',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return HuichengTestGrayTenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param HuichengTestGrayTenRequest $request
     *
     * @return HuichengTestGrayTenResponse
     */
    public function huichengTestGrayTen($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->huichengTestGrayTenWithOptions($request, $runtime);
    }

    /**
     * @param HuichengTestGrayThirdRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return HuichengTestGrayThirdResponse
     */
    public function huichengTestGrayThirdWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new HuichengTestGrayThirdShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->home)) {
            $request->homeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->home), 'Home', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->homeShrink)) {
            $query['Home'] = $request->homeShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'HuichengTestGrayThird',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return HuichengTestGrayThirdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param HuichengTestGrayThirdRequest $request
     *
     * @return HuichengTestGrayThirdResponse
     */
    public function huichengTestGrayThird($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->huichengTestGrayThirdWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return HuichengTestResourceOwnerIdResponse
     */
    public function huichengTestResourceOwnerIdWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'HuichengTestResourceOwnerId',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return HuichengTestResourceOwnerIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return HuichengTestResourceOwnerIdResponse
     */
    public function huichengTestResourceOwnerId()
    {
        $runtime = new RuntimeOptions([]);

        return $this->huichengTestResourceOwnerIdWithOptions($runtime);
    }

    /**
     * @param HuichengetRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return HuichengetResponse
     */
    public function huichengetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->add)) {
            $query['Add'] = $request->add;
        }
        if (!Utils::isUnset($request->address)) {
            $query['Address'] = $request->address;
        }
        if (!Utils::isUnset($request->apple)) {
            $query['Apple'] = $request->apple;
        }
        if (!Utils::isUnset($request->blue)) {
            $query['Blue'] = $request->blue;
        }
        if (!Utils::isUnset($request->code)) {
            $query['Code'] = $request->code;
        }
        if (!Utils::isUnset($request->enight)) {
            $query['Enight'] = $request->enight;
        }
        if (!Utils::isUnset($request->five)) {
            $query['Five'] = $request->five;
        }
        if (!Utils::isUnset($request->four)) {
            $query['Four'] = $request->four;
        }
        if (!Utils::isUnset($request->hello)) {
            $query['Hello'] = $request->hello;
        }
        if (!Utils::isUnset($request->jack)) {
            $query['Jack'] = $request->jack;
        }
        if (!Utils::isUnset($request->list_)) {
            $query['List'] = $request->list_;
        }
        if (!Utils::isUnset($request->mack)) {
            $query['Mack'] = $request->mack;
        }
        if (!Utils::isUnset($request->newName)) {
            $query['NewName'] = $request->newName;
        }
        if (!Utils::isUnset($request->nigh)) {
            $query['Nigh'] = $request->nigh;
        }
        if (!Utils::isUnset($request->now)) {
            $query['Now'] = $request->now;
        }
        if (!Utils::isUnset($request->params)) {
            $query['Params'] = $request->params;
        }
        if (!Utils::isUnset($request->params1)) {
            $query['Params1'] = $request->params1;
        }
        if (!Utils::isUnset($request->params2)) {
            $query['Params2'] = $request->params2;
        }
        if (!Utils::isUnset($request->params3)) {
            $query['Params3'] = $request->params3;
        }
        if (!Utils::isUnset($request->params4)) {
            $query['Params4'] = $request->params4;
        }
        if (!Utils::isUnset($request->red)) {
            $query['Red'] = $request->red;
        }
        if (!Utils::isUnset($request->six)) {
            $query['Six'] = $request->six;
        }
        if (!Utils::isUnset($request->tea)) {
            $query['Tea'] = $request->tea;
        }
        if (!Utils::isUnset($request->ten)) {
            $query['Ten'] = $request->ten;
        }
        if (!Utils::isUnset($request->three)) {
            $query['Three'] = $request->three;
        }
        if (!Utils::isUnset($request->two)) {
            $query['Two'] = $request->two;
        }
        if (!Utils::isUnset($request->white)) {
            $query['White'] = $request->white;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'Huichenget',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return HuichengetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param HuichengetRequest $request
     *
     * @return HuichengetResponse
     */
    public function huichenget($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->huichengetWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return HuichengetestResponse
     */
    public function huichengetestWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'Huichengetest',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return HuichengetestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return HuichengetestResponse
     */
    public function huichengetest()
    {
        $runtime = new RuntimeOptions([]);

        return $this->huichengetestWithOptions($runtime);
    }
}
