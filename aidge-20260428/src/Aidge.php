<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Aidge\V20260428\Models\AssetOptimizeLiteRequest;
use AlibabaCloud\SDK\Aidge\V20260428\Models\AssetOptimizeLiteResponse;
use AlibabaCloud\SDK\Aidge\V20260428\Models\AssetOptimizeProRequest;
use AlibabaCloud\SDK\Aidge\V20260428\Models\AssetOptimizeProResponse;
use AlibabaCloud\SDK\Aidge\V20260428\Models\AssetOptimizeProShrinkRequest;
use AlibabaCloud\SDK\Aidge\V20260428\Models\CategoryAttributeMatchRequest;
use AlibabaCloud\SDK\Aidge\V20260428\Models\CategoryAttributeMatchResponse;
use AlibabaCloud\SDK\Aidge\V20260428\Models\CategoryAttributeMatchShrinkRequest;
use AlibabaCloud\SDK\Aidge\V20260428\Models\CategoryMatchRequest;
use AlibabaCloud\SDK\Aidge\V20260428\Models\CategoryMatchResponse;
use AlibabaCloud\SDK\Aidge\V20260428\Models\DiduiAreaDeductionRequest;
use AlibabaCloud\SDK\Aidge\V20260428\Models\DiduiAreaDeductionResponse;
use AlibabaCloud\SDK\Aidge\V20260428\Models\DiduiAreaDeductionShrinkRequest;
use AlibabaCloud\SDK\Aidge\V20260428\Models\DocumentTranslateRequest;
use AlibabaCloud\SDK\Aidge\V20260428\Models\DocumentTranslateResponse;
use AlibabaCloud\SDK\Aidge\V20260428\Models\ImageCroppingRequest;
use AlibabaCloud\SDK\Aidge\V20260428\Models\ImageCroppingResponse;
use AlibabaCloud\SDK\Aidge\V20260428\Models\ImageMattingRequest;
use AlibabaCloud\SDK\Aidge\V20260428\Models\ImageMattingResponse;
use AlibabaCloud\SDK\Aidge\V20260428\Models\ImageRecognitionRequest;
use AlibabaCloud\SDK\Aidge\V20260428\Models\ImageRecognitionResponse;
use AlibabaCloud\SDK\Aidge\V20260428\Models\ImageRecognitionShrinkRequest;
use AlibabaCloud\SDK\Aidge\V20260428\Models\ImageRemovalProRequest;
use AlibabaCloud\SDK\Aidge\V20260428\Models\ImageRemovalProResponse;
use AlibabaCloud\SDK\Aidge\V20260428\Models\ImageRemoveRequest;
use AlibabaCloud\SDK\Aidge\V20260428\Models\ImageRemoveResponse;
use AlibabaCloud\SDK\Aidge\V20260428\Models\ImageRemoveShrinkRequest;
use AlibabaCloud\SDK\Aidge\V20260428\Models\ImageTranslationPlusRequest;
use AlibabaCloud\SDK\Aidge\V20260428\Models\ImageTranslationPlusResponse;
use AlibabaCloud\SDK\Aidge\V20260428\Models\ImageTranslationProRequest;
use AlibabaCloud\SDK\Aidge\V20260428\Models\ImageTranslationProResponse;
use AlibabaCloud\SDK\Aidge\V20260428\Models\ImageTranslationStandardRequest;
use AlibabaCloud\SDK\Aidge\V20260428\Models\ImageTranslationStandardResponse;
use AlibabaCloud\SDK\Aidge\V20260428\Models\LanguageDetectRequest;
use AlibabaCloud\SDK\Aidge\V20260428\Models\LanguageDetectResponse;
use AlibabaCloud\SDK\Aidge\V20260428\Models\MaterialInspectionRequest;
use AlibabaCloud\SDK\Aidge\V20260428\Models\MaterialInspectionResponse;
use AlibabaCloud\SDK\Aidge\V20260428\Models\MerchandisePlacementDetectionRequest;
use AlibabaCloud\SDK\Aidge\V20260428\Models\MerchandisePlacementDetectionResponse;
use AlibabaCloud\SDK\Aidge\V20260428\Models\PackageWeightSizeCheckRequest;
use AlibabaCloud\SDK\Aidge\V20260428\Models\PackageWeightSizeCheckResponse;
use AlibabaCloud\SDK\Aidge\V20260428\Models\PrepaidTextTranslateRequest;
use AlibabaCloud\SDK\Aidge\V20260428\Models\PrepaidTextTranslateResponse;
use AlibabaCloud\SDK\Aidge\V20260428\Models\PrepaidTextTranslateShrinkRequest;
use AlibabaCloud\SDK\Aidge\V20260428\Models\ProductHotspotDetectionRequest;
use AlibabaCloud\SDK\Aidge\V20260428\Models\ProductHotspotDetectionResponse;
use AlibabaCloud\SDK\Aidge\V20260428\Models\ProductHotspotDetectionShrinkRequest;
use AlibabaCloud\SDK\Aidge\V20260428\Models\QueryAsyncTaskResultRequest;
use AlibabaCloud\SDK\Aidge\V20260428\Models\QueryAsyncTaskResultResponse;
use AlibabaCloud\SDK\Aidge\V20260428\Models\SizeChartDetectRequest;
use AlibabaCloud\SDK\Aidge\V20260428\Models\SizeChartDetectResponse;
use AlibabaCloud\SDK\Aidge\V20260428\Models\SizeChartExtractRequest;
use AlibabaCloud\SDK\Aidge\V20260428\Models\SizeChartExtractResponse;
use AlibabaCloud\SDK\Aidge\V20260428\Models\SizeChartExtractShrinkRequest;
use AlibabaCloud\SDK\Aidge\V20260428\Models\TextCorrectRequest;
use AlibabaCloud\SDK\Aidge\V20260428\Models\TextCorrectResponse;
use AlibabaCloud\SDK\Aidge\V20260428\Models\TextTranslateRequest;
use AlibabaCloud\SDK\Aidge\V20260428\Models\TextTranslateResponse;
use AlibabaCloud\SDK\Aidge\V20260428\Models\TextTranslateShrinkRequest;
use AlibabaCloud\SDK\Aidge\V20260428\Models\VideoGenerationRequest;
use AlibabaCloud\SDK\Aidge\V20260428\Models\VideoGenerationResponse;
use AlibabaCloud\SDK\Aidge\V20260428\Models\VideoGenerationShrinkRequest;
use AlibabaCloud\SDK\Aidge\V20260428\Models\VideoTranslationRequest;
use AlibabaCloud\SDK\Aidge\V20260428\Models\VideoTranslationResponse;
use AlibabaCloud\SDK\Aidge\V20260428\Models\VideoTranslationShrinkRequest;
use AlibabaCloud\SDK\Aidge\V20260428\Models\VisionFlowRequest;
use AlibabaCloud\SDK\Aidge\V20260428\Models\VisionFlowResponse;
use AlibabaCloud\SDK\Aidge\V20260428\Models\VisionFlowShrinkRequest;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Aidge extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-beijing' => 'aidge.cn-beijing.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('aidge', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * Provides a one-click cross-platform product listing optimization service for cross-border e-commerce sellers (minimum cost edition). Accepts a source platform product URL and outputs all listing assets adapted to the target platform requirements, including titles, attributes, main images, SKU images, detail images, and copywriting. Uses an officially pre-built minimum-cost workflow that primarily filters and applies lightweight processing without calling expensive image translation capabilities, maximizing cost control while ensuring listing compliance. (Asynchronous).
     *
     * @remarks
     * ## Product Introduction
     * A one-click cross-platform product listing optimization service for cross-border e-commerce sellers (minimum cost edition). Accepts a source platform product URL and outputs all listing assets adapted to the target platform requirements, including titles, attributes, main images, SKU images, detail images, and copywriting. Uses an officially pre-built minimum-cost workflow that primarily filters and applies lightweight processing without calling expensive image translation capabilities, maximizing cost control while ensuring listing compliance. (Asynchronous)
     * ## Scenarios
     * Suitable for cost-sensitive cross-platform listing scenarios where "fast, high-volume, and cheap" is the priority. Examples include bulk listing from 1688 to TEMU, batch uploading of high-SKU inventory, entry-level AI processing for top sellers and ERP/SaaS platforms, and merchants with high daily processing volumes but low requirements for marketing performance.
     * By filtering images that contain watermarks or non-compliant elements and prioritizing clean original images, the service reduces AI generation steps and helps merchants complete cross-platform listings at minimal cost.
     * ## Features
     * This service uses an officially pre-built "minimum cost" product optimization workflow that covers the entire pipeline from asset retrieval, compliance filtering, and text optimization to image processing:
     * 1. Automatically parses 1688 product URLs and extracts multiple asset types including titles, SKUs, main images, detail images, and attributes.
     * 2. Performs text filtering and SEO optimization based on the TEMU platform blacklist and compliance rules.
     * 3. Intelligently identifies watermarks, logos, and Chinese text in images, prioritizing clean original images through filtering. SKU images and a small number of main images are processed using image translation capabilities to comply with platform standards (high-conversion images with marketing text may be filtered out).
     * 4. Completes category matching, attribute filling, and localized rewriting based on target platform requirements.
     *
     * @param request - AssetOptimizeLiteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AssetOptimizeLiteResponse
     *
     * @param AssetOptimizeLiteRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AssetOptimizeLiteResponse
     */
    public function assetOptimizeLiteWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->glossary) {
            @$query['Glossary'] = $request->glossary;
        }

        if (null !== $request->includingProductArea) {
            @$query['IncludingProductArea'] = $request->includingProductArea;
        }

        if (null !== $request->needTrans) {
            @$query['NeedTrans'] = $request->needTrans;
        }

        if (null !== $request->productUrl) {
            @$query['ProductUrl'] = $request->productUrl;
        }

        if (null !== $request->sourceLanguage) {
            @$query['SourceLanguage'] = $request->sourceLanguage;
        }

        if (null !== $request->sourcePlatform) {
            @$query['SourcePlatform'] = $request->sourcePlatform;
        }

        if (null !== $request->targetLanguage) {
            @$query['TargetLanguage'] = $request->targetLanguage;
        }

        if (null !== $request->targetPlatform) {
            @$query['TargetPlatform'] = $request->targetPlatform;
        }

        if (null !== $request->translatingBrandInTheProduct) {
            @$query['TranslatingBrandInTheProduct'] = $request->translatingBrandInTheProduct;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AssetOptimizeLite',
            'version' => '2026-04-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AssetOptimizeLiteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Provides a one-click cross-platform product listing optimization service for cross-border e-commerce sellers (minimum cost edition). Accepts a source platform product URL and outputs all listing assets adapted to the target platform requirements, including titles, attributes, main images, SKU images, detail images, and copywriting. Uses an officially pre-built minimum-cost workflow that primarily filters and applies lightweight processing without calling expensive image translation capabilities, maximizing cost control while ensuring listing compliance. (Asynchronous).
     *
     * @remarks
     * ## Product Introduction
     * A one-click cross-platform product listing optimization service for cross-border e-commerce sellers (minimum cost edition). Accepts a source platform product URL and outputs all listing assets adapted to the target platform requirements, including titles, attributes, main images, SKU images, detail images, and copywriting. Uses an officially pre-built minimum-cost workflow that primarily filters and applies lightweight processing without calling expensive image translation capabilities, maximizing cost control while ensuring listing compliance. (Asynchronous)
     * ## Scenarios
     * Suitable for cost-sensitive cross-platform listing scenarios where "fast, high-volume, and cheap" is the priority. Examples include bulk listing from 1688 to TEMU, batch uploading of high-SKU inventory, entry-level AI processing for top sellers and ERP/SaaS platforms, and merchants with high daily processing volumes but low requirements for marketing performance.
     * By filtering images that contain watermarks or non-compliant elements and prioritizing clean original images, the service reduces AI generation steps and helps merchants complete cross-platform listings at minimal cost.
     * ## Features
     * This service uses an officially pre-built "minimum cost" product optimization workflow that covers the entire pipeline from asset retrieval, compliance filtering, and text optimization to image processing:
     * 1. Automatically parses 1688 product URLs and extracts multiple asset types including titles, SKUs, main images, detail images, and attributes.
     * 2. Performs text filtering and SEO optimization based on the TEMU platform blacklist and compliance rules.
     * 3. Intelligently identifies watermarks, logos, and Chinese text in images, prioritizing clean original images through filtering. SKU images and a small number of main images are processed using image translation capabilities to comply with platform standards (high-conversion images with marketing text may be filtered out).
     * 4. Completes category matching, attribute filling, and localized rewriting based on target platform requirements.
     *
     * @param request - AssetOptimizeLiteRequest
     *
     * @returns AssetOptimizeLiteResponse
     *
     * @param AssetOptimizeLiteRequest $request
     *
     * @return AssetOptimizeLiteResponse
     */
    public function assetOptimizeLite($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->assetOptimizeLiteWithOptions($request, $runtime);
    }

    /**
     * Provides a one-click cross-platform product listing optimization service for cross-border e-commerce sellers (best performance edition). Accepts a 1688 product link as input and outputs a complete set of assets adapted to TEMU platform requirements, including titles, attributes, main images, SKU images, detail images, and copywriting. Uses the officially pre-built best-performance workflow to maximize AI capabilities, retains and localizes brand marketing assets, and outputs category-specific assets such as size charts for apparel categories. (Asynchronous).
     *
     * @remarks
     * ## Product Introduction
     * A one-click cross-platform product listing optimization service for cross-border e-commerce sellers (best performance edition). Accepts a 1688 product link as input and outputs a complete set of assets adapted to TEMU platform requirements, including titles, attributes, main images, SKU images, detail images, and copywriting.
     * ## Scenarios
     * Suitable for scenarios that require high-quality cross-platform product listing assets and strong conversion performance. Examples include categories with high dependency on marketing assets such as apparel, accessories, beauty, and home goods. Also suitable for brand merchants and high-value products that need to retain marketing images with copywriting. Ideal for top sellers and ERP/SaaS platforms conducting localized operations across multiple languages and markets, as well as scenarios that require category-specific assets (such as size charts and package weight/dimensions) to improve listing quality and conversion rates.
     * ## Features
     * This service uses the officially pre-built "Best Performance" product optimization workflow, covering the entire pipeline from asset acquisition, diagnosis, filtering, and optimization to output:
     * 1. Automatically parses 1688 product links to extract all assets including titles, SKUs, main images, detail images, and attributes. Intelligently diagnoses missing assets and optimization opportunities.
     * 2. Uses LLM for text compliance filtering, SEO keyword optimization, five-point description generation, and multilingual localization rewriting.
     * 3. Invokes multiple image processing capabilities including intelligent recognition, intelligent background removal, intelligent erasure, Image Translation Pro, image expansion, intelligent cropping, and HD upscaling.
     * 4. Outputs category-specific assets such as size charts and package weight/dimensions for apparel categories.
     * 5. Outputs a standardized product asset package ready for direct listing.
     *
     * @param tmpReq - AssetOptimizeProRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AssetOptimizeProResponse
     *
     * @param AssetOptimizeProRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return AssetOptimizeProResponse
     */
    public function assetOptimizeProWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new AssetOptimizeProShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->columnNameList) {
            $request->columnNameListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->columnNameList, 'ColumnNameList', 'json');
        }

        $query = [];
        if (null !== $request->columnNameListShrink) {
            @$query['ColumnNameList'] = $request->columnNameListShrink;
        }

        if (null !== $request->glossary) {
            @$query['Glossary'] = $request->glossary;
        }

        if (null !== $request->includingProductArea) {
            @$query['IncludingProductArea'] = $request->includingProductArea;
        }

        if (null !== $request->languageModel) {
            @$query['LanguageModel'] = $request->languageModel;
        }

        if (null !== $request->needTrans) {
            @$query['NeedTrans'] = $request->needTrans;
        }

        if (null !== $request->productUrl) {
            @$query['ProductUrl'] = $request->productUrl;
        }

        if (null !== $request->sourceLanguage) {
            @$query['SourceLanguage'] = $request->sourceLanguage;
        }

        if (null !== $request->sourcePlatform) {
            @$query['SourcePlatform'] = $request->sourcePlatform;
        }

        if (null !== $request->targetLanguage) {
            @$query['TargetLanguage'] = $request->targetLanguage;
        }

        if (null !== $request->targetPlatform) {
            @$query['TargetPlatform'] = $request->targetPlatform;
        }

        if (null !== $request->threshold) {
            @$query['Threshold'] = $request->threshold;
        }

        if (null !== $request->translatingBrandInTheProduct) {
            @$query['TranslatingBrandInTheProduct'] = $request->translatingBrandInTheProduct;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AssetOptimizePro',
            'version' => '2026-04-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AssetOptimizeProResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Provides a one-click cross-platform product listing optimization service for cross-border e-commerce sellers (best performance edition). Accepts a 1688 product link as input and outputs a complete set of assets adapted to TEMU platform requirements, including titles, attributes, main images, SKU images, detail images, and copywriting. Uses the officially pre-built best-performance workflow to maximize AI capabilities, retains and localizes brand marketing assets, and outputs category-specific assets such as size charts for apparel categories. (Asynchronous).
     *
     * @remarks
     * ## Product Introduction
     * A one-click cross-platform product listing optimization service for cross-border e-commerce sellers (best performance edition). Accepts a 1688 product link as input and outputs a complete set of assets adapted to TEMU platform requirements, including titles, attributes, main images, SKU images, detail images, and copywriting.
     * ## Scenarios
     * Suitable for scenarios that require high-quality cross-platform product listing assets and strong conversion performance. Examples include categories with high dependency on marketing assets such as apparel, accessories, beauty, and home goods. Also suitable for brand merchants and high-value products that need to retain marketing images with copywriting. Ideal for top sellers and ERP/SaaS platforms conducting localized operations across multiple languages and markets, as well as scenarios that require category-specific assets (such as size charts and package weight/dimensions) to improve listing quality and conversion rates.
     * ## Features
     * This service uses the officially pre-built "Best Performance" product optimization workflow, covering the entire pipeline from asset acquisition, diagnosis, filtering, and optimization to output:
     * 1. Automatically parses 1688 product links to extract all assets including titles, SKUs, main images, detail images, and attributes. Intelligently diagnoses missing assets and optimization opportunities.
     * 2. Uses LLM for text compliance filtering, SEO keyword optimization, five-point description generation, and multilingual localization rewriting.
     * 3. Invokes multiple image processing capabilities including intelligent recognition, intelligent background removal, intelligent erasure, Image Translation Pro, image expansion, intelligent cropping, and HD upscaling.
     * 4. Outputs category-specific assets such as size charts and package weight/dimensions for apparel categories.
     * 5. Outputs a standardized product asset package ready for direct listing.
     *
     * @param request - AssetOptimizeProRequest
     *
     * @returns AssetOptimizeProResponse
     *
     * @param AssetOptimizeProRequest $request
     *
     * @return AssetOptimizeProResponse
     */
    public function assetOptimizePro($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->assetOptimizeProWithOptions($request, $runtime);
    }

    /**
     * Provides a cross-platform product category and attribute intelligent filling service based on multimodal large models. Takes product information from a source platform, automatically matches the category on the target listing platform, and intelligently fills in all required attribute fields under that category, offering a one-stop solution for category selection and attribute filling during product listing. (Synchronous).
     *
     * @remarks
     * # Applicable scenarios
     * Cross-platform product listing attribute filling: When merchants list products across platforms, the attribute fields required by different platforms (source platform, TEMU platform) vary significantly, with complex hierarchical options (such as material → wood type → density). Manual filling is time-consuming and error-prone. This service automatically understands product information and intelligently fills in attributes. It is suitable for scenarios such as automated bulk listing for top sellers, ERP/SaaS platform integration, and quick product listing for SMB merchants.
     * # Feature overview
     * Users input the product title, source category, product details, SKU, product attributes, and product images (up to 10). The system uses multimodal AI to understand product semantics and visual features, completing two core tasks: ① Matching the precise category path for the product on the TEMU platform. ② Automatically filling in the required attributes under that category (such as material, battery properties, size, connectivity), and returning the confidence level and reasoning for each attribute. The API operates in synchronous mode and returns results immediately upon invocation.
     * # Comparison
     * The following example shows the attributes of a USB fan:
     * | **1688 Attribute** | **1688 Attribute Value** | **TEMU Attribute** | **TEMU Attribute Value** | **Existing in 1688** |
     * | --- | --- | --- | --- | --- |
     * | Brand | Other | Power Mode | USB Charging (Built-in Battery) | No |
     * | Battery Life | 3-6h (inclusive) | Rechargeable Battery | Lithium Battery | No |
     * | Additional Features | Digital Display | Battery Capacity (mAh) | 4000 | Yes |
     * | Built-in Battery Capacity | 2000mAh-4000mAh (inclusive) | Fan Features | High Speed | No |
     * | Item Number | X699 | Control Method | Button | Yes |
     * | Main Downstream Platforms | eBay, Amazon, Wish, AliExpress, Independent Sites, LAZADA, Other | Finish Type | Painted | Yes |
     * | Has Licensable Own Brand | No | Recommended Use | Cooling | No |
     * | Dimensions | 65\\*60\\*171 | Fan Design | Wearable Fan | No |
     * | Applicable Gift Occasions | Personal Gifts | Included Components | None | No |
     * | Shell Process | Spray Coating (UV Paint, Rubber Paint, Metallic Paint, Piano Lacquer, Pearl Powder) | Material | Plastic | No |
     * | Package Volume | 65\\*60\\*171 | Special Features | Portable | No |
     * | Appearance Dimensions | 51\\*36\\*34 | Indoor/Outdoor Use | Both Indoor and Outdoor | No |
     * | Wind Speed Levels | 3 Levels | Brand Name | None | No |
     * | Operation Method | Standard Button |  |  |  |
     * | Blade Material | ABS |  |  |  |
     * | Power Mode | USB |  |  |  |
     * | Built-in Battery | Yes |  |  |  |
     * | Patented Source | No |  |  |  |
     * | Color | X699 Fan-Yellow, X699 Fan-Light Purple, X699 Fan-Sky Blue, X699 Fan-Orange, X699 Fan-Light Green, Standard Small Fan |  |  |  |
     * | Main Sales Regions | Japan/Korea, Africa, Korea, Japan, Europe, South America, Southeast Asia, North America, Northeast Asia, Middle East, Latin America, Europe/America, Other |  |  |  |
     * | Cross-border Export Exclusive | Yes |  |  |  |
     * | Style | Fresh |  |  |  |
     * | Motor Type | Brushless Motor |  |  |  |
     * | Noise | 36dB(A)-45dB(A) (inclusive) |  |  |  |
     * | Net Weight | 125g |  |  |  |
     * | Number of Blades | 6 or more |  |  |  |
     * | Fan Category | Handheld Fan |  |  |  |
     *
     * @param tmpReq - CategoryAttributeMatchRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CategoryAttributeMatchResponse
     *
     * @param CategoryAttributeMatchRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return CategoryAttributeMatchResponse
     */
    public function categoryAttributeMatchWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CategoryAttributeMatchShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->imageUrl) {
            $request->imageUrlShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->imageUrl, 'ImageUrl', 'json');
        }

        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->imageUrlShrink) {
            @$body['ImageUrl'] = $request->imageUrlShrink;
        }

        if (null !== $request->itemSpec) {
            @$body['ItemSpec'] = $request->itemSpec;
        }

        if (null !== $request->sku) {
            @$body['Sku'] = $request->sku;
        }

        if (null !== $request->sourceCategory) {
            @$body['SourceCategory'] = $request->sourceCategory;
        }

        if (null !== $request->sourcePlatform) {
            @$body['SourcePlatform'] = $request->sourcePlatform;
        }

        if (null !== $request->targetPlatform) {
            @$body['TargetPlatform'] = $request->targetPlatform;
        }

        if (null !== $request->title) {
            @$body['Title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CategoryAttributeMatch',
            'version' => '2026-04-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CategoryAttributeMatchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Provides a cross-platform product category and attribute intelligent filling service based on multimodal large models. Takes product information from a source platform, automatically matches the category on the target listing platform, and intelligently fills in all required attribute fields under that category, offering a one-stop solution for category selection and attribute filling during product listing. (Synchronous).
     *
     * @remarks
     * # Applicable scenarios
     * Cross-platform product listing attribute filling: When merchants list products across platforms, the attribute fields required by different platforms (source platform, TEMU platform) vary significantly, with complex hierarchical options (such as material → wood type → density). Manual filling is time-consuming and error-prone. This service automatically understands product information and intelligently fills in attributes. It is suitable for scenarios such as automated bulk listing for top sellers, ERP/SaaS platform integration, and quick product listing for SMB merchants.
     * # Feature overview
     * Users input the product title, source category, product details, SKU, product attributes, and product images (up to 10). The system uses multimodal AI to understand product semantics and visual features, completing two core tasks: ① Matching the precise category path for the product on the TEMU platform. ② Automatically filling in the required attributes under that category (such as material, battery properties, size, connectivity), and returning the confidence level and reasoning for each attribute. The API operates in synchronous mode and returns results immediately upon invocation.
     * # Comparison
     * The following example shows the attributes of a USB fan:
     * | **1688 Attribute** | **1688 Attribute Value** | **TEMU Attribute** | **TEMU Attribute Value** | **Existing in 1688** |
     * | --- | --- | --- | --- | --- |
     * | Brand | Other | Power Mode | USB Charging (Built-in Battery) | No |
     * | Battery Life | 3-6h (inclusive) | Rechargeable Battery | Lithium Battery | No |
     * | Additional Features | Digital Display | Battery Capacity (mAh) | 4000 | Yes |
     * | Built-in Battery Capacity | 2000mAh-4000mAh (inclusive) | Fan Features | High Speed | No |
     * | Item Number | X699 | Control Method | Button | Yes |
     * | Main Downstream Platforms | eBay, Amazon, Wish, AliExpress, Independent Sites, LAZADA, Other | Finish Type | Painted | Yes |
     * | Has Licensable Own Brand | No | Recommended Use | Cooling | No |
     * | Dimensions | 65\\*60\\*171 | Fan Design | Wearable Fan | No |
     * | Applicable Gift Occasions | Personal Gifts | Included Components | None | No |
     * | Shell Process | Spray Coating (UV Paint, Rubber Paint, Metallic Paint, Piano Lacquer, Pearl Powder) | Material | Plastic | No |
     * | Package Volume | 65\\*60\\*171 | Special Features | Portable | No |
     * | Appearance Dimensions | 51\\*36\\*34 | Indoor/Outdoor Use | Both Indoor and Outdoor | No |
     * | Wind Speed Levels | 3 Levels | Brand Name | None | No |
     * | Operation Method | Standard Button |  |  |  |
     * | Blade Material | ABS |  |  |  |
     * | Power Mode | USB |  |  |  |
     * | Built-in Battery | Yes |  |  |  |
     * | Patented Source | No |  |  |  |
     * | Color | X699 Fan-Yellow, X699 Fan-Light Purple, X699 Fan-Sky Blue, X699 Fan-Orange, X699 Fan-Light Green, Standard Small Fan |  |  |  |
     * | Main Sales Regions | Japan/Korea, Africa, Korea, Japan, Europe, South America, Southeast Asia, North America, Northeast Asia, Middle East, Latin America, Europe/America, Other |  |  |  |
     * | Cross-border Export Exclusive | Yes |  |  |  |
     * | Style | Fresh |  |  |  |
     * | Motor Type | Brushless Motor |  |  |  |
     * | Noise | 36dB(A)-45dB(A) (inclusive) |  |  |  |
     * | Net Weight | 125g |  |  |  |
     * | Number of Blades | 6 or more |  |  |  |
     * | Fan Category | Handheld Fan |  |  |  |
     *
     * @param request - CategoryAttributeMatchRequest
     *
     * @returns CategoryAttributeMatchResponse
     *
     * @param CategoryAttributeMatchRequest $request
     *
     * @return CategoryAttributeMatchResponse
     */
    public function categoryAttributeMatch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->categoryAttributeMatchWithOptions($request, $runtime);
    }

    /**
     * Provides a large language model-based intelligent cross-platform product category matching service. Accepts product information from a source platform, automatically matches the best category on the target listing platform, and returns a confidence level score with matching reasons to help merchants quickly select categories during cross-platform product listing. (Synchronization).
     *
     * @remarks
     * ## Product Introduction
     * A large language model-based intelligent cross-platform product category matching service. Accepts product information from a source platform, automatically matches the best category on the target listing platform, and returns a confidence level score with matching reasons to help merchants quickly select categories during cross-platform product listing. (Synchronization)
     * ## Common scenarios
     * Cross-platform product listing: After sourcing products, merchants list them on a target platform and need to match products to the correct category in the target platform\\"s category tree. Manually selecting categories requires familiarity with the target platform\\"s complete category system, which is time-consuming, labor-intensive, and error-prone. Incorrect category matching can cause product delisting and other issues.
     * This service automates category mapping and is suitable for bulk API calls from top sellers\\" self-built systems, ERP/SaaS platform integration for automated listing workflows, and quick single-product listing for SMB merchants.
     * The current version only supports TEMU as the target listing platform. Currently, automatic product information retrieval from source platforms is not supported and users must manually provide input parameters. This capability will be added in future versions, along with support for more source and target platforms.
     * ## Functions and features
     * Users input fields such as product title, source category, product description, SKU information, and product attributes. The system uses an AI model to understand product semantics and matches the most appropriate category path from the TEMU platform\\"s full category tree. The response includes the complete category path (CategoryPath), category name (CategoryName), confidence score (0-100), and matching reason. The API uses synchronous mode and returns results immediately after invocation, making it suitable for embedding in real-time business workflows.
     * ## Demo
     * | **Source platform** | **Image** | **Source platform category** | **Target platform** | **Target platform category** |
     * | --- | --- | --- | --- | --- |
     * | 1688 | ![done-image-245c58c8-a9fc-4e32-b959-8b4bcd52b264.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/jP2lRYjv7234mO8g/img/69a226e8-aff1-4891-bb0a-c47c1ea397ae.png) | USB fan, mini fan | TEMU | Home Appliances
     * \\>Heating, Cooling & Air Quality Appliances
     * \\>Electric Fans
     * \\>USB Fans |
     * | 1688 | ![image.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/jP2lRYjv7234mO8g/img/8a546f7d-826e-43d6-b5f3-12d1edef8897.png) | Bracelet | TEMU | Clothing, Shoes & Jewelry
     * \\>Women\\"s Fashion
     * \\>Women\\"s Jewelry
     * \\>Women\\"s Fashion Bracelets & Bangles
     * \\>Women\\"s Fashion Charms & Charm Bracelets
     * \\>Women\\"s Fashion Charm Bracelets
     * \\>Women\\"s Fashion Chain Charm Bracelets |
     *
     * @param request - CategoryMatchRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CategoryMatchResponse
     *
     * @param CategoryMatchRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CategoryMatchResponse
     */
    public function categoryMatchWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->itemSpec) {
            @$query['ItemSpec'] = $request->itemSpec;
        }

        if (null !== $request->sku) {
            @$query['Sku'] = $request->sku;
        }

        if (null !== $request->sourceCategory) {
            @$query['SourceCategory'] = $request->sourceCategory;
        }

        if (null !== $request->sourcePlatform) {
            @$query['SourcePlatform'] = $request->sourcePlatform;
        }

        if (null !== $request->targetPlatform) {
            @$query['TargetPlatform'] = $request->targetPlatform;
        }

        if (null !== $request->title) {
            @$query['Title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CategoryMatch',
            'version' => '2026-04-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CategoryMatchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Provides a large language model-based intelligent cross-platform product category matching service. Accepts product information from a source platform, automatically matches the best category on the target listing platform, and returns a confidence level score with matching reasons to help merchants quickly select categories during cross-platform product listing. (Synchronization).
     *
     * @remarks
     * ## Product Introduction
     * A large language model-based intelligent cross-platform product category matching service. Accepts product information from a source platform, automatically matches the best category on the target listing platform, and returns a confidence level score with matching reasons to help merchants quickly select categories during cross-platform product listing. (Synchronization)
     * ## Common scenarios
     * Cross-platform product listing: After sourcing products, merchants list them on a target platform and need to match products to the correct category in the target platform\\"s category tree. Manually selecting categories requires familiarity with the target platform\\"s complete category system, which is time-consuming, labor-intensive, and error-prone. Incorrect category matching can cause product delisting and other issues.
     * This service automates category mapping and is suitable for bulk API calls from top sellers\\" self-built systems, ERP/SaaS platform integration for automated listing workflows, and quick single-product listing for SMB merchants.
     * The current version only supports TEMU as the target listing platform. Currently, automatic product information retrieval from source platforms is not supported and users must manually provide input parameters. This capability will be added in future versions, along with support for more source and target platforms.
     * ## Functions and features
     * Users input fields such as product title, source category, product description, SKU information, and product attributes. The system uses an AI model to understand product semantics and matches the most appropriate category path from the TEMU platform\\"s full category tree. The response includes the complete category path (CategoryPath), category name (CategoryName), confidence score (0-100), and matching reason. The API uses synchronous mode and returns results immediately after invocation, making it suitable for embedding in real-time business workflows.
     * ## Demo
     * | **Source platform** | **Image** | **Source platform category** | **Target platform** | **Target platform category** |
     * | --- | --- | --- | --- | --- |
     * | 1688 | ![done-image-245c58c8-a9fc-4e32-b959-8b4bcd52b264.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/jP2lRYjv7234mO8g/img/69a226e8-aff1-4891-bb0a-c47c1ea397ae.png) | USB fan, mini fan | TEMU | Home Appliances
     * \\>Heating, Cooling & Air Quality Appliances
     * \\>Electric Fans
     * \\>USB Fans |
     * | 1688 | ![image.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/jP2lRYjv7234mO8g/img/8a546f7d-826e-43d6-b5f3-12d1edef8897.png) | Bracelet | TEMU | Clothing, Shoes & Jewelry
     * \\>Women\\"s Fashion
     * \\>Women\\"s Jewelry
     * \\>Women\\"s Fashion Bracelets & Bangles
     * \\>Women\\"s Fashion Charms & Charm Bracelets
     * \\>Women\\"s Fashion Charm Bracelets
     * \\>Women\\"s Fashion Chain Charm Bracelets |
     *
     * @param request - CategoryMatchRequest
     *
     * @returns CategoryMatchResponse
     *
     * @param CategoryMatchRequest $request
     *
     * @return CategoryMatchResponse
     */
    public function categoryMatch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->categoryMatchWithOptions($request, $runtime);
    }

    /**
     * Calculates the edge lengths and floor area of a floor display based on the display image and product detection boxes.
     *
     * @remarks
     * ## Description
     * **Before using this operation, make sure that you fully understand the billing method and [pricing](https://www.aliyun.com/price/product#/ecs/detail) of the floor display area inference service.**
     * - This operation infers the actual dimensions (lengths of two edges) and floor area of a floor display based on the provided overall display image, SKU knowledge base, and product location information in the image.
     * - Make sure that the knowledge base corresponding to the specified `RagId` belongs to the caller and is in the available (`AVAILABLE`) state.
     * - The `Products` array must contain at least one product item, and each product item must have at least one bounding box defined in `Boxes`.
     * - All coordinate values are represented in a normalized coordinate system ranging from 0 to 1000. Make sure that the input satisfies the relationships `Left < Right` and `Top < Bottom`.
     * - Set a reasonable timeout period when calling this operation (no more than 300 seconds recommended) to avoid failures caused by network latency or high processing complexity.
     * - For production environments, use the POP Action method for access. The internal REST address is primarily used for integration testing during the development phase.
     *
     * @param tmpReq - DiduiAreaDeductionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DiduiAreaDeductionResponse
     *
     * @param DiduiAreaDeductionRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return DiduiAreaDeductionResponse
     */
    public function diduiAreaDeductionWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DiduiAreaDeductionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->products) {
            $request->productsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->products, 'Products', 'json');
        }

        $query = [];
        if (null !== $request->productsShrink) {
            @$query['Products'] = $request->productsShrink;
        }

        if (null !== $request->ragId) {
            @$query['RagId'] = $request->ragId;
        }

        if (null !== $request->reqId) {
            @$query['ReqId'] = $request->reqId;
        }

        if (null !== $request->targetImageUrl) {
            @$query['TargetImageUrl'] = $request->targetImageUrl;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DiduiAreaDeduction',
            'version' => '2026-04-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DiduiAreaDeductionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calculates the edge lengths and floor area of a floor display based on the display image and product detection boxes.
     *
     * @remarks
     * ## Description
     * **Before using this operation, make sure that you fully understand the billing method and [pricing](https://www.aliyun.com/price/product#/ecs/detail) of the floor display area inference service.**
     * - This operation infers the actual dimensions (lengths of two edges) and floor area of a floor display based on the provided overall display image, SKU knowledge base, and product location information in the image.
     * - Make sure that the knowledge base corresponding to the specified `RagId` belongs to the caller and is in the available (`AVAILABLE`) state.
     * - The `Products` array must contain at least one product item, and each product item must have at least one bounding box defined in `Boxes`.
     * - All coordinate values are represented in a normalized coordinate system ranging from 0 to 1000. Make sure that the input satisfies the relationships `Left < Right` and `Top < Bottom`.
     * - Set a reasonable timeout period when calling this operation (no more than 300 seconds recommended) to avoid failures caused by network latency or high processing complexity.
     * - For production environments, use the POP Action method for access. The internal REST address is primarily used for integration testing during the development phase.
     *
     * @param request - DiduiAreaDeductionRequest
     *
     * @returns DiduiAreaDeductionResponse
     *
     * @param DiduiAreaDeductionRequest $request
     *
     * @return DiduiAreaDeductionResponse
     */
    public function diduiAreaDeduction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->diduiAreaDeductionWithOptions($request, $runtime);
    }

    /**
     * Designed specifically for document translation, this API supports translation between more than 100 language pairs (including bridged pairs), meeting the needs of multi-scenario, multi-page, and highly complex document translation. Scanned documents are not currently supported.
     * It excels in the following areas:
     * - Content accuracy: translation accuracy, and accuracy of parameters and units.
     * - Structural integrity: overall layout continuity, and page margin and layout restoration.
     *
     * @remarks
     * ## Product Introduction
     * Designed specifically for document translation, this service supports translation between more than 100 language pairs (including bridged pairs), supporting multi-scenario, multi-page, and highly complex document translation. Scanned documents are not currently supported.
     * Excels in the following areas:
     * - Content accuracy: translation accuracy, parameter and unit accuracy
     * - Structural integrity: overall layout continuity, page margin and layout preservation
     * ## Scenarios
     * Cross-border e-commerce product manuals, contracts, agreements, business proposals, qualification documents, textbooks and courseware, and other scenarios.
     * ## Features
     * - Supports PDF and Word formats. Supports source documents containing multiple languages. For a detailed language list, see section 4.5.
     * - Supports translation of text within images in documents, as well as complex translation scenarios such as charts and special symbols.
     * - Supports high-fidelity layout preservation after translation.
     * - A single PDF supports up to 100 pages. A single Word document supports up to 100 pages.
     * - Supports custom translation results, including do-not-translate (ABC-ABC), specified translation (ABC-DEF), and skip translation (ABC-empty value). Commonly used for brand name protection. Pass the corresponding glossary ID when calling the API to meet your translation needs across different scenarios. You can upload up to 100,000 glossary entries. Contact the platform if you need more.
     *
     * @param request - DocumentTranslateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DocumentTranslateResponse
     *
     * @param DocumentTranslateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DocumentTranslateResponse
     */
    public function documentTranslateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileType) {
            @$query['FileType'] = $request->fileType;
        }

        if (null !== $request->glossary) {
            @$query['Glossary'] = $request->glossary;
        }

        if (null !== $request->targetLanguage) {
            @$query['TargetLanguage'] = $request->targetLanguage;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DocumentTranslate',
            'version' => '2026-04-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DocumentTranslateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Designed specifically for document translation, this API supports translation between more than 100 language pairs (including bridged pairs), meeting the needs of multi-scenario, multi-page, and highly complex document translation. Scanned documents are not currently supported.
     * It excels in the following areas:
     * - Content accuracy: translation accuracy, and accuracy of parameters and units.
     * - Structural integrity: overall layout continuity, and page margin and layout restoration.
     *
     * @remarks
     * ## Product Introduction
     * Designed specifically for document translation, this service supports translation between more than 100 language pairs (including bridged pairs), supporting multi-scenario, multi-page, and highly complex document translation. Scanned documents are not currently supported.
     * Excels in the following areas:
     * - Content accuracy: translation accuracy, parameter and unit accuracy
     * - Structural integrity: overall layout continuity, page margin and layout preservation
     * ## Scenarios
     * Cross-border e-commerce product manuals, contracts, agreements, business proposals, qualification documents, textbooks and courseware, and other scenarios.
     * ## Features
     * - Supports PDF and Word formats. Supports source documents containing multiple languages. For a detailed language list, see section 4.5.
     * - Supports translation of text within images in documents, as well as complex translation scenarios such as charts and special symbols.
     * - Supports high-fidelity layout preservation after translation.
     * - A single PDF supports up to 100 pages. A single Word document supports up to 100 pages.
     * - Supports custom translation results, including do-not-translate (ABC-ABC), specified translation (ABC-DEF), and skip translation (ABC-empty value). Commonly used for brand name protection. Pass the corresponding glossary ID when calling the API to meet your translation needs across different scenarios. You can upload up to 100,000 glossary entries. Contact the platform if you need more.
     *
     * @param request - DocumentTranslateRequest
     *
     * @returns DocumentTranslateResponse
     *
     * @param DocumentTranslateRequest $request
     *
     * @return DocumentTranslateResponse
     */
    public function documentTranslate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->documentTranslateWithOptions($request, $runtime);
    }

    /**
     * Intelligently crops images to specified dimensions, automatically identifies the main subject area, and precisely crops to various sizes to meet design requirements across different scenarios. (Synchronous).
     *
     * @remarks
     * ## Product Introduction
     * The image cropping service resizes input images to specified dimensions. It automatically identifies the main subject area and precisely crops to various sizes to meet design requirements across different scenarios. (Synchronous)
     * ## Common scenarios
     * - **Multi-platform content distribution**: Automatically generates content in multiple sizes to meet the different image size requirements of various platforms and scenarios.
     *
     * -   **Content placement**: Automatically adjusts sizes for different ad slots across platforms, highlights the main subject, reduces whitespace, and emphasizes product features.
     * ## Features
     * *   Automatically identifies the main subject area of an image for precise cropping.
     *
     * *   Supports custom cropping dimensions to adapt to different platforms and devices.
     * ## Effect comparison
     * | **Original image** | **Cropped to 1000×1000** | **Cropped to 3000×2000** |
     * | --- | --- | --- |
     * | ![done-image-5e6abdf1-3c64-48db-9301-a5a9db1f8cb1.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/eYVOL5jBbQ7QJlpz/img/b356e8a7-cc18-41f7-8da5-dd25f48c6338.png) | ![a715a30a-b594-40db-9f7a-d620add9081c.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/eYVOL5jBbQ7QJlpz/img/969e0fb6-435c-47f9-aeb6-1624b5a43f3c.png) | ![1e6569f3-a494-4e7c-94c8-439748992deb.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/eYVOL5jBbQ7QJlpz/img/cd6bbde6-e923-4fd1-b252-e5f299377fb8.png) |
     * | ![done-image-0ff8edc4-5bd5-48ca-90ac-38e1701a4573.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/eYVOL5jBbQ7QJlpz/img/6c4d02ea-c3bc-4865-9655-afc8c5f5c2ef.png) | ![d026cfbc-207c-425b-b8c7-67cc7396c9c9.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/eYVOL5jBbQ7QJlpz/img/ac6b07f3-0dbf-48de-9fcc-f1450792f75f.png) | ![b9f62dd8-7379-45be-b130-eb534506e77a.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/eYVOL5jBbQ7QJlpz/img/a3486b31-4cc3-4f23-b326-41ab0780a84e.png) |
     * | ![done-image-8eade64e-c849-46f8-b2e3-29122e280e8c.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/eYVOL5jBbQ7QJlpz/img/a42cb77c-6f1c-4474-aeff-939f16d5f8dc.png) | ![5d88645b-91b3-4e46-9ba4-5a16189d3ff8.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/eYVOL5jBbQ7QJlpz/img/62a89676-a424-4d2a-a174-72ed4ae107ed.png) | ![2afdf6cb-44ae-41f3-8d85-7416d2c8fc3c.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/eYVOL5jBbQ7QJlpz/img/ea22ead8-0eb8-4224-8f1e-319f64173912.png) |
     *
     * @param request - ImageCroppingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImageCroppingResponse
     *
     * @param ImageCroppingRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ImageCroppingResponse
     */
    public function imageCroppingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->imageUrl) {
            @$query['ImageUrl'] = $request->imageUrl;
        }

        if (null !== $request->targetHeight) {
            @$query['TargetHeight'] = $request->targetHeight;
        }

        if (null !== $request->targetWidth) {
            @$query['TargetWidth'] = $request->targetWidth;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ImageCropping',
            'version' => '2026-04-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ImageCroppingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Intelligently crops images to specified dimensions, automatically identifies the main subject area, and precisely crops to various sizes to meet design requirements across different scenarios. (Synchronous).
     *
     * @remarks
     * ## Product Introduction
     * The image cropping service resizes input images to specified dimensions. It automatically identifies the main subject area and precisely crops to various sizes to meet design requirements across different scenarios. (Synchronous)
     * ## Common scenarios
     * - **Multi-platform content distribution**: Automatically generates content in multiple sizes to meet the different image size requirements of various platforms and scenarios.
     *
     * -   **Content placement**: Automatically adjusts sizes for different ad slots across platforms, highlights the main subject, reduces whitespace, and emphasizes product features.
     * ## Features
     * *   Automatically identifies the main subject area of an image for precise cropping.
     *
     * *   Supports custom cropping dimensions to adapt to different platforms and devices.
     * ## Effect comparison
     * | **Original image** | **Cropped to 1000×1000** | **Cropped to 3000×2000** |
     * | --- | --- | --- |
     * | ![done-image-5e6abdf1-3c64-48db-9301-a5a9db1f8cb1.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/eYVOL5jBbQ7QJlpz/img/b356e8a7-cc18-41f7-8da5-dd25f48c6338.png) | ![a715a30a-b594-40db-9f7a-d620add9081c.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/eYVOL5jBbQ7QJlpz/img/969e0fb6-435c-47f9-aeb6-1624b5a43f3c.png) | ![1e6569f3-a494-4e7c-94c8-439748992deb.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/eYVOL5jBbQ7QJlpz/img/cd6bbde6-e923-4fd1-b252-e5f299377fb8.png) |
     * | ![done-image-0ff8edc4-5bd5-48ca-90ac-38e1701a4573.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/eYVOL5jBbQ7QJlpz/img/6c4d02ea-c3bc-4865-9655-afc8c5f5c2ef.png) | ![d026cfbc-207c-425b-b8c7-67cc7396c9c9.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/eYVOL5jBbQ7QJlpz/img/ac6b07f3-0dbf-48de-9fcc-f1450792f75f.png) | ![b9f62dd8-7379-45be-b130-eb534506e77a.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/eYVOL5jBbQ7QJlpz/img/a3486b31-4cc3-4f23-b326-41ab0780a84e.png) |
     * | ![done-image-8eade64e-c849-46f8-b2e3-29122e280e8c.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/eYVOL5jBbQ7QJlpz/img/a42cb77c-6f1c-4474-aeff-939f16d5f8dc.png) | ![5d88645b-91b3-4e46-9ba4-5a16189d3ff8.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/eYVOL5jBbQ7QJlpz/img/62a89676-a424-4d2a-a174-72ed4ae107ed.png) | ![2afdf6cb-44ae-41f3-8d85-7416d2c8fc3c.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/eYVOL5jBbQ7QJlpz/img/ea22ead8-0eb8-4224-8f1e-319f64173912.png) |
     *
     * @param request - ImageCroppingRequest
     *
     * @returns ImageCroppingResponse
     *
     * @param ImageCroppingRequest $request
     *
     * @return ImageCroppingResponse
     */
    public function imageCropping($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->imageCroppingWithOptions($request, $runtime);
    }

    /**
     * Automatically identifies the salient subject in an image, separates the subject from the background, and returns the subject image with the background removed. This product also provides multiple background options and custom size selections to optimize product display. (Synchronous).
     *
     * @remarks
     * ## Product Introduction
     * The intelligent image matting product automatically identifies the salient subject in an image, separates the subject from the background, and returns the subject image with the background removed. This product also provides multiple background options and custom size selections to optimize product display. (Synchronous)
     * ## Common scenarios
     * *   **Secondary editing of materials**: After separating the image subject from the background, users can further edit the image.
     *
     * *   **Improved material processing efficiency**: Quickly extracts the subject from various material images for easy background replacement, improving the production efficiency of advertising visuals and marketing posters.
     * ## Functions and features.
     * #### 1. One-click precise subject recognition
     * *   **AI automatic recognition**: Based on deep learning models, intelligently distinguishes foreground subjects (portraits, products, objects, etc.) from backgrounds without manual tracing.
     *
     * *   **Multi-scenario adaptation**: Supports precise segmentation in complex scenarios (such as hair strands, transparent objects, and fur edges) with accuracy exceeding 95%.
     * #### 2. Intelligent edge optimization
     * *   **Detail-level processing**: Performs automatic optimization of edge aliasing and semi-transparent areas (such as smoke and glass), preserving natural transition effects.
     * #### 3. Multi-format output and background operations
     * *   **Transparent background export**: Directly generates PNG images with transparent backgrounds and white backgrounds, suitable for e-commerce, design, and other scenarios.
     *
     * *   **Custom background color support**
     * ## Effect comparison
     * | **Original image (input)** | **Result image (output)** |
     * | --- | --- |
     * | ![主图3.jpeg](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/a2QnV4jwexAy7O4X/img/62b39e16-5b30-469f-88cd-7f31ba790008.jpeg) | ![ae4cd8ce912c4d9fa171dc5217be576d_202605251928_0.5899999737739563.jpeg](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/a2QnV4jwexAy7O4X/img/bfad041f-a8e0-4d6f-a2bf-999292ea9ebc.jpeg) |
     * | ![主图2.jpeg](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/a2QnV4jwexAy7O4X/img/b201b356-24b8-4f98-babc-c7fe918bdc37.jpeg) | ![52033655bd054737960a87518655d935_202605251926_5.959999978542328.jpeg](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/a2QnV4jwexAy7O4X/img/8b266603-e80a-42dd-9d3d-6fa9f0948e52.jpeg) |
     * | ![主图6.jpeg](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/a2QnV4jwexAy7O4X/img/d3c0d876-42a0-4294-8ce5-2a20df2deab9.jpeg) | ![abdecd31cc45450f83b33f9baf4499c6_202605251930_7.9700000286102295.jpeg](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/a2QnV4jwexAy7O4X/img/5677f55e-4fe3-4978-a676-1ce71ad604b0.jpeg) |
     *
     * @param request - ImageMattingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImageMattingResponse
     *
     * @param ImageMattingRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ImageMattingResponse
     */
    public function imageMattingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backGroundType) {
            @$query['BackGroundType'] = $request->backGroundType;
        }

        if (null !== $request->bgColor) {
            @$query['BgColor'] = $request->bgColor;
        }

        if (null !== $request->imageUrl) {
            @$query['ImageUrl'] = $request->imageUrl;
        }

        if (null !== $request->targetHeight) {
            @$query['TargetHeight'] = $request->targetHeight;
        }

        if (null !== $request->targetWidth) {
            @$query['TargetWidth'] = $request->targetWidth;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ImageMatting',
            'version' => '2026-04-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ImageMattingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Automatically identifies the salient subject in an image, separates the subject from the background, and returns the subject image with the background removed. This product also provides multiple background options and custom size selections to optimize product display. (Synchronous).
     *
     * @remarks
     * ## Product Introduction
     * The intelligent image matting product automatically identifies the salient subject in an image, separates the subject from the background, and returns the subject image with the background removed. This product also provides multiple background options and custom size selections to optimize product display. (Synchronous)
     * ## Common scenarios
     * *   **Secondary editing of materials**: After separating the image subject from the background, users can further edit the image.
     *
     * *   **Improved material processing efficiency**: Quickly extracts the subject from various material images for easy background replacement, improving the production efficiency of advertising visuals and marketing posters.
     * ## Functions and features.
     * #### 1. One-click precise subject recognition
     * *   **AI automatic recognition**: Based on deep learning models, intelligently distinguishes foreground subjects (portraits, products, objects, etc.) from backgrounds without manual tracing.
     *
     * *   **Multi-scenario adaptation**: Supports precise segmentation in complex scenarios (such as hair strands, transparent objects, and fur edges) with accuracy exceeding 95%.
     * #### 2. Intelligent edge optimization
     * *   **Detail-level processing**: Performs automatic optimization of edge aliasing and semi-transparent areas (such as smoke and glass), preserving natural transition effects.
     * #### 3. Multi-format output and background operations
     * *   **Transparent background export**: Directly generates PNG images with transparent backgrounds and white backgrounds, suitable for e-commerce, design, and other scenarios.
     *
     * *   **Custom background color support**
     * ## Effect comparison
     * | **Original image (input)** | **Result image (output)** |
     * | --- | --- |
     * | ![主图3.jpeg](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/a2QnV4jwexAy7O4X/img/62b39e16-5b30-469f-88cd-7f31ba790008.jpeg) | ![ae4cd8ce912c4d9fa171dc5217be576d_202605251928_0.5899999737739563.jpeg](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/a2QnV4jwexAy7O4X/img/bfad041f-a8e0-4d6f-a2bf-999292ea9ebc.jpeg) |
     * | ![主图2.jpeg](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/a2QnV4jwexAy7O4X/img/b201b356-24b8-4f98-babc-c7fe918bdc37.jpeg) | ![52033655bd054737960a87518655d935_202605251926_5.959999978542328.jpeg](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/a2QnV4jwexAy7O4X/img/8b266603-e80a-42dd-9d3d-6fa9f0948e52.jpeg) |
     * | ![主图6.jpeg](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/a2QnV4jwexAy7O4X/img/d3c0d876-42a0-4294-8ce5-2a20df2deab9.jpeg) | ![abdecd31cc45450f83b33f9baf4499c6_202605251930_7.9700000286102295.jpeg](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/a2QnV4jwexAy7O4X/img/5677f55e-4fe3-4978-a676-1ce71ad604b0.jpeg) |
     *
     * @param request - ImageMattingRequest
     *
     * @returns ImageMattingResponse
     *
     * @param ImageMattingRequest $request
     *
     * @return ImageMattingResponse
     */
    public function imageMatting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->imageMattingWithOptions($request, $runtime);
    }

    /**
     * Identifies intelligent elements in e-commerce images.
     *
     * @remarks
     * ## Product Introduction
     * The Intelligent Element Recognition API is designed specifically for identifying specific elements in e-commerce images. It can deeply analyze image details, helping users quickly identify elements such as text, logos, watermarks, and text-containing color blocks in both the subject and background of images. This greatly improves the efficiency and accuracy of image screening. (Synchronous)
     * ## Scenarios
     * **1. Intelligent image screening and optimization:**
     * Merchants and platforms can use the Intelligent Element Recognition API for image screening to automatically identify images containing specific elements (such as watermarks and logos). After screening, you can call the Intelligent Removal API to optimize these images, improve image quality, and shorten the product release cycle.
     * **2. Automated image processing and efficiency improvement:**
     * With the Intelligent Element Recognition API, merchants and platforms can automate the image processing workflow by automatically identifying and marking image elements that need optimization. This process reduces manual intervention and improves image processing efficiency.
     * ## Features
     * **1. Definitions of image subject, image background, text, logo, watermark, and text-containing color block: For details, refer to the related examples in the removal documentation (reserved text link)**
     * *   Image subject: The core product area in the image
     *
     * *   Image background: The remaining part of the image other than the product subject
     *
     * *   Text: Horizontal/vertical/diagonal English/Chinese text
     *
     * *   Logo: An emblem or trademark
     *
     * *   Watermark: Monochrome transparent text, emblems, images, URLs, or store names
     *
     * *   Text-containing color block: A color block containing text outside the subject area
     *
     * **2. The main features of the Intelligent Element Recognition API include:**
     * *   Element recognition: Identifies whether text, logos, watermarks, and text-containing color blocks exist in the image subject and background.
     *
     * *   Workflow coordination: Used in combination with the Intelligent Removal API. First, the Intelligent Element Recognition API identifies elements that need to be removed, and then the Intelligent Removal API effectively removes them, ensuring the accuracy and efficiency of image processing.
     * ## Technical advantages
     * *   Synchronous batch processing: As a synchronous API, the Intelligent Element Recognition API can process large volumes of images while maintaining fast response times, adapting to business needs of different scales.
     *
     * *   Flexibility: Users can select the element types to identify as needed, including elements in both subject and non-subject areas such as watermarks, logos, and text, meeting personalized recognition requirements.
     * ## Effect comparison
     * | **Original image** | **Recognition result** |
     * | --- | --- |
     * | ![done-image-30091469-e1be-4d31-85de-18983a358a61.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/vBPlN5j4yM2KVOdG/img/bbd3dbca-9f91-4b57-a382-2701e90c0d46.png) | [Subject]
     * *   Watermark: false
     *
     * *   Logo: false
     *
     * *   Text: false
     *
     * *   Text-containing color block: false
     *
     * [Non-subject]
     * *   Watermark: false
     *
     * *   Logo: true
     *
     * *   Text: true
     *
     * *   Text-containing color block: false |
     * | ![image-1781169602620.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/vBPlN5j4yM2KVOdG/img/6bcbd976-0de1-4b5e-855b-56e20a9c675c.png) | [Subject]
     * *   Watermark: false
     *
     * *   Logo: false
     *
     * *   Text: false
     *
     * *   Text-containing color block: false
     *
     * [Non-subject]
     * *   Watermark: true
     *
     * *   Logo: false
     *
     * *   Text: true
     *
     * *   Text-containing color block: true |
     *
     * @param tmpReq - ImageRecognitionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImageRecognitionResponse
     *
     * @param ImageRecognitionRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return ImageRecognitionResponse
     */
    public function imageRecognitionWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ImageRecognitionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->nonObjectDetectElements) {
            $request->nonObjectDetectElementsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->nonObjectDetectElements, 'NonObjectDetectElements', 'json');
        }

        if (null !== $tmpReq->objectDetectElements) {
            $request->objectDetectElementsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->objectDetectElements, 'ObjectDetectElements', 'json');
        }

        $query = [];
        if (null !== $request->imageUrl) {
            @$query['ImageUrl'] = $request->imageUrl;
        }

        if (null !== $request->nonObjectDetectElementsShrink) {
            @$query['NonObjectDetectElements'] = $request->nonObjectDetectElementsShrink;
        }

        if (null !== $request->objectDetectElementsShrink) {
            @$query['ObjectDetectElements'] = $request->objectDetectElementsShrink;
        }

        if (null !== $request->returnBorderPixel) {
            @$query['ReturnBorderPixel'] = $request->returnBorderPixel;
        }

        if (null !== $request->returnCharacter) {
            @$query['ReturnCharacter'] = $request->returnCharacter;
        }

        if (null !== $request->returnCharacterProp) {
            @$query['ReturnCharacterProp'] = $request->returnCharacterProp;
        }

        if (null !== $request->returnProductNum) {
            @$query['ReturnProductNum'] = $request->returnProductNum;
        }

        if (null !== $request->returnProductProp) {
            @$query['ReturnProductProp'] = $request->returnProductProp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ImageRecognition',
            'version' => '2026-04-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ImageRecognitionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Identifies intelligent elements in e-commerce images.
     *
     * @remarks
     * ## Product Introduction
     * The Intelligent Element Recognition API is designed specifically for identifying specific elements in e-commerce images. It can deeply analyze image details, helping users quickly identify elements such as text, logos, watermarks, and text-containing color blocks in both the subject and background of images. This greatly improves the efficiency and accuracy of image screening. (Synchronous)
     * ## Scenarios
     * **1. Intelligent image screening and optimization:**
     * Merchants and platforms can use the Intelligent Element Recognition API for image screening to automatically identify images containing specific elements (such as watermarks and logos). After screening, you can call the Intelligent Removal API to optimize these images, improve image quality, and shorten the product release cycle.
     * **2. Automated image processing and efficiency improvement:**
     * With the Intelligent Element Recognition API, merchants and platforms can automate the image processing workflow by automatically identifying and marking image elements that need optimization. This process reduces manual intervention and improves image processing efficiency.
     * ## Features
     * **1. Definitions of image subject, image background, text, logo, watermark, and text-containing color block: For details, refer to the related examples in the removal documentation (reserved text link)**
     * *   Image subject: The core product area in the image
     *
     * *   Image background: The remaining part of the image other than the product subject
     *
     * *   Text: Horizontal/vertical/diagonal English/Chinese text
     *
     * *   Logo: An emblem or trademark
     *
     * *   Watermark: Monochrome transparent text, emblems, images, URLs, or store names
     *
     * *   Text-containing color block: A color block containing text outside the subject area
     *
     * **2. The main features of the Intelligent Element Recognition API include:**
     * *   Element recognition: Identifies whether text, logos, watermarks, and text-containing color blocks exist in the image subject and background.
     *
     * *   Workflow coordination: Used in combination with the Intelligent Removal API. First, the Intelligent Element Recognition API identifies elements that need to be removed, and then the Intelligent Removal API effectively removes them, ensuring the accuracy and efficiency of image processing.
     * ## Technical advantages
     * *   Synchronous batch processing: As a synchronous API, the Intelligent Element Recognition API can process large volumes of images while maintaining fast response times, adapting to business needs of different scales.
     *
     * *   Flexibility: Users can select the element types to identify as needed, including elements in both subject and non-subject areas such as watermarks, logos, and text, meeting personalized recognition requirements.
     * ## Effect comparison
     * | **Original image** | **Recognition result** |
     * | --- | --- |
     * | ![done-image-30091469-e1be-4d31-85de-18983a358a61.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/vBPlN5j4yM2KVOdG/img/bbd3dbca-9f91-4b57-a382-2701e90c0d46.png) | [Subject]
     * *   Watermark: false
     *
     * *   Logo: false
     *
     * *   Text: false
     *
     * *   Text-containing color block: false
     *
     * [Non-subject]
     * *   Watermark: false
     *
     * *   Logo: true
     *
     * *   Text: true
     *
     * *   Text-containing color block: false |
     * | ![image-1781169602620.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/vBPlN5j4yM2KVOdG/img/6bcbd976-0de1-4b5e-855b-56e20a9c675c.png) | [Subject]
     * *   Watermark: false
     *
     * *   Logo: false
     *
     * *   Text: false
     *
     * *   Text-containing color block: false
     *
     * [Non-subject]
     * *   Watermark: true
     *
     * *   Logo: false
     *
     * *   Text: true
     *
     * *   Text-containing color block: true |
     *
     * @param request - ImageRecognitionRequest
     *
     * @returns ImageRecognitionResponse
     *
     * @param ImageRecognitionRequest $request
     *
     * @return ImageRecognitionResponse
     */
    public function imageRecognition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->imageRecognitionWithOptions($request, $runtime);
    }

    /**
     * Intelligently identifies and removes text, specific names, transparent text blocks, and watermarks from e-commerce images, supports specifying objects to remove as needed, enables efficient and precise batch processing of images, and simplifies image editing workflows (synchronous/asynchronous).
     *
     * @remarks
     * ## Product introduction
     * The intelligent image removal product is designed specifically for e-commerce images. It automatically identifies and removes text, specific names, transparent text blocks, and watermarks from e-commerce images. You can specify objects to remove as needed, enabling efficient and precise batch processing of images and simplifying image editing workflows. (Synchronous/Asynchronous)
     * ## Common scenarios
     * *   **Efficient e-commerce image processing:**
     *
     * Remove irrelevant visual elements to provide clearer, more focused product displays and enhance the shopping experience.
     * *   **Multi-platform product information synchronization:**
     *
     * When merchants list products across different e-commerce platforms, they can quickly remove specific text and watermarks to comply with image specifications of different platforms.
     * ## Features
     * 1.  First, clarify the definitions of image subject and image background. When specifying objects to remove, you can choose whether the removal scope is the image subject or the image background area. Both API and editor access methods are supported to meet different types of requirements.
     *
     *     1.  Image subject: the core product area in the image.
     *
     *     2.  Image background: the remaining part of the image other than the product subject.
     *
     * 2.  Second, the following four types of objects can be removed: text, specific names, transparent text blocks, and watermarks. Refer to the following examples to clarify your requirements and perform targeted operations:
     * ## Effect comparison
     * | **Original image** | **Image after removal** |
     * | --- | --- |
     * | ![Main image 1 - Leopard print large capacity millennium crossbody canvas bag.jpeg](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/AJdl65AyryVZyOke/img/4bd2c812-ed3c-45da-8a86-ebd29102f4b1.jpeg) | ![image.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/5VLqXLbGJZd3VqX1/img/eff0eb1b-36df-431d-a010-3bb3b7348ff9.png) |
     * | ![Main image 1 - Short round-tip French false nails with handle.jpeg](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/5VLqXLbGJZd3VqX1/img/c44ac17b-3fa4-4a6f-b411-90f1062b183b.jpeg) | ![image.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/5VLqXLbGJZd3VqX1/img/af779684-4aa5-49b0-8668-34ab8bd4bcc1.png) |
     *
     * @param request - ImageRemovalProRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImageRemovalProResponse
     *
     * @param ImageRemovalProRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ImageRemovalProResponse
     */
    public function imageRemovalProWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->async) {
            @$query['Async'] = $request->async;
        }

        if (null !== $request->imageUrl) {
            @$query['ImageUrl'] = $request->imageUrl;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ImageRemovalPro',
            'version' => '2026-04-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ImageRemovalProResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Intelligently identifies and removes text, specific names, transparent text blocks, and watermarks from e-commerce images, supports specifying objects to remove as needed, enables efficient and precise batch processing of images, and simplifies image editing workflows (synchronous/asynchronous).
     *
     * @remarks
     * ## Product introduction
     * The intelligent image removal product is designed specifically for e-commerce images. It automatically identifies and removes text, specific names, transparent text blocks, and watermarks from e-commerce images. You can specify objects to remove as needed, enabling efficient and precise batch processing of images and simplifying image editing workflows. (Synchronous/Asynchronous)
     * ## Common scenarios
     * *   **Efficient e-commerce image processing:**
     *
     * Remove irrelevant visual elements to provide clearer, more focused product displays and enhance the shopping experience.
     * *   **Multi-platform product information synchronization:**
     *
     * When merchants list products across different e-commerce platforms, they can quickly remove specific text and watermarks to comply with image specifications of different platforms.
     * ## Features
     * 1.  First, clarify the definitions of image subject and image background. When specifying objects to remove, you can choose whether the removal scope is the image subject or the image background area. Both API and editor access methods are supported to meet different types of requirements.
     *
     *     1.  Image subject: the core product area in the image.
     *
     *     2.  Image background: the remaining part of the image other than the product subject.
     *
     * 2.  Second, the following four types of objects can be removed: text, specific names, transparent text blocks, and watermarks. Refer to the following examples to clarify your requirements and perform targeted operations:
     * ## Effect comparison
     * | **Original image** | **Image after removal** |
     * | --- | --- |
     * | ![Main image 1 - Leopard print large capacity millennium crossbody canvas bag.jpeg](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/AJdl65AyryVZyOke/img/4bd2c812-ed3c-45da-8a86-ebd29102f4b1.jpeg) | ![image.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/5VLqXLbGJZd3VqX1/img/eff0eb1b-36df-431d-a010-3bb3b7348ff9.png) |
     * | ![Main image 1 - Short round-tip French false nails with handle.jpeg](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/5VLqXLbGJZd3VqX1/img/c44ac17b-3fa4-4a6f-b411-90f1062b183b.jpeg) | ![image.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/5VLqXLbGJZd3VqX1/img/af779684-4aa5-49b0-8668-34ab8bd4bcc1.png) |
     *
     * @param request - ImageRemovalProRequest
     *
     * @returns ImageRemovalProResponse
     *
     * @param ImageRemovalProRequest $request
     *
     * @return ImageRemovalProResponse
     */
    public function imageRemovalPro($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->imageRemovalProWithOptions($request, $runtime);
    }

    /**
     * Intelligently removes unwanted elements from e-commerce images, automatically detecting and erasing text, specific names, transparent text blocks, and visual clutter. Supports specifying objects to remove on demand, enabling efficient and precise batch processing of large volumes of images to simplify image editing workflows. (Synchronous).
     *
     * @remarks
     * # Product Introduction
     * The intelligent image removal product is designed specifically for e-commerce images. It automatically detects and removes text, specific names, transparent text blocks, and visual clutter from e-commerce images. You can specify objects to remove on demand, enabling efficient and precise batch processing of large volumes of images to simplify image editing workflows. (Synchronous)
     * # Common scenarios
     * *   **Efficient e-commerce image processing:**
     *
     * Remove irrelevant visual elements to provide clearer, more focused product displays and enhance the shopping experience.
     * *   **Multi-platform product information synchronization:**
     *
     * When listing products across different e-commerce platforms, quickly remove specific text and visual clutter to comply with image specifications of different platforms.
     * *   **Marketing material preparation:**
     *
     * Easily remove existing promotional information and quickly update images with the latest campaign details.
     * > Note: Merchants or platforms can batch-remove impurities from images to optimize image quality. We recommend using this in combination with the "Intelligent Recognition API" (coming soon). First, filter out images containing text, specific names, transparent text blocks, and visual clutter, then use the "Intelligent Removal API" for batch removal. The Intelligent Recognition API focuses on "recognition," while the Intelligent Removal API focuses on "removal." By calling them sequentially, you can maximize removal effectiveness and reduce false removals and false identifications.
     * # Features
     * 1.  First, understand the definitions of image subject and image background. When specifying removal targets, you can choose whether the removal scope is the image subject or the image background area. Both API and editor access methods are supported to meet different requirements.
     *
     *     1.  Image subject: The core product area in the image.
     *
     *     2.  Image background: The remaining portion of the image excluding the product subject.
     *
     * 2.  The following three removal target options are supported:
     *
     *     1.  Select by type only. Supported types include text, specific names, transparent text blocks, and visual clutter. Refer to the following examples to clarify your requirements and perform targeted operations.
     *
     *     2.  (Upgrade) Specify images to remove. You can specify multiple images at a time.
     *
     *     3.  (Upgrade) Specify text to remove. You can specify multiple text strings at a time.
     *
     * Processing workflow: User submits original image URL → OCR+VLM model detects text or image positions → Determines coordinates of areas to repair → AI repairs and generates a clean image → Returns the result image URL.
     * # 4. Effect comparison
     * | **Removable objects in images** | **Original image** | **Image after removal** |
     * | --- | --- | --- |
     * | Text | *   Involving the image subject area
     *
     *     ![done-image-4a2a96c2-9ac6-4b35-b76b-a6eac303740f (1).png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/Mp7ld7bZAb2VAOBQ/img/d72a7982-e761-4b45-af1e-f8f90b3f1fc3.png)
     *
     * *   Not involving the image subject area
     *
     * ![image.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/Mp7ld7bZAb2VAOBQ/img/47428227-7523-432e-89ce-eba263e5ebda.png) | *   Involving the image subject area
     *
     * ![359ddfcf-a2b1-4e59-ae54-5e76705d0adf.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/Mp7ld7bZAb2VAOBQ/img/d69e38e4-5657-471d-aff6-1e6a4c269455.png)
     * *   Not involving the image subject area
     *
     * ![c35611f8-dab4-4df2-8942-36d7375ed55f.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/Mp7ld7bZAb2VAOBQ/img/365024b4-4863-46d4-9013-bdd9408ea6b9.png) |
     * | Specific names | *   Involving the image subject area
     *
     *     ![done-image-aca80515-aca6-4f4e-9429-47c5dd6b811f.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/Mp7ld7bZAb2VAOBQ/img/ac35f8bc-d527-49de-8fba-cdeb71e3b058.png)
     *
     * *   Not involving the image subject area
     *
     * ![done-image-29a89f03-964a-455e-968c-7c8d5282ebbb.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/Mp7ld7bZAb2VAOBQ/img/2db445c8-6bdd-424e-b6a7-2ddb46e6786d.png) | *   Involving the image subject area
     *
     * ![fd2db0ab-1b89-4085-b91d-99f40a1aea77.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/Mp7ld7bZAb2VAOBQ/img/36ace8aa-3b3b-4b1c-81e6-b691104262f0.png)
     * *   Not involving the image subject area
     *
     * ![8726b148-ab74-4409-a6c1-4c50fcac3887.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/Mp7ld7bZAb2VAOBQ/img/a7653a0c-d14e-4f97-9c2f-83327b43203f.png) |
     * | Transparent text blocks | *   Involving the image subject area
     *
     *     ![image.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/Mp7ld7bZAb2VAOBQ/img/0f6068f0-168a-47bd-9fcd-c38b9e520506.png)
     *
     * *   Not involving the image subject area
     *
     * ![image.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/Mp7ld7bZAb2VAOBQ/img/c9ac2a4c-0aa3-40ee-8855-62a262364dbe.png) | *   Involving the image subject area
     *
     * ![8e84a5d6-da8c-4e3e-a705-71a66d0c78a2.jpeg](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/Mp7ld7bZAb2VAOBQ/img/06ac537f-875a-48e2-8934-a84a79dfd8ff.jpeg)
     * *   Not involving the image subject area
     *
     * ![b05173e7-2ae5-494e-99d2-7111fc966fd5.jpeg](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/Mp7ld7bZAb2VAOBQ/img/05759aef-1720-41cd-8800-f7d0801e4d95.jpeg) |
     * | Visual clutter | *   Involving the image subject area
     *
     *     ![2.jpeg](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/Mp7ld7bZAb2VAOBQ/img/bf1442f8-a9fa-40d3-bcb0-7a8a41b49b5d.jpeg)
     *
     * *   Not involving the image subject area
     *
     * ![image.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/Mp7ld7bZAb2VAOBQ/img/0d68612e-845d-466f-8a4a-b85facea095b.png) | *   Involving the image subject area
     *
     * ![b6ef803f-743f-4e61-b901-d1f68167186f.jpeg](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/Mp7ld7bZAb2VAOBQ/img/621daadc-454f-41b4-9ac4-752d457034b6.jpeg)
     * *   Not involving the image subject area
     *
     * ![dee0c7cf-8b0d-4d6d-9677-d5f2e6099834.jpeg](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/Mp7ld7bZAb2VAOBQ/img/caa6994b-2f97-484d-a807-671a0dc75947.jpeg) |
     * | Specified image element removal (supports multiple image links) | ![image.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/Mp7ld7bZAb2VAOBQ/img/9297951f-53c1-4476-8c69-5c31df3fce21.png) | ![image.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/Mp7ld7bZAb2VAOBQ/img/ef3f35aa-609f-454c-bba0-dd1710c83945.png) |
     * | Specified text removal (supports multiple text strings) | ![image.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/Mp7ld7bZAb2VAOBQ/img/c784d8be-4b4d-4972-8b99-828c742b8f03.png) | ![image.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/Mp7ld7bZAb2VAOBQ/img/805423ca-bd0d-4d44-a18e-a7d7bfe88587.png) |
     *
     * @param tmpReq - ImageRemoveRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImageRemoveResponse
     *
     * @param ImageRemoveRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return ImageRemoveResponse
     */
    public function imageRemoveWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ImageRemoveShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->nonObjectRemoveElements) {
            $request->nonObjectRemoveElementsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->nonObjectRemoveElements, 'NonObjectRemoveElements', 'json');
        }

        if (null !== $tmpReq->objectRemoveElements) {
            $request->objectRemoveElementsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->objectRemoveElements, 'ObjectRemoveElements', 'json');
        }

        if (null !== $tmpReq->userImage) {
            $request->userImageShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->userImage, 'UserImage', 'json');
        }

        if (null !== $tmpReq->userText) {
            $request->userTextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->userText, 'UserText', 'json');
        }

        $query = [];
        if (null !== $request->imageUrl) {
            @$query['ImageUrl'] = $request->imageUrl;
        }

        if (null !== $request->mask) {
            @$query['Mask'] = $request->mask;
        }

        if (null !== $request->nonObjectRemoveElementsShrink) {
            @$query['NonObjectRemoveElements'] = $request->nonObjectRemoveElementsShrink;
        }

        if (null !== $request->objectRemoveElementsShrink) {
            @$query['ObjectRemoveElements'] = $request->objectRemoveElementsShrink;
        }

        if (null !== $request->position) {
            @$query['Position'] = $request->position;
        }

        if (null !== $request->userImageShrink) {
            @$query['UserImage'] = $request->userImageShrink;
        }

        if (null !== $request->userTextShrink) {
            @$query['UserText'] = $request->userTextShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ImageRemove',
            'version' => '2026-04-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ImageRemoveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Intelligently removes unwanted elements from e-commerce images, automatically detecting and erasing text, specific names, transparent text blocks, and visual clutter. Supports specifying objects to remove on demand, enabling efficient and precise batch processing of large volumes of images to simplify image editing workflows. (Synchronous).
     *
     * @remarks
     * # Product Introduction
     * The intelligent image removal product is designed specifically for e-commerce images. It automatically detects and removes text, specific names, transparent text blocks, and visual clutter from e-commerce images. You can specify objects to remove on demand, enabling efficient and precise batch processing of large volumes of images to simplify image editing workflows. (Synchronous)
     * # Common scenarios
     * *   **Efficient e-commerce image processing:**
     *
     * Remove irrelevant visual elements to provide clearer, more focused product displays and enhance the shopping experience.
     * *   **Multi-platform product information synchronization:**
     *
     * When listing products across different e-commerce platforms, quickly remove specific text and visual clutter to comply with image specifications of different platforms.
     * *   **Marketing material preparation:**
     *
     * Easily remove existing promotional information and quickly update images with the latest campaign details.
     * > Note: Merchants or platforms can batch-remove impurities from images to optimize image quality. We recommend using this in combination with the "Intelligent Recognition API" (coming soon). First, filter out images containing text, specific names, transparent text blocks, and visual clutter, then use the "Intelligent Removal API" for batch removal. The Intelligent Recognition API focuses on "recognition," while the Intelligent Removal API focuses on "removal." By calling them sequentially, you can maximize removal effectiveness and reduce false removals and false identifications.
     * # Features
     * 1.  First, understand the definitions of image subject and image background. When specifying removal targets, you can choose whether the removal scope is the image subject or the image background area. Both API and editor access methods are supported to meet different requirements.
     *
     *     1.  Image subject: The core product area in the image.
     *
     *     2.  Image background: The remaining portion of the image excluding the product subject.
     *
     * 2.  The following three removal target options are supported:
     *
     *     1.  Select by type only. Supported types include text, specific names, transparent text blocks, and visual clutter. Refer to the following examples to clarify your requirements and perform targeted operations.
     *
     *     2.  (Upgrade) Specify images to remove. You can specify multiple images at a time.
     *
     *     3.  (Upgrade) Specify text to remove. You can specify multiple text strings at a time.
     *
     * Processing workflow: User submits original image URL → OCR+VLM model detects text or image positions → Determines coordinates of areas to repair → AI repairs and generates a clean image → Returns the result image URL.
     * # 4. Effect comparison
     * | **Removable objects in images** | **Original image** | **Image after removal** |
     * | --- | --- | --- |
     * | Text | *   Involving the image subject area
     *
     *     ![done-image-4a2a96c2-9ac6-4b35-b76b-a6eac303740f (1).png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/Mp7ld7bZAb2VAOBQ/img/d72a7982-e761-4b45-af1e-f8f90b3f1fc3.png)
     *
     * *   Not involving the image subject area
     *
     * ![image.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/Mp7ld7bZAb2VAOBQ/img/47428227-7523-432e-89ce-eba263e5ebda.png) | *   Involving the image subject area
     *
     * ![359ddfcf-a2b1-4e59-ae54-5e76705d0adf.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/Mp7ld7bZAb2VAOBQ/img/d69e38e4-5657-471d-aff6-1e6a4c269455.png)
     * *   Not involving the image subject area
     *
     * ![c35611f8-dab4-4df2-8942-36d7375ed55f.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/Mp7ld7bZAb2VAOBQ/img/365024b4-4863-46d4-9013-bdd9408ea6b9.png) |
     * | Specific names | *   Involving the image subject area
     *
     *     ![done-image-aca80515-aca6-4f4e-9429-47c5dd6b811f.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/Mp7ld7bZAb2VAOBQ/img/ac35f8bc-d527-49de-8fba-cdeb71e3b058.png)
     *
     * *   Not involving the image subject area
     *
     * ![done-image-29a89f03-964a-455e-968c-7c8d5282ebbb.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/Mp7ld7bZAb2VAOBQ/img/2db445c8-6bdd-424e-b6a7-2ddb46e6786d.png) | *   Involving the image subject area
     *
     * ![fd2db0ab-1b89-4085-b91d-99f40a1aea77.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/Mp7ld7bZAb2VAOBQ/img/36ace8aa-3b3b-4b1c-81e6-b691104262f0.png)
     * *   Not involving the image subject area
     *
     * ![8726b148-ab74-4409-a6c1-4c50fcac3887.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/Mp7ld7bZAb2VAOBQ/img/a7653a0c-d14e-4f97-9c2f-83327b43203f.png) |
     * | Transparent text blocks | *   Involving the image subject area
     *
     *     ![image.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/Mp7ld7bZAb2VAOBQ/img/0f6068f0-168a-47bd-9fcd-c38b9e520506.png)
     *
     * *   Not involving the image subject area
     *
     * ![image.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/Mp7ld7bZAb2VAOBQ/img/c9ac2a4c-0aa3-40ee-8855-62a262364dbe.png) | *   Involving the image subject area
     *
     * ![8e84a5d6-da8c-4e3e-a705-71a66d0c78a2.jpeg](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/Mp7ld7bZAb2VAOBQ/img/06ac537f-875a-48e2-8934-a84a79dfd8ff.jpeg)
     * *   Not involving the image subject area
     *
     * ![b05173e7-2ae5-494e-99d2-7111fc966fd5.jpeg](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/Mp7ld7bZAb2VAOBQ/img/05759aef-1720-41cd-8800-f7d0801e4d95.jpeg) |
     * | Visual clutter | *   Involving the image subject area
     *
     *     ![2.jpeg](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/Mp7ld7bZAb2VAOBQ/img/bf1442f8-a9fa-40d3-bcb0-7a8a41b49b5d.jpeg)
     *
     * *   Not involving the image subject area
     *
     * ![image.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/Mp7ld7bZAb2VAOBQ/img/0d68612e-845d-466f-8a4a-b85facea095b.png) | *   Involving the image subject area
     *
     * ![b6ef803f-743f-4e61-b901-d1f68167186f.jpeg](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/Mp7ld7bZAb2VAOBQ/img/621daadc-454f-41b4-9ac4-752d457034b6.jpeg)
     * *   Not involving the image subject area
     *
     * ![dee0c7cf-8b0d-4d6d-9677-d5f2e6099834.jpeg](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/Mp7ld7bZAb2VAOBQ/img/caa6994b-2f97-484d-a807-671a0dc75947.jpeg) |
     * | Specified image element removal (supports multiple image links) | ![image.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/Mp7ld7bZAb2VAOBQ/img/9297951f-53c1-4476-8c69-5c31df3fce21.png) | ![image.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/Mp7ld7bZAb2VAOBQ/img/ef3f35aa-609f-454c-bba0-dd1710c83945.png) |
     * | Specified text removal (supports multiple text strings) | ![image.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/Mp7ld7bZAb2VAOBQ/img/c784d8be-4b4d-4972-8b99-828c742b8f03.png) | ![image.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/Mp7ld7bZAb2VAOBQ/img/805423ca-bd0d-4d44-a18e-a7d7bfe88587.png) |
     *
     * @param request - ImageRemoveRequest
     *
     * @returns ImageRemoveResponse
     *
     * @param ImageRemoveRequest $request
     *
     * @return ImageRemoveResponse
     */
    public function imageRemove($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->imageRemoveWithOptions($request, $runtime);
    }

    /**
     * Translates text in images using the PLUS edition, which is designed specifically for e-commerce images and adopts a Mixture of Experts (MOE) architecture. Compared to the Lite and Pro editions of image translation, this edition delivers superior translation accuracy for multiple minority languages. We recommend using it for the following 8 language directions, with more language directions to be supported in the future.
     *
     * @remarks
     * ## Product Introduction
     * Image Translation Plus is designed specifically for e-commerce images. It uses a Mixture of Experts (MOE) architecture and outperforms Image Translation Lite and Pro in translation accuracy for multiple minor languages. We recommend using it for the following language pairs, with more to be supported in the future.
     * Supported language pairs:
     * | **No.** | **Source language** |  | **Target language** |  |
     * | --- | --- | --- | --- | --- |
     * |  | Language code | Language name | Language code | Language name |
     * | 1 | en | English | ar | Arabic |
     * | 2 | en | English | id | Indonesian |
     * | 3 | en | English | th | Thai |
     * | 4 | en | English | ko | Korean |
     * | 5 | en | English | ja | Japanese |
     * | 6 | en | English | vi | Vietnamese |
     * | 7 | en | English | ru | Russian |
     * | 8 | en | English | tl | Filipino |
     * | 9 | en | English | es | Spanish |
     * | 10 | en | English | fr | French |
     * | 11 | en | English | de | German |
     * | 12 | en | English | pl | Polish |
     * ## Common scenarios
     * Main product images and detail images for cross-border e-commerce.
     * ## Functions and features
     * *   **Product body information protection**: Allows you to choose whether to translate text on the product body, helping you protect body information such as embedded product names from being translated.
     *
     * *   **Brand name protection**: Allows you to choose whether to translate brand names on images, helping you protect brand name information from being translated.
     *
     * *   **Translation intervention support**: Allows you to customize translation results, including no translation (ABC-ABC), specified translation (ABC-DEF), and removal (ABC-empty value). This is commonly used for brand name protection scenarios. Simply pass the corresponding intervention glossary ID when calling the API to meet your translation needs in different scenarios. You can upload up to 100,000 intervention terms. If you need more, contact the platform for assistance.
     *
     * @param request - ImageTranslationPlusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImageTranslationPlusResponse
     *
     * @param ImageTranslationPlusRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ImageTranslationPlusResponse
     */
    public function imageTranslationPlusWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->glossary) {
            @$body['Glossary'] = $request->glossary;
        }

        if (null !== $request->imageUrl) {
            @$body['ImageUrl'] = $request->imageUrl;
        }

        if (null !== $request->includingProductArea) {
            @$body['IncludingProductArea'] = $request->includingProductArea;
        }

        if (null !== $request->sourceLanguage) {
            @$body['SourceLanguage'] = $request->sourceLanguage;
        }

        if (null !== $request->targetLanguage) {
            @$body['TargetLanguage'] = $request->targetLanguage;
        }

        if (null !== $request->translatingBrandInTheProduct) {
            @$body['TranslatingBrandInTheProduct'] = $request->translatingBrandInTheProduct;
        }

        if (null !== $request->useImageEditor) {
            @$body['UseImageEditor'] = $request->useImageEditor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ImageTranslationPlus',
            'version' => '2026-04-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ImageTranslationPlusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Translates text in images using the PLUS edition, which is designed specifically for e-commerce images and adopts a Mixture of Experts (MOE) architecture. Compared to the Lite and Pro editions of image translation, this edition delivers superior translation accuracy for multiple minority languages. We recommend using it for the following 8 language directions, with more language directions to be supported in the future.
     *
     * @remarks
     * ## Product Introduction
     * Image Translation Plus is designed specifically for e-commerce images. It uses a Mixture of Experts (MOE) architecture and outperforms Image Translation Lite and Pro in translation accuracy for multiple minor languages. We recommend using it for the following language pairs, with more to be supported in the future.
     * Supported language pairs:
     * | **No.** | **Source language** |  | **Target language** |  |
     * | --- | --- | --- | --- | --- |
     * |  | Language code | Language name | Language code | Language name |
     * | 1 | en | English | ar | Arabic |
     * | 2 | en | English | id | Indonesian |
     * | 3 | en | English | th | Thai |
     * | 4 | en | English | ko | Korean |
     * | 5 | en | English | ja | Japanese |
     * | 6 | en | English | vi | Vietnamese |
     * | 7 | en | English | ru | Russian |
     * | 8 | en | English | tl | Filipino |
     * | 9 | en | English | es | Spanish |
     * | 10 | en | English | fr | French |
     * | 11 | en | English | de | German |
     * | 12 | en | English | pl | Polish |
     * ## Common scenarios
     * Main product images and detail images for cross-border e-commerce.
     * ## Functions and features
     * *   **Product body information protection**: Allows you to choose whether to translate text on the product body, helping you protect body information such as embedded product names from being translated.
     *
     * *   **Brand name protection**: Allows you to choose whether to translate brand names on images, helping you protect brand name information from being translated.
     *
     * *   **Translation intervention support**: Allows you to customize translation results, including no translation (ABC-ABC), specified translation (ABC-DEF), and removal (ABC-empty value). This is commonly used for brand name protection scenarios. Simply pass the corresponding intervention glossary ID when calling the API to meet your translation needs in different scenarios. You can upload up to 100,000 intervention terms. If you need more, contact the platform for assistance.
     *
     * @param request - ImageTranslationPlusRequest
     *
     * @returns ImageTranslationPlusResponse
     *
     * @param ImageTranslationPlusRequest $request
     *
     * @return ImageTranslationPlusResponse
     */
    public function imageTranslationPlus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->imageTranslationPlusWithOptions($request, $runtime);
    }

    /**
     * Translates images using the Pro edition, which is designed for e-commerce images and integrates multimodal large model technology to achieve more accurate image understanding, significantly improve translation quality, and continuously expand and optimize multilingual translation capabilities. Supports more than 100 language directions (including bridged directions).
     *
     * @remarks
     * ## Product Introduction
     * The Image Translation Pro edition is designed specifically for e-commerce images. It integrates multimodal large model technology to achieve more accurate image understanding, significantly improve translation quality, and continuously expand and optimize multilingual translation capabilities. It supports more than 100 language directions (including bridged directions).
     * ## Scenarios
     * E-commerce product images, marketing images, and images for various other scenarios.
     * ## Features
     * - **Product subject protection**: Allows you to choose whether to translate text on the product subject, helping you protect subject information such as embedded product names from being translated.
     * - **Post-translation editing**: Allows you to choose whether to return layout information such as text position, font, and color. This can be used for secondary editing when integrated with an image editor. The editor SDK is not yet available. Follow platform notifications for updates.
     * - **Brand name protection**: Allows you to choose whether to translate brand names on images, helping you protect brand name information from being translated.
     * - **Translation intervention**: Allows you to customize translation results, including do-not-translate (ABC-ABC), specified translation (ABC-DEF), and no translation (ABC-empty value). This is commonly used for brand name protection and similar scenarios. Simply pass the corresponding intervention glossary ID when calling the API to meet your translation needs in different scenarios. You can upload up to 100,000 intervention terms. If you need more, contact the platform for assistance.
     * - **Image editor integration**: For more information, see [Image Translation Editor Protocol](https://www.alibabacloud.com/help/en/document_detail/3042647.html).
     *
     * @param request - ImageTranslationProRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImageTranslationProResponse
     *
     * @param ImageTranslationProRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ImageTranslationProResponse
     */
    public function imageTranslationProWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->async) {
            @$body['Async'] = $request->async;
        }

        if (null !== $request->glossary) {
            @$body['Glossary'] = $request->glossary;
        }

        if (null !== $request->imageUrl) {
            @$body['ImageUrl'] = $request->imageUrl;
        }

        if (null !== $request->includingProductArea) {
            @$body['IncludingProductArea'] = $request->includingProductArea;
        }

        if (null !== $request->sourceLanguage) {
            @$body['SourceLanguage'] = $request->sourceLanguage;
        }

        if (null !== $request->targetLanguage) {
            @$body['TargetLanguage'] = $request->targetLanguage;
        }

        if (null !== $request->translatingBrandInTheProduct) {
            @$body['TranslatingBrandInTheProduct'] = $request->translatingBrandInTheProduct;
        }

        if (null !== $request->useImageEditor) {
            @$body['UseImageEditor'] = $request->useImageEditor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ImageTranslationPro',
            'version' => '2026-04-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ImageTranslationProResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Translates images using the Pro edition, which is designed for e-commerce images and integrates multimodal large model technology to achieve more accurate image understanding, significantly improve translation quality, and continuously expand and optimize multilingual translation capabilities. Supports more than 100 language directions (including bridged directions).
     *
     * @remarks
     * ## Product Introduction
     * The Image Translation Pro edition is designed specifically for e-commerce images. It integrates multimodal large model technology to achieve more accurate image understanding, significantly improve translation quality, and continuously expand and optimize multilingual translation capabilities. It supports more than 100 language directions (including bridged directions).
     * ## Scenarios
     * E-commerce product images, marketing images, and images for various other scenarios.
     * ## Features
     * - **Product subject protection**: Allows you to choose whether to translate text on the product subject, helping you protect subject information such as embedded product names from being translated.
     * - **Post-translation editing**: Allows you to choose whether to return layout information such as text position, font, and color. This can be used for secondary editing when integrated with an image editor. The editor SDK is not yet available. Follow platform notifications for updates.
     * - **Brand name protection**: Allows you to choose whether to translate brand names on images, helping you protect brand name information from being translated.
     * - **Translation intervention**: Allows you to customize translation results, including do-not-translate (ABC-ABC), specified translation (ABC-DEF), and no translation (ABC-empty value). This is commonly used for brand name protection and similar scenarios. Simply pass the corresponding intervention glossary ID when calling the API to meet your translation needs in different scenarios. You can upload up to 100,000 intervention terms. If you need more, contact the platform for assistance.
     * - **Image editor integration**: For more information, see [Image Translation Editor Protocol](https://www.alibabacloud.com/help/en/document_detail/3042647.html).
     *
     * @param request - ImageTranslationProRequest
     *
     * @returns ImageTranslationProResponse
     *
     * @param ImageTranslationProRequest $request
     *
     * @return ImageTranslationProResponse
     */
    public function imageTranslationPro($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->imageTranslationProWithOptions($request, $runtime);
    }

    /**
     * Translates text in images with support for over 100 language directions (including bridging). This product is designed specifically for e-commerce images, accurately handling complex text layouts within images and ensuring that translated content matches the image context. It helps e-commerce platforms and developers easily achieve multilingual conversion and rendering of image content. The product also returns layer information such as text position, font, and color, enabling secondary editing of translation results through an image editor.
     *
     * @remarks
     * # 1. Product Introduction
     * The image translation product is designed specifically for e-commerce images, supporting over 100 language directions (including bridging). It accurately handles complex text layouts within images and ensures that translated content matches the image context, helping e-commerce platforms and developers easily achieve multilingual conversion and rendering of image content. The product also returns layer information such as text position, font, and color, enabling secondary editing of translation results through an image editor.
     * # 2. Common scenarios
     * E-commerce product images, marketing images, and images for various other scenarios.
     * # 3. Features
     * *   **Product area protection**: Allows you to choose whether to translate text on the product area. This helps protect product information from being translated, avoiding translation of embedded information such as product names.
     *
     * *   **Brand name protection**: Allows you to choose whether to translate brand names on images. This helps protect brand name information from being translated.
     *
     * *   **Secondary editing after translation (layer information)**: Allows you to choose whether to return layer information such as text position, font, and color. This can be used to integrate with an image editor for secondary editing of translation results. For the release progress of the editor SDK package, follow platform notifications.
     *
     * *   **Translation intervention**: Allows you to customize translation results, including no translation (ABC-ABC), specified translation (ABC-DEF), and skip translation (ABC-empty value). This is commonly used for brand name protection scenarios. Simply pass the corresponding intervention glossary ID when calling the API to meet your translation needs in different scenarios. You can upload up to 100,000 intervention terms. If you need more, contact the platform for assistance.
     * *   **Image editor integration**: For more information, see [Image translation editor protocol](https://www.alibabacloud.com/help/en/document_detail/3042647.html).
     *
     * @param request - ImageTranslationStandardRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImageTranslationStandardResponse
     *
     * @param ImageTranslationStandardRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ImageTranslationStandardResponse
     */
    public function imageTranslationStandardWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->glossary) {
            @$query['Glossary'] = $request->glossary;
        }

        if (null !== $request->imageUrl) {
            @$query['ImageUrl'] = $request->imageUrl;
        }

        if (null !== $request->includingProductArea) {
            @$query['IncludingProductArea'] = $request->includingProductArea;
        }

        if (null !== $request->sourceLanguage) {
            @$query['SourceLanguage'] = $request->sourceLanguage;
        }

        if (null !== $request->targetLanguage) {
            @$query['TargetLanguage'] = $request->targetLanguage;
        }

        if (null !== $request->translatingBrandInTheProduct) {
            @$query['TranslatingBrandInTheProduct'] = $request->translatingBrandInTheProduct;
        }

        if (null !== $request->useImageEditor) {
            @$query['UseImageEditor'] = $request->useImageEditor;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ImageTranslationStandard',
            'version' => '2026-04-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ImageTranslationStandardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Translates text in images with support for over 100 language directions (including bridging). This product is designed specifically for e-commerce images, accurately handling complex text layouts within images and ensuring that translated content matches the image context. It helps e-commerce platforms and developers easily achieve multilingual conversion and rendering of image content. The product also returns layer information such as text position, font, and color, enabling secondary editing of translation results through an image editor.
     *
     * @remarks
     * # 1. Product Introduction
     * The image translation product is designed specifically for e-commerce images, supporting over 100 language directions (including bridging). It accurately handles complex text layouts within images and ensures that translated content matches the image context, helping e-commerce platforms and developers easily achieve multilingual conversion and rendering of image content. The product also returns layer information such as text position, font, and color, enabling secondary editing of translation results through an image editor.
     * # 2. Common scenarios
     * E-commerce product images, marketing images, and images for various other scenarios.
     * # 3. Features
     * *   **Product area protection**: Allows you to choose whether to translate text on the product area. This helps protect product information from being translated, avoiding translation of embedded information such as product names.
     *
     * *   **Brand name protection**: Allows you to choose whether to translate brand names on images. This helps protect brand name information from being translated.
     *
     * *   **Secondary editing after translation (layer information)**: Allows you to choose whether to return layer information such as text position, font, and color. This can be used to integrate with an image editor for secondary editing of translation results. For the release progress of the editor SDK package, follow platform notifications.
     *
     * *   **Translation intervention**: Allows you to customize translation results, including no translation (ABC-ABC), specified translation (ABC-DEF), and skip translation (ABC-empty value). This is commonly used for brand name protection scenarios. Simply pass the corresponding intervention glossary ID when calling the API to meet your translation needs in different scenarios. You can upload up to 100,000 intervention terms. If you need more, contact the platform for assistance.
     * *   **Image editor integration**: For more information, see [Image translation editor protocol](https://www.alibabacloud.com/help/en/document_detail/3042647.html).
     *
     * @param request - ImageTranslationStandardRequest
     *
     * @returns ImageTranslationStandardResponse
     *
     * @param ImageTranslationStandardRequest $request
     *
     * @return ImageTranslationStandardResponse
     */
    public function imageTranslationStandard($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->imageTranslationStandardWithOptions($request, $runtime);
    }

    /**
     * Supports automatic language identification for 24 language directions. Applicable to short text such as search queries, titles, and conversations.
     *
     * @remarks
     * ## Product Introduction
     * Supports automatic language identification for 24 language directions. Applicable to short text such as search queries, titles, and conversations.
     *
     * @param request - LanguageDetectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns LanguageDetectResponse
     *
     * @param LanguageDetectRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return LanguageDetectResponse
     */
    public function languageDetectWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->scene) {
            @$query['Scene'] = $request->scene;
        }

        if (null !== $request->sourceText) {
            @$query['SourceText'] = $request->sourceText;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'LanguageDetect',
            'version' => '2026-04-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return LanguageDetectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Supports automatic language identification for 24 language directions. Applicable to short text such as search queries, titles, and conversations.
     *
     * @remarks
     * ## Product Introduction
     * Supports automatic language identification for 24 language directions. Applicable to short text such as search queries, titles, and conversations.
     *
     * @param request - LanguageDetectRequest
     *
     * @returns LanguageDetectResponse
     *
     * @param LanguageDetectRequest $request
     *
     * @return LanguageDetectResponse
     */
    public function languageDetect($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->languageDetectWithOptions($request, $runtime);
    }

    /**
     * Detects the compliance of marketing material displays in retail stores based on a multimodal large language model (MLLM). This API targets in-store marketing material inspection scenarios for offline retail and channel stores. It performs natural-language-level compliance checks on standard materials such as functional display cards, posters, and door-shaped display stands, as well as long-tail materials such as light cloth banners, KT boards, floor stickers, and light boxes in store photos, according to inspection rules. It outputs structured conclusions and Chinese-language evidence descriptions that can be directly integrated with business systems. This is a **synchronous** call that returns results in a single request.
     *
     * @remarks
     * ## **Scenarios**
     * -   **In-store marketing material compliance inspection**: Automatically determines whether marketing materials (functional display cards, posters, door-shaped display stands, etc.) are placed or posted according to the standard display guidelines issued by headquarters. Identifies typical issues such as "not placed," "placed incorrectly," or "content mismatch."
     *
     * -   **New product/campaign material deployment verification**: During new product launches or sales promotions, automatically verifies in batch whether campaign materials in store photos have been deployed as required for listing, replacing manual spot checks.
     *
     * -   **Adaptive dual-image comparison and single-image detection**: The same API supports both "reference image + target image" dual-image comparison (Mode A) and "target image only" single-image detection (Mode B). The mode switches automatically based on whether `ImageRefer` is provided. Callers do not need to differentiate between invocation methods.
     * ## **Features**
     * -   **Multi-mode intelligent routing**: Built-in material type parsing capability that automatically identifies the target material type based on `Rules` natural language text and routes to the corresponding material detection pipeline. Callers only need to provide image URLs and rule text. Currently, four detection routing pipelines are supported: "functional display card," "poster," "door-shaped display stand," and "other materials." Additional detection pipelines for specific marketing material types will be added over time.
     *
     * -   **MLLM semantic-level understanding + rule structuring collaboration**: Uses a multimodal large model for material recognition, content comparison, text OCR, and other semantic-level understanding tasks. Combined with rule cleaning and structuring models, natural language rules are decomposed into individually assessable steps (S1/S2...), ensuring accuracy while maintaining rule flexibility and traceability.
     *
     * -   **Structured audit conclusion output**: Output is unified into the `Result.OverallResult` + `Result.Steps[]` + `Result.Evidence` structure. The overall conclusion is derived from the logical AND of all steps. Each step is independently visible, facilitating direct integration with downstream business systems and supporting case-level manual review traceability.
     *
     * -   **Supported input formats**: Currently supports publicly accessible image URLs. Both single-image (Mode B) and dual-image (Mode A) calling modes are supported, with identical output structures.
     * ## **Invocation method**
     * -   **Synchronous call**: A single request returns the detection result without polling. The response uses the unified envelope of `Code` / `Message` / `RequestId` / `Success` / `Data`.
     *
     * -   **Authentication and signing**: Invoked through the Aidge gateway. Authentication, signing, and common parameters follow the platform\\"s unified access method. Refer to the officially published API reference for the specific request path.
     *
     * -   **Timeout settings**: Set the request timeout to no less than the maximum response time of the API (refer to the official publication for the specific value).
     *
     * @param request - MaterialInspectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MaterialInspectionResponse
     *
     * @param MaterialInspectionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return MaterialInspectionResponse
     */
    public function materialInspectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiId) {
            @$query['ApiId'] = $request->apiId;
        }

        if (null !== $request->imageRefer) {
            @$query['ImageRefer'] = $request->imageRefer;
        }

        if (null !== $request->imageUrl) {
            @$query['ImageUrl'] = $request->imageUrl;
        }

        if (null !== $request->reqId) {
            @$query['ReqId'] = $request->reqId;
        }

        if (null !== $request->rules) {
            @$query['Rules'] = $request->rules;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'MaterialInspection',
            'version' => '2026-04-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MaterialInspectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Detects the compliance of marketing material displays in retail stores based on a multimodal large language model (MLLM). This API targets in-store marketing material inspection scenarios for offline retail and channel stores. It performs natural-language-level compliance checks on standard materials such as functional display cards, posters, and door-shaped display stands, as well as long-tail materials such as light cloth banners, KT boards, floor stickers, and light boxes in store photos, according to inspection rules. It outputs structured conclusions and Chinese-language evidence descriptions that can be directly integrated with business systems. This is a **synchronous** call that returns results in a single request.
     *
     * @remarks
     * ## **Scenarios**
     * -   **In-store marketing material compliance inspection**: Automatically determines whether marketing materials (functional display cards, posters, door-shaped display stands, etc.) are placed or posted according to the standard display guidelines issued by headquarters. Identifies typical issues such as "not placed," "placed incorrectly," or "content mismatch."
     *
     * -   **New product/campaign material deployment verification**: During new product launches or sales promotions, automatically verifies in batch whether campaign materials in store photos have been deployed as required for listing, replacing manual spot checks.
     *
     * -   **Adaptive dual-image comparison and single-image detection**: The same API supports both "reference image + target image" dual-image comparison (Mode A) and "target image only" single-image detection (Mode B). The mode switches automatically based on whether `ImageRefer` is provided. Callers do not need to differentiate between invocation methods.
     * ## **Features**
     * -   **Multi-mode intelligent routing**: Built-in material type parsing capability that automatically identifies the target material type based on `Rules` natural language text and routes to the corresponding material detection pipeline. Callers only need to provide image URLs and rule text. Currently, four detection routing pipelines are supported: "functional display card," "poster," "door-shaped display stand," and "other materials." Additional detection pipelines for specific marketing material types will be added over time.
     *
     * -   **MLLM semantic-level understanding + rule structuring collaboration**: Uses a multimodal large model for material recognition, content comparison, text OCR, and other semantic-level understanding tasks. Combined with rule cleaning and structuring models, natural language rules are decomposed into individually assessable steps (S1/S2...), ensuring accuracy while maintaining rule flexibility and traceability.
     *
     * -   **Structured audit conclusion output**: Output is unified into the `Result.OverallResult` + `Result.Steps[]` + `Result.Evidence` structure. The overall conclusion is derived from the logical AND of all steps. Each step is independently visible, facilitating direct integration with downstream business systems and supporting case-level manual review traceability.
     *
     * -   **Supported input formats**: Currently supports publicly accessible image URLs. Both single-image (Mode B) and dual-image (Mode A) calling modes are supported, with identical output structures.
     * ## **Invocation method**
     * -   **Synchronous call**: A single request returns the detection result without polling. The response uses the unified envelope of `Code` / `Message` / `RequestId` / `Success` / `Data`.
     *
     * -   **Authentication and signing**: Invoked through the Aidge gateway. Authentication, signing, and common parameters follow the platform\\"s unified access method. Refer to the officially published API reference for the specific request path.
     *
     * -   **Timeout settings**: Set the request timeout to no less than the maximum response time of the API (refer to the official publication for the specific value).
     *
     * @param request - MaterialInspectionRequest
     *
     * @returns MaterialInspectionResponse
     *
     * @param MaterialInspectionRequest $request
     *
     * @return MaterialInspectionResponse
     */
    public function materialInspection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->materialInspectionWithOptions($request, $runtime);
    }

    /**
     * Detects and identifies products displayed on store shelves or floor stacks by combining a multimodal large language model (MLLM) with visual vector recall, targeting shelf and floor-stack inspection scenarios in offline retail and channel stores. For photos of shelves or floor stacks taken in stores, the product first uses a multimodal large model to detect the bounding box and preliminary name of each product, then performs similarity recall against the customer\\"s dedicated SKU vector library to exactly match each product to the customer\\"s own SKUs. The output is per-product structured results that can be directly integrated with business systems. It is suitable for large-scale, high-concurrent visual recognition pipelines such as remote auditing of in-store displays by headquarters, SKU distribution verification, and display compliance inspection.
     *
     * @remarks
     * ## **Product Introduction**
     * Display detection is an intelligent product display recognition capability built on a multimodal large language model (MLLM) combined with visual vector recall. It targets shelf and floor-stack inspection scenarios in offline retail and channel stores. For photos of shelves or floor stacks taken in stores, the product first uses a multimodal large model to detect the bounding box and preliminary name of each product, then performs similarity recall against the customer\\"s dedicated SKU vector library to exactly match each product to the customer\\"s own SKUs. The output is per-product structured results that can be directly integrated with business systems. It is suitable for large-scale, high-concurrent visual recognition pipelines such as remote auditing of in-store displays by headquarters, SKU distribution verification, and display compliance inspection.
     * ## **Common scenarios**
     * -   **Shelf/floor-stack display recognition and inventory**: Identifies each product in a shelf or floor-stack image and matches it to the customer\\"s SKU library, outputting a per-product list (product name + position + similarity score) to replace manual counting.
     *
     * -   **Distribution verification/SKU compliance**: Verifies whether stores display specified SKUs as required by headquarters and whether out-of-stock or misplaced items exist, supporting batch automated verification during promotions or new product launches.
     *
     * -   **Customer-dedicated SKU library**: Customers upload their own SKU reference images to build a dedicated vector library (isolated by `RagId`). During recognition, retrieval is performed only within that customer\\"s library, ensuring name accuracy and data isolation between customers.
     * ## **Functions and features**
     * -   **Two-stage detection + retrieval collaboration**: The multimodal large model detects each product bounding box and preliminary name on the full image (semantic-level understanding, adapted for dense displays and partial occlusion). Then visual embedding vectors perform similarity retrieval within the customer\\"s SKU library, overriding the preliminary name with the top-1 precise SKU name to balance recall rate and name accuracy.
     *
     * -   **Dedicated vector library with isolated retrieval**: A dedicated SKU vector library is maintained for each customer by `RagId`. Recognition retrieves only within the corresponding library with strict isolation between customers. Newly added or updated SKUs take effect in real time.
     *
     * -   **Per-product structured output**: Output is unified as `Result.Items[]`, with each product independently providing a bounding box, recalled SKU name, SKU code, and similarity score. This facilitates direct integration with downstream inventory/verification systems and supports case-level manual review and traceability.
     *
     * -   **Supported input formats**: Currently supports image URLs accessible over the public network or from OSS. A single shelf or floor-stack image is sufficient for recognition, and the output structure is consistent.
     *
     * @param request - MerchandisePlacementDetectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MerchandisePlacementDetectionResponse
     *
     * @param MerchandisePlacementDetectionRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return MerchandisePlacementDetectionResponse
     */
    public function merchandisePlacementDetectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiId) {
            @$query['ApiId'] = $request->apiId;
        }

        if (null !== $request->imageUrl) {
            @$query['ImageUrl'] = $request->imageUrl;
        }

        if (null !== $request->ragId) {
            @$query['RagId'] = $request->ragId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'MerchandisePlacementDetection',
            'version' => '2026-04-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MerchandisePlacementDetectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Detects and identifies products displayed on store shelves or floor stacks by combining a multimodal large language model (MLLM) with visual vector recall, targeting shelf and floor-stack inspection scenarios in offline retail and channel stores. For photos of shelves or floor stacks taken in stores, the product first uses a multimodal large model to detect the bounding box and preliminary name of each product, then performs similarity recall against the customer\\"s dedicated SKU vector library to exactly match each product to the customer\\"s own SKUs. The output is per-product structured results that can be directly integrated with business systems. It is suitable for large-scale, high-concurrent visual recognition pipelines such as remote auditing of in-store displays by headquarters, SKU distribution verification, and display compliance inspection.
     *
     * @remarks
     * ## **Product Introduction**
     * Display detection is an intelligent product display recognition capability built on a multimodal large language model (MLLM) combined with visual vector recall. It targets shelf and floor-stack inspection scenarios in offline retail and channel stores. For photos of shelves or floor stacks taken in stores, the product first uses a multimodal large model to detect the bounding box and preliminary name of each product, then performs similarity recall against the customer\\"s dedicated SKU vector library to exactly match each product to the customer\\"s own SKUs. The output is per-product structured results that can be directly integrated with business systems. It is suitable for large-scale, high-concurrent visual recognition pipelines such as remote auditing of in-store displays by headquarters, SKU distribution verification, and display compliance inspection.
     * ## **Common scenarios**
     * -   **Shelf/floor-stack display recognition and inventory**: Identifies each product in a shelf or floor-stack image and matches it to the customer\\"s SKU library, outputting a per-product list (product name + position + similarity score) to replace manual counting.
     *
     * -   **Distribution verification/SKU compliance**: Verifies whether stores display specified SKUs as required by headquarters and whether out-of-stock or misplaced items exist, supporting batch automated verification during promotions or new product launches.
     *
     * -   **Customer-dedicated SKU library**: Customers upload their own SKU reference images to build a dedicated vector library (isolated by `RagId`). During recognition, retrieval is performed only within that customer\\"s library, ensuring name accuracy and data isolation between customers.
     * ## **Functions and features**
     * -   **Two-stage detection + retrieval collaboration**: The multimodal large model detects each product bounding box and preliminary name on the full image (semantic-level understanding, adapted for dense displays and partial occlusion). Then visual embedding vectors perform similarity retrieval within the customer\\"s SKU library, overriding the preliminary name with the top-1 precise SKU name to balance recall rate and name accuracy.
     *
     * -   **Dedicated vector library with isolated retrieval**: A dedicated SKU vector library is maintained for each customer by `RagId`. Recognition retrieves only within the corresponding library with strict isolation between customers. Newly added or updated SKUs take effect in real time.
     *
     * -   **Per-product structured output**: Output is unified as `Result.Items[]`, with each product independently providing a bounding box, recalled SKU name, SKU code, and similarity score. This facilitates direct integration with downstream inventory/verification systems and supports case-level manual review and traceability.
     *
     * -   **Supported input formats**: Currently supports image URLs accessible over the public network or from OSS. A single shelf or floor-stack image is sufficient for recognition, and the output structure is consistent.
     *
     * @param request - MerchandisePlacementDetectionRequest
     *
     * @returns MerchandisePlacementDetectionResponse
     *
     * @param MerchandisePlacementDetectionRequest $request
     *
     * @return MerchandisePlacementDetectionResponse
     */
    public function merchandisePlacementDetection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->merchandisePlacementDetectionWithOptions($request, $runtime);
    }

    /**
     * An intelligent logistics parcel review product built on the collaboration of a multimodal large language model (MLLM) and dedicated vision algorithms, designed for automated compliance review in the "piece-weight-dimension" stage of e-commerce logistics. The product performs structured review across multiple dimensions including bounding box validity, bounding box fit accuracy, and foreign object interference for parcels on scanning platforms. It adapts to different hardware capture scenarios such as white and green background boards, and outputs Boolean review conclusions with Chinese reason descriptions that can directly interface with business systems. It is suitable for large-scale, high-concurrency inbound quality inspection pipelines.
     *
     * @remarks
     * ## Product Introduction
     * An intelligent logistics parcel review product built on the collaboration of a multimodal large language model (MLLM) and dedicated vision algorithms, designed for automated compliance review in the "piece-weight-dimension" stage of e-commerce logistics. The product performs structured review across multiple dimensions including **bounding box validity, bounding box fit accuracy, and foreign object interference** for parcels on scanning platforms. It adapts to different hardware capture scenarios such as white and green background boards, and outputs Boolean review conclusions with Chinese reason descriptions that can directly interface with business systems. It is suitable for large-scale, high-concurrency inbound quality inspection pipelines.
     * ## Scenarios
     * 1. **Parcel bounding box review**: Automatically determines whether the operator\\"s manual bounding box constitutes the "minimum effective border rectangle" for the parcel, identifying typical issues such as oversized or undersized bounding boxes.
     * 2. **Foreign object interference detection**: Automatically identifies whether non-target objects such as fingers, keyboards, or supporting tools are present in the scanning area.
     * 3. **Multi-capture environment adaptation**: A single API handles both white background board (blue frame) and green background board (blue frame + red frame) capture patterns without requiring the caller to distinguish between scenarios.
     * 4. **Inbound quality inspection pipeline**: Used for automated compliance review in the piece-weight-dimension stage of the logistics warehouse new product inbound SOP, as a replacement for or supplement to manual outsourced review.
     * The product is also applicable to general image "frame-subject" relationship review scenarios, such as product photography material review and document scanning quality verification.
     * ## Features
     * 1. **Multi-scenario intelligent routing**: The product has built-in scenario classification capabilities that automatically identify the background type (white/green) and bounding box type (none/single frame/double frame) in images, and route requests to the corresponding review sub-process. Callers only need to pass in the image URL without manually specifying the scenario.
     * 2. **MLLM + dedicated CV model collaboration**: Uses a multimodal large language model for semantic-level scene understanding and foreign object recognition, and uses dedicated parcel segmentation and IoU evaluation models for pixel-level bounding box fit quantification, ensuring accuracy while controlling inference latency and cost.
     * 3. **Structured review conclusions**: Output is unified as `result` (Boolean) + `info` (Chinese reason) structure. Supported reason types include "Review passed", "Review failed: bounding box too large", "Review failed: bounding box too small", "Review failed: foreign object detected", and others, enabling direct integration with downstream business systems.
     * 4. **Supported input formats**: Currently supports publicly accessible image URLs.
     *
     * @param request - PackageWeightSizeCheckRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PackageWeightSizeCheckResponse
     *
     * @param PackageWeightSizeCheckRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return PackageWeightSizeCheckResponse
     */
    public function packageWeightSizeCheckWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->annotatedImageUrl) {
            @$query['AnnotatedImageUrl'] = $request->annotatedImageUrl;
        }

        if (null !== $request->rawImageUrl) {
            @$query['RawImageUrl'] = $request->rawImageUrl;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PackageWeightSizeCheck',
            'version' => '2026-04-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PackageWeightSizeCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * An intelligent logistics parcel review product built on the collaboration of a multimodal large language model (MLLM) and dedicated vision algorithms, designed for automated compliance review in the "piece-weight-dimension" stage of e-commerce logistics. The product performs structured review across multiple dimensions including bounding box validity, bounding box fit accuracy, and foreign object interference for parcels on scanning platforms. It adapts to different hardware capture scenarios such as white and green background boards, and outputs Boolean review conclusions with Chinese reason descriptions that can directly interface with business systems. It is suitable for large-scale, high-concurrency inbound quality inspection pipelines.
     *
     * @remarks
     * ## Product Introduction
     * An intelligent logistics parcel review product built on the collaboration of a multimodal large language model (MLLM) and dedicated vision algorithms, designed for automated compliance review in the "piece-weight-dimension" stage of e-commerce logistics. The product performs structured review across multiple dimensions including **bounding box validity, bounding box fit accuracy, and foreign object interference** for parcels on scanning platforms. It adapts to different hardware capture scenarios such as white and green background boards, and outputs Boolean review conclusions with Chinese reason descriptions that can directly interface with business systems. It is suitable for large-scale, high-concurrency inbound quality inspection pipelines.
     * ## Scenarios
     * 1. **Parcel bounding box review**: Automatically determines whether the operator\\"s manual bounding box constitutes the "minimum effective border rectangle" for the parcel, identifying typical issues such as oversized or undersized bounding boxes.
     * 2. **Foreign object interference detection**: Automatically identifies whether non-target objects such as fingers, keyboards, or supporting tools are present in the scanning area.
     * 3. **Multi-capture environment adaptation**: A single API handles both white background board (blue frame) and green background board (blue frame + red frame) capture patterns without requiring the caller to distinguish between scenarios.
     * 4. **Inbound quality inspection pipeline**: Used for automated compliance review in the piece-weight-dimension stage of the logistics warehouse new product inbound SOP, as a replacement for or supplement to manual outsourced review.
     * The product is also applicable to general image "frame-subject" relationship review scenarios, such as product photography material review and document scanning quality verification.
     * ## Features
     * 1. **Multi-scenario intelligent routing**: The product has built-in scenario classification capabilities that automatically identify the background type (white/green) and bounding box type (none/single frame/double frame) in images, and route requests to the corresponding review sub-process. Callers only need to pass in the image URL without manually specifying the scenario.
     * 2. **MLLM + dedicated CV model collaboration**: Uses a multimodal large language model for semantic-level scene understanding and foreign object recognition, and uses dedicated parcel segmentation and IoU evaluation models for pixel-level bounding box fit quantification, ensuring accuracy while controlling inference latency and cost.
     * 3. **Structured review conclusions**: Output is unified as `result` (Boolean) + `info` (Chinese reason) structure. Supported reason types include "Review passed", "Review failed: bounding box too large", "Review failed: bounding box too small", "Review failed: foreign object detected", and others, enabling direct integration with downstream business systems.
     * 4. **Supported input formats**: Currently supports publicly accessible image URLs.
     *
     * @param request - PackageWeightSizeCheckRequest
     *
     * @returns PackageWeightSizeCheckResponse
     *
     * @param PackageWeightSizeCheckRequest $request
     *
     * @return PackageWeightSizeCheckResponse
     */
    public function packageWeightSizeCheck($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->packageWeightSizeCheckWithOptions($request, $runtime);
    }

    /**
     * Marco MT is an e-commerce translation model trained on over 1 billion high-quality bilingual sentence pairs, continuously optimized for e-commerce-specific terminology such as brands, models, materials, and attributes. It supports translation between more than 100 language pairs (including bridged translations), especially Chinese-English, Chinese-multilingual, and English-multilingual translations. It supports language detection for 24 language directions. If you do not specify the source language, automatic detection is performed.
     *
     * @remarks
     * ## Product Introduction
     * Marco MT is an e-commerce translation model trained on over 1 billion\\+ high-quality bilingual sentence pairs, continuously optimized for e-commerce-specific terminology such as brands, models, materials, and attributes. It supports translation between more than 100 language pairs (including bridged translations), especially Chinese-English, Chinese-multilingual, and English-multilingual translations. It supports language detection for 24 language directions. If you do not specify the source language, automatic detection is performed.
     * ## Common scenarios
     * - Product titles: Marco MT large model translation accurately translates phrases, keywords, and trending words in product titles into the target language, improving product visibility on e-commerce platforms.
     * - Product descriptions: Product descriptions are typically long with diverse and complex formatting. Marco large model translation supports long text translation and HTML format, delivering excellent translation quality and format preservation.
     * - Product attributes: Product attribute terms are short and may contain e-commerce-specific terms such as model numbers and parameters.
     * - Customer service conversations: In customer service scenarios, the model optimizes issues such as missing context and typos, and supports polite expressions for certain language directions.
     * Marco MT large model translation can also be used for general-purpose translation scenarios such as office work, meetings, and daily conversations.
     * ## Features
     * - **Supported language directions** Marco MT large model translation supports translation between more than 100 languages and language detection for 23 languages. For specific language directions, refer to the language mapping table in Section 5.6.
     * - **Ultra-low hallucination rate and high-speed inference** Marco MT large model translation is a large language model with preference alignment for translation scenarios. Compared with general-purpose large language models, it offers faster translation inference speed and an extremely low hallucination rate, making it especially suitable for large-scale invocation scenarios.
     * - **Supported text format types** Currently supports text and html text types.
     * - **Translation intervention support** Supports custom translation results, including do-not-translate (ABC-ABC), specified translation (ABC-DEF), and no translation (ABC-empty value). This is commonly used for brand name protection scenarios. Simply pass the corresponding intervention glossary ID when calling the API to meet your translation needs across different scenarios. You can upload up to 100,000 intervention terms. If you need more, contact the platform for assistance.
     * ## Translation quality comparison
     * | **Source text** | **Aidge translation** | **Other translation product 1** | **Other translation product 2** | **Aidge translation advantage** |
     * |----------|---------------|-----------------------|-----------------------|---------------------|
     * | 75mm 4Pin 0.38A GA81S2U 12V GTX 960 Cooling Fan for Zotac GTX960 Graphics Card Cooling Fan | 75mm 4Pin 0.38A GA81S2U 12V GTX 960, ventilador de enfriamiento para tarjeta gráfica Zotac GTX960. | Ventilador de refrigeración de 75mm 4Pin 0.38A GA81S2U 12V para la tarjeta gráfica Zotac GTX960 Ventilador de enfriamiento GTX 960. | Ventilador de refrigeración para tarjeta gráfica Zotac GTX960, 75mm, 4 pines, 0,38A, GA81S2U, 12V, GTX 960 | Clearer product subject |
     * | New Arrival Classic Style Luxury Brand 6 Hands Swiss Automatic Mechanical Men\\"s Business Steel Watch | Nueva llegada, reloj mecánico automático de lujo con 6 manecillas, estilo clásico, de acero para hombres de negocios | Nueva Llegada Reloj De Acero de Negocios para Hombre con Mecanismo Automático Suizo y 6 Agujas de Estilo Clásico de Marca de Lujo. | Reloj de acero de negocios para hombre, mecánico automático suizo, marca de lujo, estilo clásico, 6 manos, nueva llegada | More complete sentence structure, clearer expression, and more reasonable segmentation |
     * | Men Key Bag Genuine Cow Leather Buckets Key Cases Pouch Zipper Keychain Auto Car Key Case Women Home Key Holder Wallet | Sac à clés pour hommes en cuir de vache véritable, étuis à clés, pochette à fermeture éclair, porte-clés, étui à clé de voiture, porte-clés pour femmes, organisateur de portefeuille | Porte-clés sac en cuir de vache véritable, étuis à clés en forme de seau, pochette à fermeture éclair, porte-clés auto pour voiture, étui à clés pour femmes, organisateur de clés de maison, portefeuille. | Hommes porte-clés en cuir de vache véritable sac/pochette fermature éclair porte-clés Auto voiture porte-clés femmes maison porte-clés organisateur portefeuille | Clearer and more precise product subject expression. The translation correctly identifies "key bag" rather than "keychain", avoiding ambiguity about the product type |
     *
     * @param tmpReq - PrepaidTextTranslateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PrepaidTextTranslateResponse
     *
     * @param PrepaidTextTranslateRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return PrepaidTextTranslateResponse
     */
    public function prepaidTextTranslateWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new PrepaidTextTranslateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->sourceTextList) {
            $request->sourceTextListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sourceTextList, 'SourceTextList', 'json');
        }

        $body = [];
        if (null !== $request->bizName) {
            @$body['BizName'] = $request->bizName;
        }

        if (null !== $request->formatType) {
            @$body['FormatType'] = $request->formatType;
        }

        if (null !== $request->glossary) {
            @$body['Glossary'] = $request->glossary;
        }

        if (null !== $request->sourceLanguage) {
            @$body['SourceLanguage'] = $request->sourceLanguage;
        }

        if (null !== $request->sourceTextListShrink) {
            @$body['SourceTextList'] = $request->sourceTextListShrink;
        }

        if (null !== $request->targetLanguage) {
            @$body['TargetLanguage'] = $request->targetLanguage;
        }

        if (null !== $request->translateScene) {
            @$body['TranslateScene'] = $request->translateScene;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PrepaidTextTranslate',
            'version' => '2026-04-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PrepaidTextTranslateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Marco MT is an e-commerce translation model trained on over 1 billion high-quality bilingual sentence pairs, continuously optimized for e-commerce-specific terminology such as brands, models, materials, and attributes. It supports translation between more than 100 language pairs (including bridged translations), especially Chinese-English, Chinese-multilingual, and English-multilingual translations. It supports language detection for 24 language directions. If you do not specify the source language, automatic detection is performed.
     *
     * @remarks
     * ## Product Introduction
     * Marco MT is an e-commerce translation model trained on over 1 billion\\+ high-quality bilingual sentence pairs, continuously optimized for e-commerce-specific terminology such as brands, models, materials, and attributes. It supports translation between more than 100 language pairs (including bridged translations), especially Chinese-English, Chinese-multilingual, and English-multilingual translations. It supports language detection for 24 language directions. If you do not specify the source language, automatic detection is performed.
     * ## Common scenarios
     * - Product titles: Marco MT large model translation accurately translates phrases, keywords, and trending words in product titles into the target language, improving product visibility on e-commerce platforms.
     * - Product descriptions: Product descriptions are typically long with diverse and complex formatting. Marco large model translation supports long text translation and HTML format, delivering excellent translation quality and format preservation.
     * - Product attributes: Product attribute terms are short and may contain e-commerce-specific terms such as model numbers and parameters.
     * - Customer service conversations: In customer service scenarios, the model optimizes issues such as missing context and typos, and supports polite expressions for certain language directions.
     * Marco MT large model translation can also be used for general-purpose translation scenarios such as office work, meetings, and daily conversations.
     * ## Features
     * - **Supported language directions** Marco MT large model translation supports translation between more than 100 languages and language detection for 23 languages. For specific language directions, refer to the language mapping table in Section 5.6.
     * - **Ultra-low hallucination rate and high-speed inference** Marco MT large model translation is a large language model with preference alignment for translation scenarios. Compared with general-purpose large language models, it offers faster translation inference speed and an extremely low hallucination rate, making it especially suitable for large-scale invocation scenarios.
     * - **Supported text format types** Currently supports text and html text types.
     * - **Translation intervention support** Supports custom translation results, including do-not-translate (ABC-ABC), specified translation (ABC-DEF), and no translation (ABC-empty value). This is commonly used for brand name protection scenarios. Simply pass the corresponding intervention glossary ID when calling the API to meet your translation needs across different scenarios. You can upload up to 100,000 intervention terms. If you need more, contact the platform for assistance.
     * ## Translation quality comparison
     * | **Source text** | **Aidge translation** | **Other translation product 1** | **Other translation product 2** | **Aidge translation advantage** |
     * |----------|---------------|-----------------------|-----------------------|---------------------|
     * | 75mm 4Pin 0.38A GA81S2U 12V GTX 960 Cooling Fan for Zotac GTX960 Graphics Card Cooling Fan | 75mm 4Pin 0.38A GA81S2U 12V GTX 960, ventilador de enfriamiento para tarjeta gráfica Zotac GTX960. | Ventilador de refrigeración de 75mm 4Pin 0.38A GA81S2U 12V para la tarjeta gráfica Zotac GTX960 Ventilador de enfriamiento GTX 960. | Ventilador de refrigeración para tarjeta gráfica Zotac GTX960, 75mm, 4 pines, 0,38A, GA81S2U, 12V, GTX 960 | Clearer product subject |
     * | New Arrival Classic Style Luxury Brand 6 Hands Swiss Automatic Mechanical Men\\"s Business Steel Watch | Nueva llegada, reloj mecánico automático de lujo con 6 manecillas, estilo clásico, de acero para hombres de negocios | Nueva Llegada Reloj De Acero de Negocios para Hombre con Mecanismo Automático Suizo y 6 Agujas de Estilo Clásico de Marca de Lujo. | Reloj de acero de negocios para hombre, mecánico automático suizo, marca de lujo, estilo clásico, 6 manos, nueva llegada | More complete sentence structure, clearer expression, and more reasonable segmentation |
     * | Men Key Bag Genuine Cow Leather Buckets Key Cases Pouch Zipper Keychain Auto Car Key Case Women Home Key Holder Wallet | Sac à clés pour hommes en cuir de vache véritable, étuis à clés, pochette à fermeture éclair, porte-clés, étui à clé de voiture, porte-clés pour femmes, organisateur de portefeuille | Porte-clés sac en cuir de vache véritable, étuis à clés en forme de seau, pochette à fermeture éclair, porte-clés auto pour voiture, étui à clés pour femmes, organisateur de clés de maison, portefeuille. | Hommes porte-clés en cuir de vache véritable sac/pochette fermature éclair porte-clés Auto voiture porte-clés femmes maison porte-clés organisateur portefeuille | Clearer and more precise product subject expression. The translation correctly identifies "key bag" rather than "keychain", avoiding ambiguity about the product type |
     *
     * @param request - PrepaidTextTranslateRequest
     *
     * @returns PrepaidTextTranslateResponse
     *
     * @param PrepaidTextTranslateRequest $request
     *
     * @return PrepaidTextTranslateResponse
     */
    public function prepaidTextTranslate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->prepaidTextTranslateWithOptions($request, $runtime);
    }

    /**
     * Automatically identifies and locates specified products in an image based on a multimodal foundation model.
     *
     * @remarks
     * ## Request description
     * **Before using this operation, make sure that you fully understand the billing method and [pricing](https://www.aliyun.com/price/product#/ecs/detail) of the product hotzone recognition service.**
     * This API automatically identifies and locates specified products in a target scene image based on the provided target scene image and product reference images, and outputs the product name and normalized bounding box. Each request takes one target scene image and a set of product reference images. If the same case has multiple target images, call the operation separately for each target image.
     * ### Precautions
     * - Image URLs must use HTTPS and be accessible by the server.
     * - Common image formats such as JPEG, PNG, and WebP are supported.
     * - Each image should not exceed 2 MB.
     * - When using signed URLs, set the validity period to at least 30 minutes.
     * - If the same case has multiple target scene images, call the operation separately for each target image. The reference image list can be reused.
     *
     * @param tmpReq - ProductHotspotDetectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ProductHotspotDetectionResponse
     *
     * @param ProductHotspotDetectionRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return ProductHotspotDetectionResponse
     */
    public function productHotspotDetectionWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ProductHotspotDetectionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->referenceImageUrls) {
            $request->referenceImageUrlsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->referenceImageUrls, 'ReferenceImageUrls', 'json');
        }

        $query = [];
        if (null !== $request->referenceImageUrlsShrink) {
            @$query['ReferenceImageUrls'] = $request->referenceImageUrlsShrink;
        }

        if (null !== $request->reqId) {
            @$query['ReqId'] = $request->reqId;
        }

        if (null !== $request->targetImageUrl) {
            @$query['TargetImageUrl'] = $request->targetImageUrl;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ProductHotspotDetection',
            'version' => '2026-04-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ProductHotspotDetectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Automatically identifies and locates specified products in an image based on a multimodal foundation model.
     *
     * @remarks
     * ## Request description
     * **Before using this operation, make sure that you fully understand the billing method and [pricing](https://www.aliyun.com/price/product#/ecs/detail) of the product hotzone recognition service.**
     * This API automatically identifies and locates specified products in a target scene image based on the provided target scene image and product reference images, and outputs the product name and normalized bounding box. Each request takes one target scene image and a set of product reference images. If the same case has multiple target images, call the operation separately for each target image.
     * ### Precautions
     * - Image URLs must use HTTPS and be accessible by the server.
     * - Common image formats such as JPEG, PNG, and WebP are supported.
     * - Each image should not exceed 2 MB.
     * - When using signed URLs, set the validity period to at least 30 minutes.
     * - If the same case has multiple target scene images, call the operation separately for each target image. The reference image list can be reused.
     *
     * @param request - ProductHotspotDetectionRequest
     *
     * @returns ProductHotspotDetectionResponse
     *
     * @param ProductHotspotDetectionRequest $request
     *
     * @return ProductHotspotDetectionResponse
     */
    public function productHotspotDetection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->productHotspotDetectionWithOptions($request, $runtime);
    }

    /**
     * Queries the result of an asynchronous task. The API name on the POP gateway is QueryAsyncTaskResult.
     *
     * @remarks
     * The API name on the POP gateway is QueryAsyncTaskResult.
     *
     * @param request - QueryAsyncTaskResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryAsyncTaskResultResponse
     *
     * @param QueryAsyncTaskResultRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryAsyncTaskResultResponse
     */
    public function queryAsyncTaskResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryAsyncTaskResult',
            'version' => '2026-04-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryAsyncTaskResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the result of an asynchronous task. The API name on the POP gateway is QueryAsyncTaskResult.
     *
     * @remarks
     * The API name on the POP gateway is QueryAsyncTaskResult.
     *
     * @param request - QueryAsyncTaskResultRequest
     *
     * @returns QueryAsyncTaskResultResponse
     *
     * @param QueryAsyncTaskResultRequest $request
     *
     * @return QueryAsyncTaskResultResponse
     */
    public function queryAsyncTaskResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAsyncTaskResultWithOptions($request, $runtime);
    }

    /**
     * Detects whether an image contains a size chart. (Synchronous).
     *
     * @remarks
     * # 1. Product Introduction
     * Detects whether an image contains a size chart. (Synchronous)
     * # 2. Common scenarios
     * **Batch processing scenario:** Detect images containing size charts from a batch of images for further image translation or extraction. The size chart detection service helps reduce costs.
     * # 3. Features
     * The size chart detection service uses image recognition technology to automatically determine whether an input image contains size chart content. You provide an image URL, and the system returns a detection result (True/False) indicating whether the image is a size chart.
     * You can customize the confidence threshold (default: 0.4) and flexibly adjust the detection sensitivity based on your business accuracy requirements. A lower threshold results in more lenient detection, while a higher threshold results in stricter detection. The API processes a single image per request and is suitable for integration into automated batch workflows for sequential invocation.
     * # 4. Effect comparison
     * | **Input image** | **Confidence** | **Output result** |
     * | --- | --- | --- |
     * | ![image.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/4jKqm0bAebrKLnw1/img/0a914347-2acb-4b94-bf07-86aab2b31279.png) | 0.4 | true |
     * | ![O1CN01ZjViRX1rdaL6QDFNo_!!6000000005654-0-tps-2048-2048.webp](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/4jKqm0bAebrKLnw1/img/ab29b032-139a-4b22-9371-b387581559b7.webp) | 0.4 | false |
     *
     * @param request - SizeChartDetectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SizeChartDetectResponse
     *
     * @param SizeChartDetectRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SizeChartDetectResponse
     */
    public function sizeChartDetectWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->imageUrl) {
            @$query['ImageUrl'] = $request->imageUrl;
        }

        if (null !== $request->threshold) {
            @$query['Threshold'] = $request->threshold;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SizeChartDetect',
            'version' => '2026-04-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SizeChartDetectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Detects whether an image contains a size chart. (Synchronous).
     *
     * @remarks
     * # 1. Product Introduction
     * Detects whether an image contains a size chart. (Synchronous)
     * # 2. Common scenarios
     * **Batch processing scenario:** Detect images containing size charts from a batch of images for further image translation or extraction. The size chart detection service helps reduce costs.
     * # 3. Features
     * The size chart detection service uses image recognition technology to automatically determine whether an input image contains size chart content. You provide an image URL, and the system returns a detection result (True/False) indicating whether the image is a size chart.
     * You can customize the confidence threshold (default: 0.4) and flexibly adjust the detection sensitivity based on your business accuracy requirements. A lower threshold results in more lenient detection, while a higher threshold results in stricter detection. The API processes a single image per request and is suitable for integration into automated batch workflows for sequential invocation.
     * # 4. Effect comparison
     * | **Input image** | **Confidence** | **Output result** |
     * | --- | --- | --- |
     * | ![image.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/4jKqm0bAebrKLnw1/img/0a914347-2acb-4b94-bf07-86aab2b31279.png) | 0.4 | true |
     * | ![O1CN01ZjViRX1rdaL6QDFNo_!!6000000005654-0-tps-2048-2048.webp](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/4jKqm0bAebrKLnw1/img/ab29b032-139a-4b22-9371-b387581559b7.webp) | 0.4 | false |
     *
     * @param request - SizeChartDetectRequest
     *
     * @returns SizeChartDetectResponse
     *
     * @param SizeChartDetectRequest $request
     *
     * @return SizeChartDetectResponse
     */
    public function sizeChartDetect($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sizeChartDetectWithOptions($request, $runtime);
    }

    /**
     * Intelligently extracts structured information such as size charts and package weight/dimensions from images using a multimodal foundation model. (Asynchronous).
     *
     * @remarks
     * ## Product Introduction
     * Intelligently extracts structured information such as size charts and package weight/dimensions from images using a multimodal foundation model. (Asynchronous)
     * ## Common scenarios
     * *   Size chart: Extracts size charts from apparel category images into text.
     *
     * *   Package weight/dimensions: Extracts package weight and dimension information from images.
     * ## Functions and features
     * The size chart extraction service is based on a multimodal foundation model that automatically identifies size tables or package weight/dimension information in images and converts them into structured text output. You provide an image URL, and the system processes it as an asynchronous task, returning the extracted structured data. You can specify column names to recognize (such as Size, Bust, Length) through ColumnNameList for precise targeted extraction. You can also control the output language through the LanguageModel parameter, with options for Chinese (cn) or English (en). If not specified, the original language is preserved. This service is suitable for scenarios such as converting apparel size tables to text and batch structuring of product package weight/dimension information.
     * Core capabilities: Input an image URL and optional column name configuration, and output structured data of size charts or package weight/dimensions from the image. The API uses an asynchronous task mode (background: true). After submission, a task ID is returned, and you need to poll for the final result. This is suitable for processing complex images or high-volume call scenarios.
     * ## Effect comparison
     * | **Input image** | **Output result** |
     * | --- | --- |
     * | ![image.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/4jKqm0bAebrKLnw1/img/0a914347-2acb-4b94-bf07-86aab2b31279.png) | {
     *           "SizeChart": [
     *             {
     *               "尺码": {
     *                 "value": "S"
     *               },
     *               "腰围": {
     *                 "unit": "CM",
     *                 "value": 58
     *               },
     *               "裙长": {
     *                 "unit": "CM",
     *                 "value": 81
     *               },
     *               "体重建议": {
     *                 "unit": "kg",
     *                 "lower_value": 40,
     *                 "upper_value": 47.5
     *               }
     *             },
     *             {
     *               "尺码": {
     *                 "value": "M"
     *               },
     *               "腰围": {
     *                 "unit": "CM",
     *                 "value": 59
     *               },
     *               "裙长": {
     *                 "unit": "CM",
     *                 "value": 82
     *               },
     *               "体重建议": {
     *                 "unit": "kg",
     *                 "lower_value": 45,
     *                 "upper_value": 52.5
     *               }
     *             },
     *             {
     *               "尺码": {
     *                 "value": "L"
     *               },
     *               "腰围": {
     *                 "unit": "CM",
     *                 "value": 60
     *               },
     *               "裙长": {
     *                 "unit": "CM",
     *                 "value": 83
     *               },
     *               "体重建议": {
     *                 "unit": "kg",
     *                 "lower_value": 50,
     *                 "upper_value": 57.5
     *               }
     *             },
     *             {
     *               "尺码": {
     *                 "value": "XL"
     *               },
     *               "腰围": {
     *                 "unit": "CM",
     *                 "value": 61
     *               },
     *               "裙长": {
     *                 "unit": "CM",
     *                 "value": 84
     *               },
     *               "体重建议": {
     *                 "unit": "kg",
     *                 "lower_value": 55,
     *                 "upper_value": 62.5
     *               }
     *             },
     *             {
     *               "尺码": {
     *                 "value": "2XL"
     *               },
     *               "腰围": {
     *                 "unit": "CM",
     *                 "value": 62
     *               },
     *               "裙长": {
     *                 "unit": "CM",
     *                 "value": 85
     *               },
     *               "体重建议": {
     *                 "unit": "kg",
     *                 "lower_value": 60,
     *                 "upper_value": 67.5
     *               }
     *             }
     *           \\],
     *           "SizeChartAttributes": [
     *             "尺码",
     *             "裙长",
     *             "腰围",
     *             "体重建议"
     *           \\],
     *           "IntersectionAttributes": [
     *             "尺码",
     *             "裙长",
     *             "腰围(拉伸)",
     *             "体重建议"
     *           \\]
     * } |
     *
     * @param tmpReq - SizeChartExtractRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SizeChartExtractResponse
     *
     * @param SizeChartExtractRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return SizeChartExtractResponse
     */
    public function sizeChartExtractWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SizeChartExtractShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->columnNameList) {
            $request->columnNameListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->columnNameList, 'ColumnNameList', 'json');
        }

        $query = [];
        if (null !== $request->columnNameListShrink) {
            @$query['ColumnNameList'] = $request->columnNameListShrink;
        }

        if (null !== $request->imageUrl) {
            @$query['ImageUrl'] = $request->imageUrl;
        }

        if (null !== $request->languageModel) {
            @$query['LanguageModel'] = $request->languageModel;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SizeChartExtract',
            'version' => '2026-04-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SizeChartExtractResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Intelligently extracts structured information such as size charts and package weight/dimensions from images using a multimodal foundation model. (Asynchronous).
     *
     * @remarks
     * ## Product Introduction
     * Intelligently extracts structured information such as size charts and package weight/dimensions from images using a multimodal foundation model. (Asynchronous)
     * ## Common scenarios
     * *   Size chart: Extracts size charts from apparel category images into text.
     *
     * *   Package weight/dimensions: Extracts package weight and dimension information from images.
     * ## Functions and features
     * The size chart extraction service is based on a multimodal foundation model that automatically identifies size tables or package weight/dimension information in images and converts them into structured text output. You provide an image URL, and the system processes it as an asynchronous task, returning the extracted structured data. You can specify column names to recognize (such as Size, Bust, Length) through ColumnNameList for precise targeted extraction. You can also control the output language through the LanguageModel parameter, with options for Chinese (cn) or English (en). If not specified, the original language is preserved. This service is suitable for scenarios such as converting apparel size tables to text and batch structuring of product package weight/dimension information.
     * Core capabilities: Input an image URL and optional column name configuration, and output structured data of size charts or package weight/dimensions from the image. The API uses an asynchronous task mode (background: true). After submission, a task ID is returned, and you need to poll for the final result. This is suitable for processing complex images or high-volume call scenarios.
     * ## Effect comparison
     * | **Input image** | **Output result** |
     * | --- | --- |
     * | ![image.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/4jKqm0bAebrKLnw1/img/0a914347-2acb-4b94-bf07-86aab2b31279.png) | {
     *           "SizeChart": [
     *             {
     *               "尺码": {
     *                 "value": "S"
     *               },
     *               "腰围": {
     *                 "unit": "CM",
     *                 "value": 58
     *               },
     *               "裙长": {
     *                 "unit": "CM",
     *                 "value": 81
     *               },
     *               "体重建议": {
     *                 "unit": "kg",
     *                 "lower_value": 40,
     *                 "upper_value": 47.5
     *               }
     *             },
     *             {
     *               "尺码": {
     *                 "value": "M"
     *               },
     *               "腰围": {
     *                 "unit": "CM",
     *                 "value": 59
     *               },
     *               "裙长": {
     *                 "unit": "CM",
     *                 "value": 82
     *               },
     *               "体重建议": {
     *                 "unit": "kg",
     *                 "lower_value": 45,
     *                 "upper_value": 52.5
     *               }
     *             },
     *             {
     *               "尺码": {
     *                 "value": "L"
     *               },
     *               "腰围": {
     *                 "unit": "CM",
     *                 "value": 60
     *               },
     *               "裙长": {
     *                 "unit": "CM",
     *                 "value": 83
     *               },
     *               "体重建议": {
     *                 "unit": "kg",
     *                 "lower_value": 50,
     *                 "upper_value": 57.5
     *               }
     *             },
     *             {
     *               "尺码": {
     *                 "value": "XL"
     *               },
     *               "腰围": {
     *                 "unit": "CM",
     *                 "value": 61
     *               },
     *               "裙长": {
     *                 "unit": "CM",
     *                 "value": 84
     *               },
     *               "体重建议": {
     *                 "unit": "kg",
     *                 "lower_value": 55,
     *                 "upper_value": 62.5
     *               }
     *             },
     *             {
     *               "尺码": {
     *                 "value": "2XL"
     *               },
     *               "腰围": {
     *                 "unit": "CM",
     *                 "value": 62
     *               },
     *               "裙长": {
     *                 "unit": "CM",
     *                 "value": 85
     *               },
     *               "体重建议": {
     *                 "unit": "kg",
     *                 "lower_value": 60,
     *                 "upper_value": 67.5
     *               }
     *             }
     *           \\],
     *           "SizeChartAttributes": [
     *             "尺码",
     *             "裙长",
     *             "腰围",
     *             "体重建议"
     *           \\],
     *           "IntersectionAttributes": [
     *             "尺码",
     *             "裙长",
     *             "腰围(拉伸)",
     *             "体重建议"
     *           \\]
     * } |
     *
     * @param request - SizeChartExtractRequest
     *
     * @returns SizeChartExtractResponse
     *
     * @param SizeChartExtractRequest $request
     *
     * @return SizeChartExtractResponse
     */
    public function sizeChartExtract($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sizeChartExtractWithOptions($request, $runtime);
    }

    /**
     * Corrects errors in search terms and titles.
     *
     * @remarks
     * ## Product Introduction
     * Corrects errors in search terms and titles. The following 14 languages are currently supported:
     * | No. | Language name (English) | Language code | Language name (Chinese) |
     * |------|------------------------|------------|------------------------|
     * | 1 | Arabic | ar | 阿拉伯语 |
     * | 2 | German | de | 德语 |
     * | 3 | English | en | 英语 |
     * | 4 | Spanish | es | 西班牙语 |
     * | 5 | French | fr | 法语 |
     * | 6 | Hebrew | he | 希伯来语 |
     * | 7 | Italian | it | 意大利语 |
     * | 8 | Japanese | ja | 日语 |
     * | 9 | Korean | ko | 韩语 |
     * | 10 | Dutch | nl | 荷兰语 |
     * | 11 | Polish | pl | 波兰语 |
     * | 12 | Portuguese | pt | 葡萄牙语-巴西 |
     * | 13 | Russian | ru | 俄语 |
     * | 14 | Ukrainian | uk | 乌克兰语 |
     *
     * @param request - TextCorrectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TextCorrectResponse
     *
     * @param TextCorrectRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return TextCorrectResponse
     */
    public function textCorrectWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->sourceLanguage) {
            @$query['SourceLanguage'] = $request->sourceLanguage;
        }

        if (null !== $request->sourceText) {
            @$query['SourceText'] = $request->sourceText;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TextCorrect',
            'version' => '2026-04-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TextCorrectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Corrects errors in search terms and titles.
     *
     * @remarks
     * ## Product Introduction
     * Corrects errors in search terms and titles. The following 14 languages are currently supported:
     * | No. | Language name (English) | Language code | Language name (Chinese) |
     * |------|------------------------|------------|------------------------|
     * | 1 | Arabic | ar | 阿拉伯语 |
     * | 2 | German | de | 德语 |
     * | 3 | English | en | 英语 |
     * | 4 | Spanish | es | 西班牙语 |
     * | 5 | French | fr | 法语 |
     * | 6 | Hebrew | he | 希伯来语 |
     * | 7 | Italian | it | 意大利语 |
     * | 8 | Japanese | ja | 日语 |
     * | 9 | Korean | ko | 韩语 |
     * | 10 | Dutch | nl | 荷兰语 |
     * | 11 | Polish | pl | 波兰语 |
     * | 12 | Portuguese | pt | 葡萄牙语-巴西 |
     * | 13 | Russian | ru | 俄语 |
     * | 14 | Ukrainian | uk | 乌克兰语 |
     *
     * @param request - TextCorrectRequest
     *
     * @returns TextCorrectResponse
     *
     * @param TextCorrectRequest $request
     *
     * @return TextCorrectResponse
     */
    public function textCorrect($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->textCorrectWithOptions($request, $runtime);
    }

    /**
     * Marco MT is an e-commerce translation model trained on over 1 billion high-quality bilingual sentence pairs, continuously optimized for e-commerce-specific terminology such as brands, models, materials, and attributes. It supports translation between more than 100 language pairs (including bridged translations), especially Chinese-English, Chinese-multilingual, and English-multilingual translations. It supports language detection for 24 languages. If you do not specify a source language, automatic detection is performed.
     *
     * @remarks
     * ## Product Introduction
     * Marco MT is an e-commerce translation model trained on over 1 billion high-quality bilingual sentence pairs, continuously optimized for e-commerce-specific terminology such as brands, models, materials, and attributes. It supports translation between more than 100 language pairs (including bridged translations), especially Chinese-English, Chinese-multilingual, and English-multilingual translations. It supports language detection for 24 languages. If you do not specify a source language, automatic detection is performed.
     * ## Common scenarios
     * - Product titles: Marco MT can accurately translate phrases, keywords, and trending terms in product titles into the target language, improving product visibility on e-commerce platforms.
     * - Product descriptions: Product descriptions are typically long with diverse and complex formatting. Marco MT supports long text translation and HTML format, delivering excellent translation quality and format preservation.
     * - Product attributes: Product attribute terms are short and may contain e-commerce-specific terms such as model numbers and parameters.
     * - Customer service conversations: In customer service scenarios, Marco MT can handle issues such as missing context and typos, and supports polite expressions for certain language pairs.
     * Marco MT can also be used for general translation scenarios such as office work, meetings, and daily conversations.
     * ## Features
     * - **Supported language pairs**
     * Marco MT supports translation between more than 100 languages and language detection for 24 languages. For supported language pairs, see [Language pair mapping table](https://www.alibabacloud.com/help/en/document_detail/3041883.html).
     * - **Ultra-low hallucination rate and high-speed inference**
     * Marco MT is a large language model with preference alignment for translation scenarios. Compared with general-purpose large language models, it offers faster translation inference speed and an extremely low hallucination rate, making it especially suitable for large-scale invocation scenarios.
     * - **Supported text format types**
     * Currently supports text and html format types.
     * - **Translation intervention**
     * Supports custom translation results, including do-not-translate (ABC→ABC), specified translation (ABC→DEF), and skip translation (ABC→empty value). This is commonly used for brand name protection scenarios. Simply pass the corresponding intervention glossary ID when calling the API to meet your translation needs across different scenarios. You can upload up to 100,000 intervention terms. Contact the platform for additional capacity.
     * ## Translation quality comparison
     * | **Source text** | **Aidge translation** | **Other translation product 1** | **Other translation product 2** | **Aidge translation advantage** |
     * |----------|---------------|-----------------------|-----------------------|---------------------|
     * | 75mm 4Pin 0.38A GA81S2U 12V GTX 960 Cooling Fan for Zotac GTX960 Graphics Card Cooling Fan | 75mm 4Pin 0.38A GA81S2U 12V GTX 960, ventilador de enfriamiento para tarjeta gráfica Zotac GTX960. | Ventilador de refrigeración de 75mm 4Pin 0.38A GA81S2U 12V para la tarjeta gráfica Zotac GTX960 Ventilador de enfriamiento GTX 960. | Ventilador de refrigeración para tarjeta gráfica Zotac GTX960, 75mm, 4 pines, 0,38A, GA81S2U, 12V, GTX 960 | Clearer product subject |
     * | New Arrival Classic Style Luxury Brand 6 Hands Swiss Automatic Mechanical Men\\"s Business Steel Watch | Nueva llegada, reloj mecánico automático de lujo con 6 manecillas, estilo clásico, de acero para hombres de negocios | Nueva Llegada Reloj De Acero de Negocios para Hombre con Mecanismo Automático Suizo y 6 Agujas de Estilo Clásico de Marca de Lujo. | Reloj de acero de negocios para hombre, mecánico automático suizo, marca de lujo, estilo clásico, 6 manos, nueva llegada | More complete sentence structure, clearer expression, and more reasonable segmentation |
     * | Men Key Bag Genuine Cow Leather Buckets Key Cases Pouch Zipper Keychain Auto Car Key Case Women Home Key Holder Wallet | Sac à clés pour hommes en cuir de vache véritable, étuis à clés, pochette à fermeture éclair, porte-clés, étui à clé de voiture, porte-clés pour femmes, organisateur de portefeuille | Porte-clés sac en cuir de vache véritable, étuis à clés en forme de seau, pochette à fermeture éclair, porte-clés auto pour voiture, étui à clés pour femmes, organisateur de clés de maison, portefeuille. | Hommes porte-clés en cuir de vache véritable sac/pochette fermature éclair porte-clés Auto voiture porte-clés femmes maison porte-clés organisateur portefeuille | Clearer product subject description — correctly identifies "key bag" rather than "keychain," avoiding ambiguity about the product |
     *
     * @param tmpReq - TextTranslateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TextTranslateResponse
     *
     * @param TextTranslateRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return TextTranslateResponse
     */
    public function textTranslateWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new TextTranslateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->sourceTextList) {
            $request->sourceTextListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sourceTextList, 'SourceTextList', 'json');
        }

        $body = [];
        if (null !== $request->bizName) {
            @$body['BizName'] = $request->bizName;
        }

        if (null !== $request->formatType) {
            @$body['FormatType'] = $request->formatType;
        }

        if (null !== $request->glossary) {
            @$body['Glossary'] = $request->glossary;
        }

        if (null !== $request->sourceLanguage) {
            @$body['SourceLanguage'] = $request->sourceLanguage;
        }

        if (null !== $request->sourceTextListShrink) {
            @$body['SourceTextList'] = $request->sourceTextListShrink;
        }

        if (null !== $request->targetLanguage) {
            @$body['TargetLanguage'] = $request->targetLanguage;
        }

        if (null !== $request->translateScene) {
            @$body['TranslateScene'] = $request->translateScene;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TextTranslate',
            'version' => '2026-04-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TextTranslateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Marco MT is an e-commerce translation model trained on over 1 billion high-quality bilingual sentence pairs, continuously optimized for e-commerce-specific terminology such as brands, models, materials, and attributes. It supports translation between more than 100 language pairs (including bridged translations), especially Chinese-English, Chinese-multilingual, and English-multilingual translations. It supports language detection for 24 languages. If you do not specify a source language, automatic detection is performed.
     *
     * @remarks
     * ## Product Introduction
     * Marco MT is an e-commerce translation model trained on over 1 billion high-quality bilingual sentence pairs, continuously optimized for e-commerce-specific terminology such as brands, models, materials, and attributes. It supports translation between more than 100 language pairs (including bridged translations), especially Chinese-English, Chinese-multilingual, and English-multilingual translations. It supports language detection for 24 languages. If you do not specify a source language, automatic detection is performed.
     * ## Common scenarios
     * - Product titles: Marco MT can accurately translate phrases, keywords, and trending terms in product titles into the target language, improving product visibility on e-commerce platforms.
     * - Product descriptions: Product descriptions are typically long with diverse and complex formatting. Marco MT supports long text translation and HTML format, delivering excellent translation quality and format preservation.
     * - Product attributes: Product attribute terms are short and may contain e-commerce-specific terms such as model numbers and parameters.
     * - Customer service conversations: In customer service scenarios, Marco MT can handle issues such as missing context and typos, and supports polite expressions for certain language pairs.
     * Marco MT can also be used for general translation scenarios such as office work, meetings, and daily conversations.
     * ## Features
     * - **Supported language pairs**
     * Marco MT supports translation between more than 100 languages and language detection for 24 languages. For supported language pairs, see [Language pair mapping table](https://www.alibabacloud.com/help/en/document_detail/3041883.html).
     * - **Ultra-low hallucination rate and high-speed inference**
     * Marco MT is a large language model with preference alignment for translation scenarios. Compared with general-purpose large language models, it offers faster translation inference speed and an extremely low hallucination rate, making it especially suitable for large-scale invocation scenarios.
     * - **Supported text format types**
     * Currently supports text and html format types.
     * - **Translation intervention**
     * Supports custom translation results, including do-not-translate (ABC→ABC), specified translation (ABC→DEF), and skip translation (ABC→empty value). This is commonly used for brand name protection scenarios. Simply pass the corresponding intervention glossary ID when calling the API to meet your translation needs across different scenarios. You can upload up to 100,000 intervention terms. Contact the platform for additional capacity.
     * ## Translation quality comparison
     * | **Source text** | **Aidge translation** | **Other translation product 1** | **Other translation product 2** | **Aidge translation advantage** |
     * |----------|---------------|-----------------------|-----------------------|---------------------|
     * | 75mm 4Pin 0.38A GA81S2U 12V GTX 960 Cooling Fan for Zotac GTX960 Graphics Card Cooling Fan | 75mm 4Pin 0.38A GA81S2U 12V GTX 960, ventilador de enfriamiento para tarjeta gráfica Zotac GTX960. | Ventilador de refrigeración de 75mm 4Pin 0.38A GA81S2U 12V para la tarjeta gráfica Zotac GTX960 Ventilador de enfriamiento GTX 960. | Ventilador de refrigeración para tarjeta gráfica Zotac GTX960, 75mm, 4 pines, 0,38A, GA81S2U, 12V, GTX 960 | Clearer product subject |
     * | New Arrival Classic Style Luxury Brand 6 Hands Swiss Automatic Mechanical Men\\"s Business Steel Watch | Nueva llegada, reloj mecánico automático de lujo con 6 manecillas, estilo clásico, de acero para hombres de negocios | Nueva Llegada Reloj De Acero de Negocios para Hombre con Mecanismo Automático Suizo y 6 Agujas de Estilo Clásico de Marca de Lujo. | Reloj de acero de negocios para hombre, mecánico automático suizo, marca de lujo, estilo clásico, 6 manos, nueva llegada | More complete sentence structure, clearer expression, and more reasonable segmentation |
     * | Men Key Bag Genuine Cow Leather Buckets Key Cases Pouch Zipper Keychain Auto Car Key Case Women Home Key Holder Wallet | Sac à clés pour hommes en cuir de vache véritable, étuis à clés, pochette à fermeture éclair, porte-clés, étui à clé de voiture, porte-clés pour femmes, organisateur de portefeuille | Porte-clés sac en cuir de vache véritable, étuis à clés en forme de seau, pochette à fermeture éclair, porte-clés auto pour voiture, étui à clés pour femmes, organisateur de clés de maison, portefeuille. | Hommes porte-clés en cuir de vache véritable sac/pochette fermature éclair porte-clés Auto voiture porte-clés femmes maison porte-clés organisateur portefeuille | Clearer product subject description — correctly identifies "key bag" rather than "keychain," avoiding ambiguity about the product |
     *
     * @param request - TextTranslateRequest
     *
     * @returns TextTranslateResponse
     *
     * @param TextTranslateRequest $request
     *
     * @return TextTranslateResponse
     */
    public function textTranslate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->textTranslateWithOptions($request, $runtime);
    }

    /**
     * Invokes the e-commerce AI video generation agent for e-commerce merchants and platforms. Based on product main images, titles, selling points, and other information, it automatically generates 5–30 second product showcase short videos, helping customers efficiently produce and distribute e-commerce content. The service supports multiple resolution outputs such as 720P and 1080P, single-product quick invocation and multi-product batch generation, catering to both daily operations and large-scale product content production needs. Currently overwrites all apparel categories (tops, pants, skirts, suits, underwear, swimwear, etc.), and is gradually expanding to skincare, cosmetics, food and beverages, home appliances, and other core e-commerce categories.
     *
     * @remarks
     * # Applicable scenarios
     * - Sellers/platforms batch-generate product short videos: Supports multiple video aspect ratios and sizes (3:4, 9:16), suitable for product detail page video slots, product homepage display, information feed placement, short video content marketing, campaign material, and other scenarios.
     * - New product launches with rapid initial video material generation: When merchants have a large number of new products to list, they only need to upload product images and titles to quickly generate product showcase videos, model try-on videos, voiceover explanation videos, and more, helping merchants rapidly complete material preparation during the launch phase.
     * - High-fidelity apparel display: Generates model showcase videos that closely resemble real commercial photography based on product main images, with optimized capabilities for silhouette accuracy, fabric texture preservation, color fidelity, and consistent detail stability. Supports common e-commerce display methods such as wearing, turning, walking, close-up shots, and multi-angle switching.
     * - High-quality commercial photography models: Includes 20+ built-in target audience model libraries covering plus-size women, plus-size men, swimwear, youthful style, smart casual commute, young casual, business menswear, sports and fitness, and other body types, skin tones, and ethnicities. Supports standing poses, side views, walking displays, partial close-ups, and other commercial photography expressions.
     * - Standard product explanation and other high-frequency e-commerce scenarios: Applicable to standardized product categories such as skincare, cosmetics, personal care small appliances, food and beverages, household cleaning products, and 3C digital products. Quickly generates product explanation videos based on product main images, titles, selling points, and explanation scripts.
     * - Multi-product, multi-selling-point testing to improve placement efficiency: For information feed advertising, short video placement, and content marketing scenarios, quickly generates multiple versions of video materials, enabling enterprises to validate conversion effects of different selling points and presentation formats at low cost, improving placement ROI.
     * # Features
     * - Fully automated end-to-end batch generation with zero prompt threshold: Callers only need to provide product image URLs and titles. The system automatically completes the entire process from product understanding, storyboard planning, to video generation without manual prompt writing, template selection, or repeated parameter tuning. Built-in multi-agent capabilities including product understanding, visual quality inspection, script planning, and cinematography direction significantly lower the usage barrier.
     * - Highly stable generation with low discard rate: Uses a deterministic generation pipeline and multi-layer quality control mechanism to output usable materials with fewer retries, reducing invalid generation and resource waste, making overall production costs more controllable.
     * - E-commerce-specific product fidelity capability: Built-in multi-round quality inspection agents lock product state throughout video generation (such as zippers not being unzipped, sleeves not being lowered, prints not disappearing), ensuring product consistency through multi-layer defense of "script rewriting + explicit constraint injection + failure-aware retry."
     * - Reference image priority + 6-axis consistency verification: Adopts a Reference-Image-First generation paradigm, using the original product image as the sole visual truth source, automatically performing 6-dimensional VL diagnostics (color drift, pattern loss, contour deviation, structural addition/removal, model matching, stain detection), fundamentally eliminating the problem of generated images not resembling the product.
     * - Flexible storyboard arrangement and duration control: Supports adjustable video duration of 5–30 seconds. The agent autonomously plans independent storyboards to showcase product effects in different scenarios. Also supports fixed scene mode for in-depth product presentation under a unified visual style.
     * - Cinematic camera movement capabilities: Built-in advanced camera modes including bullet time, Grammy slow motion, 360° orbital rotation, and full-body model rotation display, achieving deterministic output through segmented precise control.
     * - Model library and customization services: Built-in multi-type model resource library, supporting merchants in specifying fixed models, customizing exclusive model personas, and long-term brand visual identity binding to ensure brand visual consistency.
     * - Adapted to high-frequency e-commerce content scenarios: Supports multiple resolutions such as 720P and 1080P, and multiple aspect ratios such as 3:4 and 9:16, suitable for product detail page video slots, product homepage video display, waterfall/information feed placement, campaign materials, and new product and promotional video generation.
     *
     * @param tmpReq - VideoGenerationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns VideoGenerationResponse
     *
     * @param VideoGenerationRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return VideoGenerationResponse
     */
    public function videoGenerationWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new VideoGenerationShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->input) {
            $request->inputShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->input, 'Input', 'json');
        }

        if (null !== $tmpReq->intent) {
            $request->intentShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->intent, 'Intent', 'json');
        }

        if (null !== $tmpReq->output) {
            $request->outputShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->output, 'Output', 'json');
        }

        $query = [];
        if (null !== $request->inputShrink) {
            @$query['Input'] = $request->inputShrink;
        }

        if (null !== $request->intentShrink) {
            @$query['Intent'] = $request->intentShrink;
        }

        if (null !== $request->outputShrink) {
            @$query['Output'] = $request->outputShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'VideoGeneration',
            'version' => '2026-04-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return VideoGenerationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invokes the e-commerce AI video generation agent for e-commerce merchants and platforms. Based on product main images, titles, selling points, and other information, it automatically generates 5–30 second product showcase short videos, helping customers efficiently produce and distribute e-commerce content. The service supports multiple resolution outputs such as 720P and 1080P, single-product quick invocation and multi-product batch generation, catering to both daily operations and large-scale product content production needs. Currently overwrites all apparel categories (tops, pants, skirts, suits, underwear, swimwear, etc.), and is gradually expanding to skincare, cosmetics, food and beverages, home appliances, and other core e-commerce categories.
     *
     * @remarks
     * # Applicable scenarios
     * - Sellers/platforms batch-generate product short videos: Supports multiple video aspect ratios and sizes (3:4, 9:16), suitable for product detail page video slots, product homepage display, information feed placement, short video content marketing, campaign material, and other scenarios.
     * - New product launches with rapid initial video material generation: When merchants have a large number of new products to list, they only need to upload product images and titles to quickly generate product showcase videos, model try-on videos, voiceover explanation videos, and more, helping merchants rapidly complete material preparation during the launch phase.
     * - High-fidelity apparel display: Generates model showcase videos that closely resemble real commercial photography based on product main images, with optimized capabilities for silhouette accuracy, fabric texture preservation, color fidelity, and consistent detail stability. Supports common e-commerce display methods such as wearing, turning, walking, close-up shots, and multi-angle switching.
     * - High-quality commercial photography models: Includes 20+ built-in target audience model libraries covering plus-size women, plus-size men, swimwear, youthful style, smart casual commute, young casual, business menswear, sports and fitness, and other body types, skin tones, and ethnicities. Supports standing poses, side views, walking displays, partial close-ups, and other commercial photography expressions.
     * - Standard product explanation and other high-frequency e-commerce scenarios: Applicable to standardized product categories such as skincare, cosmetics, personal care small appliances, food and beverages, household cleaning products, and 3C digital products. Quickly generates product explanation videos based on product main images, titles, selling points, and explanation scripts.
     * - Multi-product, multi-selling-point testing to improve placement efficiency: For information feed advertising, short video placement, and content marketing scenarios, quickly generates multiple versions of video materials, enabling enterprises to validate conversion effects of different selling points and presentation formats at low cost, improving placement ROI.
     * # Features
     * - Fully automated end-to-end batch generation with zero prompt threshold: Callers only need to provide product image URLs and titles. The system automatically completes the entire process from product understanding, storyboard planning, to video generation without manual prompt writing, template selection, or repeated parameter tuning. Built-in multi-agent capabilities including product understanding, visual quality inspection, script planning, and cinematography direction significantly lower the usage barrier.
     * - Highly stable generation with low discard rate: Uses a deterministic generation pipeline and multi-layer quality control mechanism to output usable materials with fewer retries, reducing invalid generation and resource waste, making overall production costs more controllable.
     * - E-commerce-specific product fidelity capability: Built-in multi-round quality inspection agents lock product state throughout video generation (such as zippers not being unzipped, sleeves not being lowered, prints not disappearing), ensuring product consistency through multi-layer defense of "script rewriting + explicit constraint injection + failure-aware retry."
     * - Reference image priority + 6-axis consistency verification: Adopts a Reference-Image-First generation paradigm, using the original product image as the sole visual truth source, automatically performing 6-dimensional VL diagnostics (color drift, pattern loss, contour deviation, structural addition/removal, model matching, stain detection), fundamentally eliminating the problem of generated images not resembling the product.
     * - Flexible storyboard arrangement and duration control: Supports adjustable video duration of 5–30 seconds. The agent autonomously plans independent storyboards to showcase product effects in different scenarios. Also supports fixed scene mode for in-depth product presentation under a unified visual style.
     * - Cinematic camera movement capabilities: Built-in advanced camera modes including bullet time, Grammy slow motion, 360° orbital rotation, and full-body model rotation display, achieving deterministic output through segmented precise control.
     * - Model library and customization services: Built-in multi-type model resource library, supporting merchants in specifying fixed models, customizing exclusive model personas, and long-term brand visual identity binding to ensure brand visual consistency.
     * - Adapted to high-frequency e-commerce content scenarios: Supports multiple resolutions such as 720P and 1080P, and multiple aspect ratios such as 3:4 and 9:16, suitable for product detail page video slots, product homepage video display, waterfall/information feed placement, campaign materials, and new product and promotional video generation.
     *
     * @param request - VideoGenerationRequest
     *
     * @returns VideoGenerationResponse
     *
     * @param VideoGenerationRequest $request
     *
     * @return VideoGenerationResponse
     */
    public function videoGeneration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->videoGenerationWithOptions($request, $runtime);
    }

    /**
     * Translates embedded text (subtitles, promotional text, etc.) in video frames into a target language and erases the original text.
     *
     * @remarks
     * ## 1. Product Introduction
     * The Video Translation API translates embedded text (subtitles, promotional text, etc.) in video frames into a target language and erases the original text. This API is applicable to scenarios such as multilingual distribution of e-commerce videos, international social media marketing, and global brand advertising.
     * The API uses an asynchronous call mode: after submitting a translation task, you receive a `task_id`, then poll the query endpoint for the task status until the task is completed and results are available.
     * ## 2. Common scenarios
     * *   **Cross-border e-commerce video localization**: Translates promotional text in product introduction videos into the target market language to facilitate overseas platform promotion.
     *
     * *   **International social media marketing**: Localizes text content in video frames with one click for platforms such as TikTok, Instagram, and YouTube, improving comprehension and conversion rates among overseas users.
     *
     * *   **Global brand advertising**: Automatically generates video versions in the language of the target region, reducing manual production costs.
     *
     * *   **Training and product documentation**: Translates on-screen text in training courses or product demonstration videos into multiple languages for use by global teams.
     * ## 3. Features
     * | Capability | Identifier | Description |
     * | --- | --- | --- |
     * | Visual translation | `visual` | Translates embedded text (subtitles, promotional text, etc.) in video frames into the target language and erases the original text |
     * ## 4. Developer guide.
     * ### 4.1 Submit a translation task.
     * #### Request
     * `POST /api/v1/video/translation`
     *
     * @param tmpReq - VideoTranslationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns VideoTranslationResponse
     *
     * @param VideoTranslationRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return VideoTranslationResponse
     */
    public function videoTranslationWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new VideoTranslationShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->capabilities) {
            $request->capabilitiesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->capabilities, 'Capabilities', 'json');
        }

        $body = [];
        if (null !== $request->capabilitiesShrink) {
            @$body['Capabilities'] = $request->capabilitiesShrink;
        }

        if (null !== $request->sourceLanguage) {
            @$body['SourceLanguage'] = $request->sourceLanguage;
        }

        if (null !== $request->targetLanguage) {
            @$body['TargetLanguage'] = $request->targetLanguage;
        }

        if (null !== $request->videoUrl) {
            @$body['VideoUrl'] = $request->videoUrl;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'VideoTranslation',
            'version' => '2026-04-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return VideoTranslationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Translates embedded text (subtitles, promotional text, etc.) in video frames into a target language and erases the original text.
     *
     * @remarks
     * ## 1. Product Introduction
     * The Video Translation API translates embedded text (subtitles, promotional text, etc.) in video frames into a target language and erases the original text. This API is applicable to scenarios such as multilingual distribution of e-commerce videos, international social media marketing, and global brand advertising.
     * The API uses an asynchronous call mode: after submitting a translation task, you receive a `task_id`, then poll the query endpoint for the task status until the task is completed and results are available.
     * ## 2. Common scenarios
     * *   **Cross-border e-commerce video localization**: Translates promotional text in product introduction videos into the target market language to facilitate overseas platform promotion.
     *
     * *   **International social media marketing**: Localizes text content in video frames with one click for platforms such as TikTok, Instagram, and YouTube, improving comprehension and conversion rates among overseas users.
     *
     * *   **Global brand advertising**: Automatically generates video versions in the language of the target region, reducing manual production costs.
     *
     * *   **Training and product documentation**: Translates on-screen text in training courses or product demonstration videos into multiple languages for use by global teams.
     * ## 3. Features
     * | Capability | Identifier | Description |
     * | --- | --- | --- |
     * | Visual translation | `visual` | Translates embedded text (subtitles, promotional text, etc.) in video frames into the target language and erases the original text |
     * ## 4. Developer guide.
     * ### 4.1 Submit a translation task.
     * #### Request
     * `POST /api/v1/video/translation`
     *
     * @param request - VideoTranslationRequest
     *
     * @returns VideoTranslationResponse
     *
     * @param VideoTranslationRequest $request
     *
     * @return VideoTranslationResponse
     */
    public function videoTranslation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->videoTranslationWithOptions($request, $runtime);
    }

    /**
     * Provides a one-stop AI-powered image processing service for e-commerce sellers. Orchestrates seven atomic capabilities — element detection, intelligent matting, intelligent removal, Image Translation Pro, image expansion, intelligent cropping, and HD upscaling — into an image processing workflow. Users upload an image once, select the desired capabilities, and complete multiple image optimizations sequentially in a single call to produce product images that meet listing platform requirements. (Asynchronous).
     *
     * @remarks
     * # 1. Product Introduction
     * A one-stop AI-powered image processing service for e-commerce sellers. Orchestrates seven atomic capabilities — element detection, intelligent matting, intelligent removal, Image Translation Pro, image expansion, intelligent cropping, and HD upscaling — into an image processing workflow. Users upload an image once, select the desired capabilities, and complete multiple image optimizations sequentially in a single call to produce product images that meet listing platform requirements. (Asynchronous)
     * # 2. Applicable scenarios
     * Applicable to batch optimization of product images in cross-platform listing scenarios. Adapts source product images into main images, SKU images, and detail images required by listing platforms. Supported capabilities include:
     * *   Detecting low-quality images that contain text, watermarks, logos, or ad patches, allowing users to filter images that need processing
     *
     * *   Removing non-compliant elements such as watermarks, logos, ad patches, and Chinese text from original images
     *
     * *   Removing the background around the product subject edges
     *
     * *   Translating text within images into other languages
     *
     * *   Expanding images to other dimensions (by ratio, size, etc.) with automatic background fill
     *
     * *   Cropping images to specified dimensions
     *
     * *   Upscaling image pixels by a specified factor
     * # 3. Feature overview
     * Users provide a product image URL and select the desired AI capability combination through the Ability parameter (1=Intelligent Element Detection, 2=Intelligent Matting, 3=Intelligent Removal, 4=Image Translation Pro, 5=Image Expansion, 6=Intelligent Cropping, 7=HD Upscaling). The system executes the selected capabilities sequentially in a preset order. Because Intelligent Element Detection helps users determine whether an image contains certain specified elements, and the presence of elements affects subsequent AI capability selection, an additional input is provided that allows users to choose whether to filter images out of or retain images in the subsequent AI processing pipeline.
     * ![ai-pipeline-flowchart.svg](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/NpQlK5jRe9w5jqDv/img/bddb522a-0795-4b5c-b25d-10e933426367.svg)
     * Each AI capability is described as follows:
     * 1.  **Intelligent Element Detection:** An element detection capability designed specifically for e-commerce images. Detects text, logos, watermarks, and text-bearing color blocks in both the image subject and background, and returns Boolean detection results. Supports filtering images based on detection results (for example, processing only images with watermarks). Works in conjunction with subsequent capabilities — first identifies the types of elements that need optimization, then precisely executes removal and other operations.
     *
     * 2.  **Intelligent Matting:** Automatically identifies the product subject in an image and precisely separates it from the background. Based on deep learning models, supports accurate segmentation of complex edges such as hair strands and transparent objects. Outputs images with transparent or white backgrounds, supports custom background colors and target size cropping, and directly generates product display images that comply with e-commerce platform specifications.
     *
     * 3.  **Intelligent Removal:** Automatically identifies and removes non-compliant elements from e-commerce images, including text, specific names (brand/store names), transparent text blocks, and ad patches. Supports specifying removal of elements in the subject area or non-subject area separately, and also supports precise removal area specification through the Mask parameter for efficient batch compliance cleanup.
     *
     * 4.  **Image Translation Pro:** Leverages multimodal large model technology to translate text in images into the target language and render it directly at the corresponding position in the original image. Supports over 100 language pairs. Provides product subject text protection, brand name protection, and translation intervention glossaries to prevent mistranslation of embedded product information. After translation, returns layout information such as text position, font, and color to support secondary editing.
     *
     * 5.  **Intelligent Image Expansion:** Expands the image canvas using AI generation technology to broaden the image field of view without cropping the subject. Supports multiple expansion methods: by aspect ratio (1:1, 3:4, 4:3, 9:16, 16:9), by horizontal/vertical scaling ratio (1.0–3.0×), and by pixel offset in up/down/left/right directions. AI automatically fills in naturally transitioning background content.
     *
     * 6.  **Intelligent Cropping:** Intelligently crops images to specified dimensions, automatically identifies the image subject area, and precisely preserves core content. Supports custom output width and height (100–5000 pixels) to meet the image dimension requirements of different e-commerce platforms and ad placements, ensuring the subject remains prominent and the composition stays balanced after cropping.
     *
     * 7.  **HD Upscaling:** Enhances details and reduces noise while upscaling images, supporting 2–4× magnification. Suitable for improving the clarity of low-resolution product images and optimizing visual presentation. Supports output in PNG, JPG, BMP, and other formats.
     * # 4. Before and after comparison
     * | **Original image** | **Capabilities used** | **Output image** |
     * | --- | --- | --- |
     * | ![image.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/NpQlK5jRe9w5jqDv/img/3c1af966-8a5a-491d-9bfa-aefc321c9bed.png) | *   Intelligent detection
     *
     * *   Image Translation Pro
     *
     * *   Intelligent cropping | ![R1.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/NpQlK5jRe9w5jqDv/img/c2579e3e-389e-4717-84e3-834e60fea6b0.png) |
     * | ![image.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/NpQlK5jRe9w5jqDv/img/a92d14a9-ecf4-4e77-ad96-a2fcdd95dd1d.png) | *   Intelligent matting
     *
     * *   Intelligent removal
     *
     * *   Intelligent cropping | ![R1.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/NpQlK5jRe9w5jqDv/img/f631f578-3496-4aa1-b5ef-cd1ea603e049.png) |
     * | ![C2.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/NpQlK5jRe9w5jqDv/img/12965cf8-cfdf-4a85-95fe-fdfcefcaa4ae.png) | *   Intelligent detection
     *
     * *   Intelligent removal
     *
     * *   HD upscaling | ![R2.jpeg](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/NpQlK5jRe9w5jqDv/img/95d29e79-8622-45fb-b284-cd580fe40ea0.jpeg) |
     *
     * @param tmpReq - VisionFlowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns VisionFlowResponse
     *
     * @param VisionFlowRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return VisionFlowResponse
     */
    public function visionFlowWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new VisionFlowShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ability) {
            $request->abilityShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ability, 'Ability', 'json');
        }

        if (null !== $tmpReq->nonobjectDetectElements) {
            $request->nonobjectDetectElementsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->nonobjectDetectElements, 'NonobjectDetectElements', 'json');
        }

        if (null !== $tmpReq->nonobjectRemoveElements) {
            $request->nonobjectRemoveElementsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->nonobjectRemoveElements, 'NonobjectRemoveElements', 'json');
        }

        if (null !== $tmpReq->objectDetectElements) {
            $request->objectDetectElementsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->objectDetectElements, 'ObjectDetectElements', 'json');
        }

        if (null !== $tmpReq->objectRemoveElements) {
            $request->objectRemoveElementsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->objectRemoveElements, 'ObjectRemoveElements', 'json');
        }

        $query = [];
        if (null !== $request->abilityShrink) {
            @$query['Ability'] = $request->abilityShrink;
        }

        if (null !== $request->backGroundType) {
            @$query['BackGroundType'] = $request->backGroundType;
        }

        if (null !== $request->glossary) {
            @$query['Glossary'] = $request->glossary;
        }

        if (null !== $request->imageUrl) {
            @$query['ImageUrl'] = $request->imageUrl;
        }

        if (null !== $request->includingProductArea) {
            @$query['IncludingProductArea'] = $request->includingProductArea;
        }

        if (null !== $request->isFilter) {
            @$query['IsFilter'] = $request->isFilter;
        }

        if (null !== $request->mask) {
            @$query['Mask'] = $request->mask;
        }

        if (null !== $request->nonobjectDetectElementsShrink) {
            @$query['NonobjectDetectElements'] = $request->nonobjectDetectElementsShrink;
        }

        if (null !== $request->nonobjectRemoveElementsShrink) {
            @$query['NonobjectRemoveElements'] = $request->nonobjectRemoveElementsShrink;
        }

        if (null !== $request->objectDetectElementsShrink) {
            @$query['ObjectDetectElements'] = $request->objectDetectElementsShrink;
        }

        if (null !== $request->objectRemoveElementsShrink) {
            @$query['ObjectRemoveElements'] = $request->objectRemoveElementsShrink;
        }

        if (null !== $request->sourceLanguage) {
            @$query['SourceLanguage'] = $request->sourceLanguage;
        }

        if (null !== $request->targetHeight) {
            @$query['TargetHeight'] = $request->targetHeight;
        }

        if (null !== $request->targetLanguage) {
            @$query['TargetLanguage'] = $request->targetLanguage;
        }

        if (null !== $request->targetWidth) {
            @$query['TargetWidth'] = $request->targetWidth;
        }

        if (null !== $request->translatingBrandInTheProduct) {
            @$query['TranslatingBrandInTheProduct'] = $request->translatingBrandInTheProduct;
        }

        if (null !== $request->upscaleFactor) {
            @$query['UpscaleFactor'] = $request->upscaleFactor;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'VisionFlow',
            'version' => '2026-04-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return VisionFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Provides a one-stop AI-powered image processing service for e-commerce sellers. Orchestrates seven atomic capabilities — element detection, intelligent matting, intelligent removal, Image Translation Pro, image expansion, intelligent cropping, and HD upscaling — into an image processing workflow. Users upload an image once, select the desired capabilities, and complete multiple image optimizations sequentially in a single call to produce product images that meet listing platform requirements. (Asynchronous).
     *
     * @remarks
     * # 1. Product Introduction
     * A one-stop AI-powered image processing service for e-commerce sellers. Orchestrates seven atomic capabilities — element detection, intelligent matting, intelligent removal, Image Translation Pro, image expansion, intelligent cropping, and HD upscaling — into an image processing workflow. Users upload an image once, select the desired capabilities, and complete multiple image optimizations sequentially in a single call to produce product images that meet listing platform requirements. (Asynchronous)
     * # 2. Applicable scenarios
     * Applicable to batch optimization of product images in cross-platform listing scenarios. Adapts source product images into main images, SKU images, and detail images required by listing platforms. Supported capabilities include:
     * *   Detecting low-quality images that contain text, watermarks, logos, or ad patches, allowing users to filter images that need processing
     *
     * *   Removing non-compliant elements such as watermarks, logos, ad patches, and Chinese text from original images
     *
     * *   Removing the background around the product subject edges
     *
     * *   Translating text within images into other languages
     *
     * *   Expanding images to other dimensions (by ratio, size, etc.) with automatic background fill
     *
     * *   Cropping images to specified dimensions
     *
     * *   Upscaling image pixels by a specified factor
     * # 3. Feature overview
     * Users provide a product image URL and select the desired AI capability combination through the Ability parameter (1=Intelligent Element Detection, 2=Intelligent Matting, 3=Intelligent Removal, 4=Image Translation Pro, 5=Image Expansion, 6=Intelligent Cropping, 7=HD Upscaling). The system executes the selected capabilities sequentially in a preset order. Because Intelligent Element Detection helps users determine whether an image contains certain specified elements, and the presence of elements affects subsequent AI capability selection, an additional input is provided that allows users to choose whether to filter images out of or retain images in the subsequent AI processing pipeline.
     * ![ai-pipeline-flowchart.svg](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/NpQlK5jRe9w5jqDv/img/bddb522a-0795-4b5c-b25d-10e933426367.svg)
     * Each AI capability is described as follows:
     * 1.  **Intelligent Element Detection:** An element detection capability designed specifically for e-commerce images. Detects text, logos, watermarks, and text-bearing color blocks in both the image subject and background, and returns Boolean detection results. Supports filtering images based on detection results (for example, processing only images with watermarks). Works in conjunction with subsequent capabilities — first identifies the types of elements that need optimization, then precisely executes removal and other operations.
     *
     * 2.  **Intelligent Matting:** Automatically identifies the product subject in an image and precisely separates it from the background. Based on deep learning models, supports accurate segmentation of complex edges such as hair strands and transparent objects. Outputs images with transparent or white backgrounds, supports custom background colors and target size cropping, and directly generates product display images that comply with e-commerce platform specifications.
     *
     * 3.  **Intelligent Removal:** Automatically identifies and removes non-compliant elements from e-commerce images, including text, specific names (brand/store names), transparent text blocks, and ad patches. Supports specifying removal of elements in the subject area or non-subject area separately, and also supports precise removal area specification through the Mask parameter for efficient batch compliance cleanup.
     *
     * 4.  **Image Translation Pro:** Leverages multimodal large model technology to translate text in images into the target language and render it directly at the corresponding position in the original image. Supports over 100 language pairs. Provides product subject text protection, brand name protection, and translation intervention glossaries to prevent mistranslation of embedded product information. After translation, returns layout information such as text position, font, and color to support secondary editing.
     *
     * 5.  **Intelligent Image Expansion:** Expands the image canvas using AI generation technology to broaden the image field of view without cropping the subject. Supports multiple expansion methods: by aspect ratio (1:1, 3:4, 4:3, 9:16, 16:9), by horizontal/vertical scaling ratio (1.0–3.0×), and by pixel offset in up/down/left/right directions. AI automatically fills in naturally transitioning background content.
     *
     * 6.  **Intelligent Cropping:** Intelligently crops images to specified dimensions, automatically identifies the image subject area, and precisely preserves core content. Supports custom output width and height (100–5000 pixels) to meet the image dimension requirements of different e-commerce platforms and ad placements, ensuring the subject remains prominent and the composition stays balanced after cropping.
     *
     * 7.  **HD Upscaling:** Enhances details and reduces noise while upscaling images, supporting 2–4× magnification. Suitable for improving the clarity of low-resolution product images and optimizing visual presentation. Supports output in PNG, JPG, BMP, and other formats.
     * # 4. Before and after comparison
     * | **Original image** | **Capabilities used** | **Output image** |
     * | --- | --- | --- |
     * | ![image.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/NpQlK5jRe9w5jqDv/img/3c1af966-8a5a-491d-9bfa-aefc321c9bed.png) | *   Intelligent detection
     *
     * *   Image Translation Pro
     *
     * *   Intelligent cropping | ![R1.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/NpQlK5jRe9w5jqDv/img/c2579e3e-389e-4717-84e3-834e60fea6b0.png) |
     * | ![image.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/NpQlK5jRe9w5jqDv/img/a92d14a9-ecf4-4e77-ad96-a2fcdd95dd1d.png) | *   Intelligent matting
     *
     * *   Intelligent removal
     *
     * *   Intelligent cropping | ![R1.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/NpQlK5jRe9w5jqDv/img/f631f578-3496-4aa1-b5ef-cd1ea603e049.png) |
     * | ![C2.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/NpQlK5jRe9w5jqDv/img/12965cf8-cfdf-4a85-95fe-fdfcefcaa4ae.png) | *   Intelligent detection
     *
     * *   Intelligent removal
     *
     * *   HD upscaling | ![R2.jpeg](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/NpQlK5jRe9w5jqDv/img/95d29e79-8622-45fb-b284-cd580fe40ea0.jpeg) |
     *
     * @param request - VisionFlowRequest
     *
     * @returns VisionFlowResponse
     *
     * @param VisionFlowRequest $request
     *
     * @return VisionFlowResponse
     */
    public function visionFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->visionFlowWithOptions($request, $runtime);
    }
}
