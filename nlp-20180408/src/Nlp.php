<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlp\V20180408;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Nlp\V20180408\Models\EntityResponse;
use AlibabaCloud\SDK\Nlp\V20180408\Models\IEResponse;
use AlibabaCloud\SDK\Nlp\V20180408\Models\KWEResponse;
use AlibabaCloud\SDK\Nlp\V20180408\Models\ReviewAnalysisResponse;
use AlibabaCloud\SDK\Nlp\V20180408\Models\SentimentResponse;
use AlibabaCloud\SDK\Nlp\V20180408\Models\TextStructureResponse;
use AlibabaCloud\SDK\Nlp\V20180408\Models\TranslateResponse;
use AlibabaCloud\SDK\Nlp\V20180408\Models\WordPosResponse;
use AlibabaCloud\SDK\Nlp\V20180408\Models\WordSegmentResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Nlp extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('nlp', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param string $Domain
     *
     * @return EntityResponse
     */
    public function entity($Domain)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->entityWithOptions($Domain, $headers, $runtime);
    }

    /**
     * @param string         $Domain
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return EntityResponse
     */
    public function entityWithOptions($Domain, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return EntityResponse::fromMap($this->doROARequest('Entity', '2018-04-08', 'HTTPS', 'POST', 'AK', '/nlp/api/entity/' . $Domain . '', 'none', $req, $runtime));
    }

    /**
     * @param string $Domain
     *
     * @return IEResponse
     */
    public function iE($Domain)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->iEWithOptions($Domain, $headers, $runtime);
    }

    /**
     * @param string         $Domain
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return IEResponse
     */
    public function iEWithOptions($Domain, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return IEResponse::fromMap($this->doROARequest('IE', '2018-04-08', 'HTTPS', 'POST', 'AK', '/nlp/api/ie/' . $Domain . '', 'none', $req, $runtime));
    }

    /**
     * @param string $Domain
     *
     * @return KWEResponse
     */
    public function kWE($Domain)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->kWEWithOptions($Domain, $headers, $runtime);
    }

    /**
     * @param string         $Domain
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return KWEResponse
     */
    public function kWEWithOptions($Domain, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return KWEResponse::fromMap($this->doROARequest('KWE', '2018-04-08', 'HTTPS', 'POST', 'AK', '/nlp/api/kwe/' . $Domain . '', 'none', $req, $runtime));
    }

    /**
     * @param string $Domain
     *
     * @return ReviewAnalysisResponse
     */
    public function reviewAnalysis($Domain)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->reviewAnalysisWithOptions($Domain, $headers, $runtime);
    }

    /**
     * @param string         $Domain
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ReviewAnalysisResponse
     */
    public function reviewAnalysisWithOptions($Domain, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ReviewAnalysisResponse::fromMap($this->doROARequest('ReviewAnalysis', '2018-04-08', 'HTTPS', 'POST', 'AK', '/nlp/api/reviewanalysis/' . $Domain . '', 'none', $req, $runtime));
    }

    /**
     * @param string $Domain
     *
     * @return SentimentResponse
     */
    public function sentiment($Domain)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->sentimentWithOptions($Domain, $headers, $runtime);
    }

    /**
     * @param string         $Domain
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return SentimentResponse
     */
    public function sentimentWithOptions($Domain, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return SentimentResponse::fromMap($this->doROARequest('Sentiment', '2018-04-08', 'HTTPS', 'POST', 'AK', '/nlp/api/sentiment/' . $Domain . '', 'none', $req, $runtime));
    }

    /**
     * @param string $Domain
     *
     * @return TextStructureResponse
     */
    public function textStructure($Domain)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->textStructureWithOptions($Domain, $headers, $runtime);
    }

    /**
     * @param string         $Domain
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return TextStructureResponse
     */
    public function textStructureWithOptions($Domain, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return TextStructureResponse::fromMap($this->doROARequest('TextStructure', '2018-04-08', 'HTTPS', 'POST', 'AK', '/nlp/api/textstructure/' . $Domain . '', 'none', $req, $runtime));
    }

    /**
     * @param string $Domain
     *
     * @return TranslateResponse
     */
    public function translate($Domain)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->translateWithOptions($Domain, $headers, $runtime);
    }

    /**
     * @param string         $Domain
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return TranslateResponse
     */
    public function translateWithOptions($Domain, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return TranslateResponse::fromMap($this->doROARequest('Translate', '2018-04-08', 'HTTP', 'POST', 'AK', '/nlp/api/translate/' . $Domain . '', 'none', $req, $runtime));
    }

    /**
     * @param string $Domain
     *
     * @return WordPosResponse
     */
    public function wordPos($Domain)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->wordPosWithOptions($Domain, $headers, $runtime);
    }

    /**
     * @param string         $Domain
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return WordPosResponse
     */
    public function wordPosWithOptions($Domain, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return WordPosResponse::fromMap($this->doROARequest('WordPos', '2018-04-08', 'HTTPS', 'POST', 'AK', '/nlp/api/wordpos/' . $Domain . '', 'none', $req, $runtime));
    }

    /**
     * @param string $Domain
     *
     * @return WordSegmentResponse
     */
    public function wordSegment($Domain)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->wordSegmentWithOptions($Domain, $headers, $runtime);
    }

    /**
     * @param string         $Domain
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return WordSegmentResponse
     */
    public function wordSegmentWithOptions($Domain, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return WordSegmentResponse::fromMap($this->doROARequest('WordSegment', '2018-04-08', 'HTTPS', 'POST', 'AK', '/nlp/api/wordsegment/' . $Domain . '', 'none', $req, $runtime));
    }
}
