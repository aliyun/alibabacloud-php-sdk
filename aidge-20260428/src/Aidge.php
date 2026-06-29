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
use AlibabaCloud\SDK\Aidge\V20260428\Models\DocumentTranslateRequest;
use AlibabaCloud\SDK\Aidge\V20260428\Models\DocumentTranslateResponse;
use AlibabaCloud\SDK\Aidge\V20260428\Models\ImageCroppingRequest;
use AlibabaCloud\SDK\Aidge\V20260428\Models\ImageCroppingResponse;
use AlibabaCloud\SDK\Aidge\V20260428\Models\ImageMattingRequest;
use AlibabaCloud\SDK\Aidge\V20260428\Models\ImageMattingResponse;
use AlibabaCloud\SDK\Aidge\V20260428\Models\ImageRecognitionRequest;
use AlibabaCloud\SDK\Aidge\V20260428\Models\ImageRecognitionResponse;
use AlibabaCloud\SDK\Aidge\V20260428\Models\ImageRecognitionShrinkRequest;
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
use AlibabaCloud\SDK\Aidge\V20260428\Models\PackageWeightSizeCheckRequest;
use AlibabaCloud\SDK\Aidge\V20260428\Models\PackageWeightSizeCheckResponse;
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
     * A one-click cross-platform product material optimization service for cross-border e-commerce sellers (minimum cost version). Input product links from source platforms to generate optimized materials including titles, attributes, main images, SKU images, detail images, and descriptions that comply with the target platform\\"s requirements. Uses officially pre-built minimum-cost workflows, primarily based on filtering and lightweight processing without invoking high-cost image translation capabilities, maximizing cost control while ensuring listing compliance. (Asynchronous).
     *
     * @remarks
     * ## Product Introduction
     * A one-click cross-platform product material optimization service for cross-border e-commerce sellers (minimum cost version). Input product links from source platforms to generate optimized materials including titles, attributes, main images, SKU images, detail images, and descriptions that comply with the target platform\\"s requirements. Uses officially pre-built minimum-cost workflows, primarily based on filtering and lightweight processing without invoking high-cost image translation capabilities, maximizing cost control while ensuring listing compliance. (Asynchronous)
     * ## Applicable Scenarios
     * Suitable for cost-sensitive cross-platform product listing scenarios where speed, volume, and affordability are top priorities: for example, bulk listing from 1688 to TEMU, high-SKU inventory batch uploads, entry-level AI processing capabilities provided by top sellers and ERP/SaaS platforms, and merchants with high daily processing volumes but low requirements for marketing performance.
     * By filtering images containing watermarks or non-compliant elements and prioritizing clean original images, it helps merchants complete cross-platform listings at minimal cost.
     * ## Feature Overview
     * This service uses an officially pre-built "Minimum Cost" product optimization workflow, covering the full pipeline from material acquisition, compliance filtering, text optimization, to image processing:
     * 1. Automatically parses 1688 product links to extract multiple material types including titles, SKUs, main images, detail images, and attributes;
     * 2. Performs text filtering and SEO optimization based on TEMU platform blacklisted terms and compliance rules;
     * 3. Intelligently identifies watermarks, logos, and Chinese text in images, prioritizing filtering and selecting clean original images. SKU images and a small number of main images are processed using image translation capabilities to comply with platform standards (high-conversion images with marketing text may be filtered out);
     * 4. Completes category matching, attribute filling, and localization rewriting according to target platform requirements.
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
     * A one-click cross-platform product material optimization service for cross-border e-commerce sellers (minimum cost version). Input product links from source platforms to generate optimized materials including titles, attributes, main images, SKU images, detail images, and descriptions that comply with the target platform\\"s requirements. Uses officially pre-built minimum-cost workflows, primarily based on filtering and lightweight processing without invoking high-cost image translation capabilities, maximizing cost control while ensuring listing compliance. (Asynchronous).
     *
     * @remarks
     * ## Product Introduction
     * A one-click cross-platform product material optimization service for cross-border e-commerce sellers (minimum cost version). Input product links from source platforms to generate optimized materials including titles, attributes, main images, SKU images, detail images, and descriptions that comply with the target platform\\"s requirements. Uses officially pre-built minimum-cost workflows, primarily based on filtering and lightweight processing without invoking high-cost image translation capabilities, maximizing cost control while ensuring listing compliance. (Asynchronous)
     * ## Applicable Scenarios
     * Suitable for cost-sensitive cross-platform product listing scenarios where speed, volume, and affordability are top priorities: for example, bulk listing from 1688 to TEMU, high-SKU inventory batch uploads, entry-level AI processing capabilities provided by top sellers and ERP/SaaS platforms, and merchants with high daily processing volumes but low requirements for marketing performance.
     * By filtering images containing watermarks or non-compliant elements and prioritizing clean original images, it helps merchants complete cross-platform listings at minimal cost.
     * ## Feature Overview
     * This service uses an officially pre-built "Minimum Cost" product optimization workflow, covering the full pipeline from material acquisition, compliance filtering, text optimization, to image processing:
     * 1. Automatically parses 1688 product links to extract multiple material types including titles, SKUs, main images, detail images, and attributes;
     * 2. Performs text filtering and SEO optimization based on TEMU platform blacklisted terms and compliance rules;
     * 3. Intelligently identifies watermarks, logos, and Chinese text in images, prioritizing filtering and selecting clean original images. SKU images and a small number of main images are processed using image translation capabilities to comply with platform standards (high-conversion images with marketing text may be filtered out);
     * 4. Completes category matching, attribute filling, and localization rewriting according to target platform requirements.
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
     * Provides a one-click cross-platform product listing optimization service (best effect edition) for cross-border e-commerce sellers. Takes a 1688 product link as input and outputs a complete set of assets adapted to TEMU platform requirements, including titles, attributes, main images, SKU images, detail images, and copywriting. Uses the official pre-built best-effect workflow to maximize AI capabilities, retains and localizes brand marketing assets, and outputs category-specific assets such as size charts for apparel categories. (Asynchronous).
     *
     * @remarks
     * ## Product Introduction
     * A one-click cross-platform product listing optimization service (best effect edition) for cross-border e-commerce sellers. Takes a 1688 product link as input and outputs a complete set of assets adapted to TEMU platform requirements, including titles, attributes, main images, SKU images, detail images, and copywriting.
     * ## Common scenarios
     * Suitable for scenarios that demand high-quality cross-platform product listing assets and strong conversion performance. Examples include categories with high dependency on marketing assets such as apparel, accessories, beauty, and home goods. Also suitable for brand merchants and high-value products that need to retain marketing images with embedded copywriting. Ideal for top sellers and ERP/SaaS platforms conducting localized operations across multiple languages and markets, as well as scenarios that require category-specific assets (such as size charts and package weight/dimensions) to improve listing quality and conversion rates.
     * ## Features
     * This service uses the official pre-built "Best Effect" product optimization workflow, covering the entire pipeline from asset retrieval, diagnosis, filtering, and optimization to output:
     * 1. Automatically parses 1688 product links to extract all assets including titles, SKUs, main images, detail images, and attributes. Intelligently diagnoses missing assets and optimization opportunities.
     * 2. Uses LLM-based text compliance filtering, SEO keyword optimization, five-point description generation, and multilingual localization rewriting.
     * 3. Invokes multiple image processing capabilities including intelligent recognition, intelligent background removal, intelligent erasure, Image Translation Pro, image expansion, intelligent cropping, and HD upscaling.
     * 4. Outputs category-specific assets, such as size charts and package weight/dimensions for apparel categories.
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
     * Provides a one-click cross-platform product listing optimization service (best effect edition) for cross-border e-commerce sellers. Takes a 1688 product link as input and outputs a complete set of assets adapted to TEMU platform requirements, including titles, attributes, main images, SKU images, detail images, and copywriting. Uses the official pre-built best-effect workflow to maximize AI capabilities, retains and localizes brand marketing assets, and outputs category-specific assets such as size charts for apparel categories. (Asynchronous).
     *
     * @remarks
     * ## Product Introduction
     * A one-click cross-platform product listing optimization service (best effect edition) for cross-border e-commerce sellers. Takes a 1688 product link as input and outputs a complete set of assets adapted to TEMU platform requirements, including titles, attributes, main images, SKU images, detail images, and copywriting.
     * ## Common scenarios
     * Suitable for scenarios that demand high-quality cross-platform product listing assets and strong conversion performance. Examples include categories with high dependency on marketing assets such as apparel, accessories, beauty, and home goods. Also suitable for brand merchants and high-value products that need to retain marketing images with embedded copywriting. Ideal for top sellers and ERP/SaaS platforms conducting localized operations across multiple languages and markets, as well as scenarios that require category-specific assets (such as size charts and package weight/dimensions) to improve listing quality and conversion rates.
     * ## Features
     * This service uses the official pre-built "Best Effect" product optimization workflow, covering the entire pipeline from asset retrieval, diagnosis, filtering, and optimization to output:
     * 1. Automatically parses 1688 product links to extract all assets including titles, SKUs, main images, detail images, and attributes. Intelligently diagnoses missing assets and optimization opportunities.
     * 2. Uses LLM-based text compliance filtering, SEO keyword optimization, five-point description generation, and multilingual localization rewriting.
     * 3. Invokes multiple image processing capabilities including intelligent recognition, intelligent background removal, intelligent erasure, Image Translation Pro, image expansion, intelligent cropping, and HD upscaling.
     * 4. Outputs category-specific assets, such as size charts and package weight/dimensions for apparel categories.
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
     * # Scenarios
     * Cross-platform product listing attribute filling: When merchants list products across platforms, different platforms such as the source platform and the TEMU platform require different attribute fields for different categories, with complex hierarchical associations (such as material → wood type → density). Manual filling is time-consuming and error-prone. This service automatically understands product information and intelligently fills in attributes. It is applicable to scenarios such as automated bulk listing for top sellers, ERP/SaaS platform integration, and quick product listing for SMB merchants.
     * # Features
     * Users input the product title, source category, product details, SKU, product attributes, and product images (up to 10). The system uses multimodal AI to understand product semantics and visual features, and completes two core tasks: ① Matches the precise category path for the product on the TEMU platform. ② Automatically fills in the required attributes under that category (such as material, battery properties, size, and connectivity), and returns the confidence score and reasoning for each attribute. The API uses synchronous mode and returns results immediately upon invocation.
     * # Comparison
     * The following example shows the attributes of a USB fan:
     * | **1688 Attribute** | **1688 Attribute Value** | **TEMU Attribute** | **TEMU Attribute Value** | **Existing in 1688** |
     * | --- | --- | --- | --- | --- |
     * | 品牌 | 其他 | 供电方式 | USB充电（内置电池） | No |
     * | 续航时长 | 3-6h(含) | 可充电电池 | 锂系电池 | No |
     * | 附加功能 | 数显 | 电池容量（mAh） | 4000 | Yes |
     * | 内置蓄电池容量 | 2000mAh-4000mAh（含） | 风扇功能 | 高速特征 | No |
     * | 货号 | X699 | 控制方式 | 按键 | Yes |
     * | 主要下游平台 | ebay,亚马逊,wish,速卖通,独立站,LAZADA,其他 | 完成类型 | 涂漆 | Yes |
     * | 有可授权的自有品牌 | 否 | 推荐使用 | 冷却 | No |
     * | 尺寸 | 65\\*60\\*171 | 电风扇设计 | 可穿戴风扇 | No |
     * | 适用送礼场合 | 个人礼品 | 包含的组件 | 无 | No |
     * | 外壳工艺 | 喷涂（UV漆，橡胶漆，金属漆，钢琴烤漆，珠光粉） | 材料 | 塑料 | No |
     * | 包装体积 | 65\\*60\\*171 | 特殊功能 | 便携式 | No |
     * | 外观尺寸 | 51\\*36\\*34 | 室内外使用 | 室内室外均可 | No |
     * | 风速档位 | 3档 | 品牌名 | 无 | No |
     * | 操作方式 | 普通按钮 |  |  |  |
     * | 扇叶材质 | ABS |  |  |  |
     * | 电源方式 | USB |  |  |  |
     * | 是否内置电池 | 内置电池 |  |  |  |
     * | 是否专利货源 | 否 |  |  |  |
     * | 颜色 | X699风扇-黄色,X699风扇-浅紫色,X699风扇-天蓝色,X699风扇-橙色,X699风扇-浅绿色,普通小风扇 |  |  |  |
     * | 主要销售地区 | 日韩,非洲,韩国,日本,欧洲,南美,东南亚,北美,东北亚,中东,拉丁美洲,欧美,其他 |  |  |  |
     * | 是否跨境出口专供货源 | 是 |  |  |  |
     * | 风格 | 清新 |  |  |  |
     * | 电机类型 | 无刷电机 |  |  |  |
     * | 噪音 | 36dB(A)-45dB(A)(含) |  |  |  |
     * | 产品净重 | 125g |  |  |  |
     * | 扇叶数量 | 6片及以上 |  |  |  |
     * | 风扇分类 | 手持风扇 |  |  |  |.
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
     * # Scenarios
     * Cross-platform product listing attribute filling: When merchants list products across platforms, different platforms such as the source platform and the TEMU platform require different attribute fields for different categories, with complex hierarchical associations (such as material → wood type → density). Manual filling is time-consuming and error-prone. This service automatically understands product information and intelligently fills in attributes. It is applicable to scenarios such as automated bulk listing for top sellers, ERP/SaaS platform integration, and quick product listing for SMB merchants.
     * # Features
     * Users input the product title, source category, product details, SKU, product attributes, and product images (up to 10). The system uses multimodal AI to understand product semantics and visual features, and completes two core tasks: ① Matches the precise category path for the product on the TEMU platform. ② Automatically fills in the required attributes under that category (such as material, battery properties, size, and connectivity), and returns the confidence score and reasoning for each attribute. The API uses synchronous mode and returns results immediately upon invocation.
     * # Comparison
     * The following example shows the attributes of a USB fan:
     * | **1688 Attribute** | **1688 Attribute Value** | **TEMU Attribute** | **TEMU Attribute Value** | **Existing in 1688** |
     * | --- | --- | --- | --- | --- |
     * | 品牌 | 其他 | 供电方式 | USB充电（内置电池） | No |
     * | 续航时长 | 3-6h(含) | 可充电电池 | 锂系电池 | No |
     * | 附加功能 | 数显 | 电池容量（mAh） | 4000 | Yes |
     * | 内置蓄电池容量 | 2000mAh-4000mAh（含） | 风扇功能 | 高速特征 | No |
     * | 货号 | X699 | 控制方式 | 按键 | Yes |
     * | 主要下游平台 | ebay,亚马逊,wish,速卖通,独立站,LAZADA,其他 | 完成类型 | 涂漆 | Yes |
     * | 有可授权的自有品牌 | 否 | 推荐使用 | 冷却 | No |
     * | 尺寸 | 65\\*60\\*171 | 电风扇设计 | 可穿戴风扇 | No |
     * | 适用送礼场合 | 个人礼品 | 包含的组件 | 无 | No |
     * | 外壳工艺 | 喷涂（UV漆，橡胶漆，金属漆，钢琴烤漆，珠光粉） | 材料 | 塑料 | No |
     * | 包装体积 | 65\\*60\\*171 | 特殊功能 | 便携式 | No |
     * | 外观尺寸 | 51\\*36\\*34 | 室内外使用 | 室内室外均可 | No |
     * | 风速档位 | 3档 | 品牌名 | 无 | No |
     * | 操作方式 | 普通按钮 |  |  |  |
     * | 扇叶材质 | ABS |  |  |  |
     * | 电源方式 | USB |  |  |  |
     * | 是否内置电池 | 内置电池 |  |  |  |
     * | 是否专利货源 | 否 |  |  |  |
     * | 颜色 | X699风扇-黄色,X699风扇-浅紫色,X699风扇-天蓝色,X699风扇-橙色,X699风扇-浅绿色,普通小风扇 |  |  |  |
     * | 主要销售地区 | 日韩,非洲,韩国,日本,欧洲,南美,东南亚,北美,东北亚,中东,拉丁美洲,欧美,其他 |  |  |  |
     * | 是否跨境出口专供货源 | 是 |  |  |  |
     * | 风格 | 清新 |  |  |  |
     * | 电机类型 | 无刷电机 |  |  |  |
     * | 噪音 | 36dB(A)-45dB(A)(含) |  |  |  |
     * | 产品净重 | 125g |  |  |  |
     * | 扇叶数量 | 6片及以上 |  |  |  |
     * | 风扇分类 | 手持风扇 |  |  |  |.
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
     * Provides a large language model-based cross-platform product category intelligent matching service. Accepts product information from a source platform, automatically matches the best category on the target listing platform, and returns a confidence level score with matching reasons to help sellers quickly select categories for cross-platform product listing. (Synchronous).
     *
     * @remarks
     * ## Product Introduction
     * Provides a large language model-based cross-platform product category intelligent matching service. Accepts product information from a source platform, automatically matches the best category on the target listing platform, and returns a confidence level score with matching reasons to help sellers quickly select categories for cross-platform product listing. (Synchronous)
     * ## Common scenarios
     * Cross-platform product listing: After sourcing products, sellers need to map them to the correct categories in the target platform\\"s category tree. Manually selecting categories requires familiarity with the target platform\\"s entire category structure, which is time-consuming, labor-intensive, and error-prone. Incorrect category mapping can cause products to be delisted.
     * This service automates category mapping and is suitable for bulk API calls from large sellers\\" proprietary systems, integration into ERP/SaaS platforms for automated listing workflows, and quick single-product listing for SMB sellers.
     * The current version supports only TEMU as the target listing platform. Automatic retrieval of product information from source platforms is not yet supported and requires manual parameter input. This capability and support for additional source and target platforms will be added in future releases.
     * ## Functions and features
     * You can input fields such as product title, source category, product description, SKU information, and product attributes. The system uses an AI model to understand product semantics and matches the most appropriate category path from the full TEMU platform category tree. The response includes the complete category path (CategoryPath), category name (CategoryName), confidence score (0–100), and matching reason. The API uses synchronous mode and returns results immediately, making it suitable for embedding in real-time business workflows.
     * ## Demo
     * | **Source platform** | **Image** | **Source platform category** | **Target platform** | **Target platform category** |
     * | --- | --- | --- | --- | --- |
     * | 1688 | ![done-image-245c58c8-a9fc-4e32-b959-8b4bcd52b264.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/jP2lRYjv7234mO8g/img/69a226e8-aff1-4891-bb0a-c47c1ea397ae.png) | USB风扇、迷你风扇 | TEMU | 家电
     * \\>加热、冷却和空气质量电器
     * \\>电风扇
     * \\>USB 风扇 |
     * | 1688 | ![image.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/jP2lRYjv7234mO8g/img/8a546f7d-826e-43d6-b5f3-12d1edef8897.png) | 手链 | TEMU | 服装、鞋靴和珠宝饰品
     * \\>女士时尚
     * \\>女士饰品
     * \\>女士时尚手链、手镯
     * \\>女士时尚吊饰和吊饰手链
     * \\>女士时尚吊饰手链
     * \\>女士时尚链式吊饰手链 |.
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
     * Provides a large language model-based cross-platform product category intelligent matching service. Accepts product information from a source platform, automatically matches the best category on the target listing platform, and returns a confidence level score with matching reasons to help sellers quickly select categories for cross-platform product listing. (Synchronous).
     *
     * @remarks
     * ## Product Introduction
     * Provides a large language model-based cross-platform product category intelligent matching service. Accepts product information from a source platform, automatically matches the best category on the target listing platform, and returns a confidence level score with matching reasons to help sellers quickly select categories for cross-platform product listing. (Synchronous)
     * ## Common scenarios
     * Cross-platform product listing: After sourcing products, sellers need to map them to the correct categories in the target platform\\"s category tree. Manually selecting categories requires familiarity with the target platform\\"s entire category structure, which is time-consuming, labor-intensive, and error-prone. Incorrect category mapping can cause products to be delisted.
     * This service automates category mapping and is suitable for bulk API calls from large sellers\\" proprietary systems, integration into ERP/SaaS platforms for automated listing workflows, and quick single-product listing for SMB sellers.
     * The current version supports only TEMU as the target listing platform. Automatic retrieval of product information from source platforms is not yet supported and requires manual parameter input. This capability and support for additional source and target platforms will be added in future releases.
     * ## Functions and features
     * You can input fields such as product title, source category, product description, SKU information, and product attributes. The system uses an AI model to understand product semantics and matches the most appropriate category path from the full TEMU platform category tree. The response includes the complete category path (CategoryPath), category name (CategoryName), confidence score (0–100), and matching reason. The API uses synchronous mode and returns results immediately, making it suitable for embedding in real-time business workflows.
     * ## Demo
     * | **Source platform** | **Image** | **Source platform category** | **Target platform** | **Target platform category** |
     * | --- | --- | --- | --- | --- |
     * | 1688 | ![done-image-245c58c8-a9fc-4e32-b959-8b4bcd52b264.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/jP2lRYjv7234mO8g/img/69a226e8-aff1-4891-bb0a-c47c1ea397ae.png) | USB风扇、迷你风扇 | TEMU | 家电
     * \\>加热、冷却和空气质量电器
     * \\>电风扇
     * \\>USB 风扇 |
     * | 1688 | ![image.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/jP2lRYjv7234mO8g/img/8a546f7d-826e-43d6-b5f3-12d1edef8897.png) | 手链 | TEMU | 服装、鞋靴和珠宝饰品
     * \\>女士时尚
     * \\>女士饰品
     * \\>女士时尚手链、手镯
     * \\>女士时尚吊饰和吊饰手链
     * \\>女士时尚吊饰手链
     * \\>女士时尚链式吊饰手链 |.
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
     * Designed specifically for document translation, this service supports translation between more than 100 language pairs (including bridged pairs), handling multi-scenario, multi-page, and highly complex document translation. Scanned documents are not currently supported.
     * The service excels in the following areas:
     * - Content accuracy: translation accuracy, parameter and unit accuracy.
     * - Structural integrity: overall layout continuity, page margin and layout preservation.
     *
     * @remarks
     * ## Product Introduction
     * Designed specifically for document translation, this service supports translation between more than 100 language pairs (including bridged pairs), handling multi-scenario, multi-page, and highly complex document translation. Scanned documents are not currently supported.
     * The service excels in the following areas:
     * - Content accuracy: translation accuracy, parameter and unit accuracy.
     * - Structural integrity: overall layout continuity, page margin and layout preservation.
     * ## Common scenarios
     * Cross-border e-commerce product manuals, contracts, agreements, business proposals, qualification documents, textbooks, courseware, and other scenarios.
     * 3. Features
     * - Supports PDF and Word formats. Supports source documents that contain multiple languages. For a detailed list of supported languages, see section 4.5.
     * - Supports translation of text within images in documents, as well as complex translation scenarios such as charts and special symbols.
     * - Supports high-fidelity layout preservation after translation.
     * - A single PDF supports up to 100 pages, and a single Word document supports up to 100 pages.
     * - Supports custom translation results, including do-not-translate (ABC-ABC), specified translation (ABC-DEF), and skip translation (ABC-empty value). This is commonly used for brand name protection. Pass the corresponding glossary ID when calling the API to meet your translation needs across different scenarios. You can upload up to 100,000 glossary entries. If you need more, contact the platform for assistance.
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
     * Designed specifically for document translation, this service supports translation between more than 100 language pairs (including bridged pairs), handling multi-scenario, multi-page, and highly complex document translation. Scanned documents are not currently supported.
     * The service excels in the following areas:
     * - Content accuracy: translation accuracy, parameter and unit accuracy.
     * - Structural integrity: overall layout continuity, page margin and layout preservation.
     *
     * @remarks
     * ## Product Introduction
     * Designed specifically for document translation, this service supports translation between more than 100 language pairs (including bridged pairs), handling multi-scenario, multi-page, and highly complex document translation. Scanned documents are not currently supported.
     * The service excels in the following areas:
     * - Content accuracy: translation accuracy, parameter and unit accuracy.
     * - Structural integrity: overall layout continuity, page margin and layout preservation.
     * ## Common scenarios
     * Cross-border e-commerce product manuals, contracts, agreements, business proposals, qualification documents, textbooks, courseware, and other scenarios.
     * 3. Features
     * - Supports PDF and Word formats. Supports source documents that contain multiple languages. For a detailed list of supported languages, see section 4.5.
     * - Supports translation of text within images in documents, as well as complex translation scenarios such as charts and special symbols.
     * - Supports high-fidelity layout preservation after translation.
     * - A single PDF supports up to 100 pages, and a single Word document supports up to 100 pages.
     * - Supports custom translation results, including do-not-translate (ABC-ABC), specified translation (ABC-DEF), and skip translation (ABC-empty value). This is commonly used for brand name protection. Pass the corresponding glossary ID when calling the API to meet your translation needs across different scenarios. You can upload up to 100,000 glossary entries. If you need more, contact the platform for assistance.
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
     * Intelligently crop images to specified dimensions, automatically identify the main subject area of the image, and precisely crop to various sizes to meet design requirements for different scenarios. (Synchronous).
     *
     * @remarks
     * ## Product Overview
     * The image cropping product can resize input images to specified dimensions. It supports automatic identification of the main subject area in images and precisely crops to various sizes to meet design requirements for different scenarios. (Synchronous)
     * ## Use Cases
     * - **Multi-platform Content Distribution**: Automatically generate content in multiple sizes to meet the different image size requirements of various platforms and scenarios.
     *
     * -   **Content Placement**: Automatically adjust sizes for different ad slots on different platforms, highlighting the main content, reducing blank space, and showcasing product features.
     *
     * ## Feature Description
     * *   Automatically identify the main subject area of an image and crop precisely.
     *
     * *   Support custom crop size output to adapt to different platforms and devices.
     *
     * ## Effect Comparison
     * | **Original Image** | **Cropped to 1000\\*1000** | **Cropped to 3000\\*2000** |
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
     * Intelligently crop images to specified dimensions, automatically identify the main subject area of the image, and precisely crop to various sizes to meet design requirements for different scenarios. (Synchronous).
     *
     * @remarks
     * ## Product Overview
     * The image cropping product can resize input images to specified dimensions. It supports automatic identification of the main subject area in images and precisely crops to various sizes to meet design requirements for different scenarios. (Synchronous)
     * ## Use Cases
     * - **Multi-platform Content Distribution**: Automatically generate content in multiple sizes to meet the different image size requirements of various platforms and scenarios.
     *
     * -   **Content Placement**: Automatically adjust sizes for different ad slots on different platforms, highlighting the main content, reducing blank space, and showcasing product features.
     *
     * ## Feature Description
     * *   Automatically identify the main subject area of an image and crop precisely.
     *
     * *   Support custom crop size output to adapt to different platforms and devices.
     *
     * ## Effect Comparison
     * | **Original Image** | **Cropped to 1000\\*1000** | **Cropped to 3000\\*2000** |
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
     * Intelligent image matting automatically identifies salient subjects in images, separates subjects from backgrounds, and returns subject images with backgrounds removed. The product also provides multiple background options and custom size selections to optimize product display. (Synchronous).
     *
     * @remarks
     * ## Product Introduction
     * Intelligent image matting automatically identifies salient subjects in images, separates subjects from backgrounds, and returns subject images with backgrounds removed. The product also provides multiple background options and custom size selections to optimize product display. (Synchronous).
     * ## Scenarios
     * *   **Secondary editing of materials**: After separating the image subject from the background, you can further edit the image.
     *
     * *   **Improved material processing efficiency**: Quickly extract subjects from various material images for easy background replacement, improving the production efficiency of advertising visuals and marketing posters.
     * ## Features.
     * #### 1. One-click precise subject recognition
     * *   **AI automatic recognition**: Based on deep learning models, the feature intelligently distinguishes foreground subjects (portraits, products, objects, etc.) from backgrounds without manual tracing.
     *
     * *   **Multi-scenario adaptation**: Supports precise segmentation in complex scenarios (such as hair strands, transparent objects, and fur edges) with an accuracy rate exceeding 95%.
     * #### 2. Intelligent edge optimization
     * *   **Detail-level processing**: Performs automatic optimization of edge aliasing and semi-transparent areas (such as smoke and glass) while preserving natural transition effects.
     * #### 3. Multi-format output and background operations
     * *   **Transparent background export**: Directly generates PNG images with transparent backgrounds and white backgrounds, suitable for e-commerce, design, and other scenarios.
     *
     * *   **Custom background color support**.
     * ## Effect comparison
     * | **Original image (input)** | **Result image (output)** |
     * | --- | --- |
     * | ![主图3.jpeg](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/a2QnV4jwexAy7O4X/img/62b39e16-5b30-469f-88cd-7f31ba790008.jpeg) | ![ae4cd8ce912c4d9fa171dc5217be576d_202605251928_0.5899999737739563.jpeg](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/a2QnV4jwexAy7O4X/img/bfad041f-a8e0-4d6f-a2bf-999292ea9ebc.jpeg) |
     * | ![主图2.jpeg](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/a2QnV4jwexAy7O4X/img/b201b356-24b8-4f98-babc-c7fe918bdc37.jpeg) | ![52033655bd054737960a87518655d935_202605251926_5.959999978542328.jpeg](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/a2QnV4jwexAy7O4X/img/8b266603-e80a-42dd-9d3d-6fa9f0948e52.jpeg) |
     * | ![主图6.jpeg](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/a2QnV4jwexAy7O4X/img/d3c0d876-42a0-4294-8ce5-2a20df2deab9.jpeg) | ![abdecd31cc45450f83b33f9baf4499c6_202605251930_7.9700000286102295.jpeg](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/a2QnV4jwexAy7O4X/img/5677f55e-4fe3-4978-a676-1ce71ad604b0.jpeg) |.
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
     * Intelligent image matting automatically identifies salient subjects in images, separates subjects from backgrounds, and returns subject images with backgrounds removed. The product also provides multiple background options and custom size selections to optimize product display. (Synchronous).
     *
     * @remarks
     * ## Product Introduction
     * Intelligent image matting automatically identifies salient subjects in images, separates subjects from backgrounds, and returns subject images with backgrounds removed. The product also provides multiple background options and custom size selections to optimize product display. (Synchronous).
     * ## Scenarios
     * *   **Secondary editing of materials**: After separating the image subject from the background, you can further edit the image.
     *
     * *   **Improved material processing efficiency**: Quickly extract subjects from various material images for easy background replacement, improving the production efficiency of advertising visuals and marketing posters.
     * ## Features.
     * #### 1. One-click precise subject recognition
     * *   **AI automatic recognition**: Based on deep learning models, the feature intelligently distinguishes foreground subjects (portraits, products, objects, etc.) from backgrounds without manual tracing.
     *
     * *   **Multi-scenario adaptation**: Supports precise segmentation in complex scenarios (such as hair strands, transparent objects, and fur edges) with an accuracy rate exceeding 95%.
     * #### 2. Intelligent edge optimization
     * *   **Detail-level processing**: Performs automatic optimization of edge aliasing and semi-transparent areas (such as smoke and glass) while preserving natural transition effects.
     * #### 3. Multi-format output and background operations
     * *   **Transparent background export**: Directly generates PNG images with transparent backgrounds and white backgrounds, suitable for e-commerce, design, and other scenarios.
     *
     * *   **Custom background color support**.
     * ## Effect comparison
     * | **Original image (input)** | **Result image (output)** |
     * | --- | --- |
     * | ![主图3.jpeg](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/a2QnV4jwexAy7O4X/img/62b39e16-5b30-469f-88cd-7f31ba790008.jpeg) | ![ae4cd8ce912c4d9fa171dc5217be576d_202605251928_0.5899999737739563.jpeg](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/a2QnV4jwexAy7O4X/img/bfad041f-a8e0-4d6f-a2bf-999292ea9ebc.jpeg) |
     * | ![主图2.jpeg](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/a2QnV4jwexAy7O4X/img/b201b356-24b8-4f98-babc-c7fe918bdc37.jpeg) | ![52033655bd054737960a87518655d935_202605251926_5.959999978542328.jpeg](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/a2QnV4jwexAy7O4X/img/8b266603-e80a-42dd-9d3d-6fa9f0948e52.jpeg) |
     * | ![主图6.jpeg](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/a2QnV4jwexAy7O4X/img/d3c0d876-42a0-4294-8ce5-2a20df2deab9.jpeg) | ![abdecd31cc45450f83b33f9baf4499c6_202605251930_7.9700000286102295.jpeg](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/a2QnV4jwexAy7O4X/img/5677f55e-4fe3-4978-a676-1ce71ad604b0.jpeg) |.
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
     * Intelligent element recognition.
     *
     * @remarks
     * ## Product Introduction
     * The Intelligent Element Recognition API is designed specifically for identifying specific elements in e-commerce images. It analyzes image details in depth, helping you quickly identify elements such as text, logos, watermarks, and text-containing color blocks in both the subject and background of images. This greatly improves the efficiency and accuracy of image screening. (Synchronous).
     * ## Scenarios
     * **1. Intelligent image screening and optimization:**
     * Merchants and platforms can use the Intelligent Element Recognition API for image screening to automatically identify images that contain specific elements such as watermarks and logos. After screening, you can call the Intelligent Removal API to optimize these images, improve image quality, and shorten the product release cycle.
     * **2. Automated image processing and efficiency improvement:**
     * With the Intelligent Element Recognition API, merchants and platforms can automate the image processing workflow by automatically identifying and marking image elements that require optimization. This process reduces manual intervention and improves image processing efficiency.
     * ## Features
     * **1. Definitions of image subject, image background, text, logo, watermark, and text-containing color block: For details, refer to the related examples in the removal documentation (reserved text link)**
     * *   Image subject: The core product area in the image
     *
     * *   Image background: The remaining part of the image other than the product subject
     *
     * *   Text: Horizontal, vertical, or diagonal English or Chinese text
     *
     * *   Logo: An emblem or trademark
     *
     * *   Watermark: Monochrome transparent text, emblems, images, URLs, or store names
     *
     * *   Text-containing color block: A color block outside the subject that contains text
     *
     * **2. The main features of the Intelligent Element Recognition API include:**
     * *   Element recognition: Identifies whether elements such as text, logos, watermarks, and text-containing color blocks exist in the image subject and background.
     *
     * *   Workflow coordination: Works in conjunction with the Intelligent Removal API. First, the Intelligent Element Recognition API identifies elements that need to be removed, and then the Intelligent Removal API effectively removes them, ensuring accuracy and efficiency in image processing.
     * ## Technical advantages
     * *   Synchronous batch processing: As a synchronous API, the Intelligent Element Recognition API can process large volumes of images while maintaining fast response times, adapting to business needs of different scales.
     *
     * *   Flexibility: You can select the element types to recognize based on your needs, including elements in both the subject and non-subject areas such as watermarks, logos, and text, to meet personalized recognition requirements.
     * ## Comparison
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
     * *   Text-containing color block: true |.
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
     * Intelligent element recognition.
     *
     * @remarks
     * ## Product Introduction
     * The Intelligent Element Recognition API is designed specifically for identifying specific elements in e-commerce images. It analyzes image details in depth, helping you quickly identify elements such as text, logos, watermarks, and text-containing color blocks in both the subject and background of images. This greatly improves the efficiency and accuracy of image screening. (Synchronous).
     * ## Scenarios
     * **1. Intelligent image screening and optimization:**
     * Merchants and platforms can use the Intelligent Element Recognition API for image screening to automatically identify images that contain specific elements such as watermarks and logos. After screening, you can call the Intelligent Removal API to optimize these images, improve image quality, and shorten the product release cycle.
     * **2. Automated image processing and efficiency improvement:**
     * With the Intelligent Element Recognition API, merchants and platforms can automate the image processing workflow by automatically identifying and marking image elements that require optimization. This process reduces manual intervention and improves image processing efficiency.
     * ## Features
     * **1. Definitions of image subject, image background, text, logo, watermark, and text-containing color block: For details, refer to the related examples in the removal documentation (reserved text link)**
     * *   Image subject: The core product area in the image
     *
     * *   Image background: The remaining part of the image other than the product subject
     *
     * *   Text: Horizontal, vertical, or diagonal English or Chinese text
     *
     * *   Logo: An emblem or trademark
     *
     * *   Watermark: Monochrome transparent text, emblems, images, URLs, or store names
     *
     * *   Text-containing color block: A color block outside the subject that contains text
     *
     * **2. The main features of the Intelligent Element Recognition API include:**
     * *   Element recognition: Identifies whether elements such as text, logos, watermarks, and text-containing color blocks exist in the image subject and background.
     *
     * *   Workflow coordination: Works in conjunction with the Intelligent Removal API. First, the Intelligent Element Recognition API identifies elements that need to be removed, and then the Intelligent Removal API effectively removes them, ensuring accuracy and efficiency in image processing.
     * ## Technical advantages
     * *   Synchronous batch processing: As a synchronous API, the Intelligent Element Recognition API can process large volumes of images while maintaining fast response times, adapting to business needs of different scales.
     *
     * *   Flexibility: You can select the element types to recognize based on your needs, including elements in both the subject and non-subject areas such as watermarks, logos, and text, to meet personalized recognition requirements.
     * ## Comparison
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
     * *   Text-containing color block: true |.
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
     * The Intelligent Image Removal product is specially designed for e-commerce images. It automatically identifies and removes text, specific names, transparent text blocks, and blemishes from e-commerce images. You can specify objects to remove from images as needed, enabling efficient and accurate batch processing of large volumes of images and simplifying the image editing workflow. (Synchronous).
     *
     * @remarks
     * ## Product Overview
     * The Intelligent Image Removal product is specially designed for e-commerce images. It automatically identifies and removes text, specific names, transparent text blocks, and blemishes from e-commerce images. You can specify objects to remove from images as needed, enabling efficient and accurate batch processing of large volumes of images and simplifying the image editing workflow. (Synchronous)
     * ## Use Cases
     * *   **Efficient E-commerce Image Processing:**
     *
     * Remove irrelevant visual elements to provide a cleaner, more focused product display and enhance the customer shopping experience.
     * *   **Multi-platform Product Information Synchronization:**
     *
     * When merchants simultaneously list products across different e-commerce platforms, they can quickly remove specific text and blemishes to comply with different platform image specifications.
     * *   **Marketing Material Preparation:**
     *
     * Merchants can easily remove existing promotional information and quickly update it with the latest campaign details.
     * > Note: Merchants or platforms can batch remove impurities from images to optimize image quality. We recommend using this in combination with the "Intelligent Recognition API" (coming soon). First, filter out images containing text, specific names, transparent text blocks, and blemishes, then use the "Intelligent Removal API" to batch remove them. The Intelligent Recognition API focuses on "recognition," while the Intelligent Removal API focuses on "removal." By calling them in sequence, you can maximize removal effectiveness and reduce "false removals" and "false recognitions."
     * ## Feature Introduction
     * 1.  First, clarify the definitions of image subject and image background. In actual use, when specifying removal targets, you can choose whether the removal scope is the image subject or the image background area. Both API and editor integration methods are supported to meet different types of requirements.
     *
     *     1.  Image subject: The core product area in the image
     *
     *     2.  Image background: The remaining portion of the image apart from the product subject
     *
     * 2.  Second, the removal targets support the following four types: text, specific names, transparent text blocks, and blemishes. You can use the following examples to clarify your usage requirements and perform targeted operations:
     *
     * ## Effect Comparison
     * | **Removable Objects in Images** | **Original Image** | **Image After Removal** |
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
     * | Specific Names | *   Involving the image subject area
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
     * | Transparent Text Blocks | *   Involving the image subject area
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
     * | Blemishes | *   Involving the image subject area
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
     * The Intelligent Image Removal product is specially designed for e-commerce images. It automatically identifies and removes text, specific names, transparent text blocks, and blemishes from e-commerce images. You can specify objects to remove from images as needed, enabling efficient and accurate batch processing of large volumes of images and simplifying the image editing workflow. (Synchronous).
     *
     * @remarks
     * ## Product Overview
     * The Intelligent Image Removal product is specially designed for e-commerce images. It automatically identifies and removes text, specific names, transparent text blocks, and blemishes from e-commerce images. You can specify objects to remove from images as needed, enabling efficient and accurate batch processing of large volumes of images and simplifying the image editing workflow. (Synchronous)
     * ## Use Cases
     * *   **Efficient E-commerce Image Processing:**
     *
     * Remove irrelevant visual elements to provide a cleaner, more focused product display and enhance the customer shopping experience.
     * *   **Multi-platform Product Information Synchronization:**
     *
     * When merchants simultaneously list products across different e-commerce platforms, they can quickly remove specific text and blemishes to comply with different platform image specifications.
     * *   **Marketing Material Preparation:**
     *
     * Merchants can easily remove existing promotional information and quickly update it with the latest campaign details.
     * > Note: Merchants or platforms can batch remove impurities from images to optimize image quality. We recommend using this in combination with the "Intelligent Recognition API" (coming soon). First, filter out images containing text, specific names, transparent text blocks, and blemishes, then use the "Intelligent Removal API" to batch remove them. The Intelligent Recognition API focuses on "recognition," while the Intelligent Removal API focuses on "removal." By calling them in sequence, you can maximize removal effectiveness and reduce "false removals" and "false recognitions."
     * ## Feature Introduction
     * 1.  First, clarify the definitions of image subject and image background. In actual use, when specifying removal targets, you can choose whether the removal scope is the image subject or the image background area. Both API and editor integration methods are supported to meet different types of requirements.
     *
     *     1.  Image subject: The core product area in the image
     *
     *     2.  Image background: The remaining portion of the image apart from the product subject
     *
     * 2.  Second, the removal targets support the following four types: text, specific names, transparent text blocks, and blemishes. You can use the following examples to clarify your usage requirements and perform targeted operations:
     *
     * ## Effect Comparison
     * | **Removable Objects in Images** | **Original Image** | **Image After Removal** |
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
     * | Specific Names | *   Involving the image subject area
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
     * | Transparent Text Blocks | *   Involving the image subject area
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
     * | Blemishes | *   Involving the image subject area
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
     * Image Translation Plus is designed specifically for e-commerce images. It uses a Mixture of Experts (MOE) architecture and outperforms Image Translation Lite and Pro in translation accuracy for multiple minor languages. We recommend using it for the following 8 language pairs, with more to be supported in the future.
     *
     * @remarks
     * ## Product Introduction
     * Image Translation Plus is designed specifically for e-commerce images. It uses a Mixture of Experts (MOE) architecture and outperforms Image Translation Lite and Pro in translation accuracy for multiple minor languages. We recommend using it for the following language pairs, with more to be supported in the future.
     * Supported language pairs:
     * | **No.** | **Source Language** |  | **Target Language** |  |
     * | --- | --- | --- | --- | --- |
     * |  | Language Code | Language Name | Language Code | Language Name |
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
     * | 12 | en | English | pl | Polish |.
     * ## Common scenarios
     * Main product images and detail images for cross-border e-commerce.
     * ## Functions and features
     * *   **Product body information protection**: Supports custom selection of whether to translate text on the product body. This helps protect body information such as embedded product names from being translated.
     *
     * *   **Brand name protection**: Supports custom selection of whether to translate brand names on images. This helps protect brand name information from being translated.
     *
     * *   **Translation intervention**: Supports custom translation results, including do-not-translate (ABC-ABC), specified translation (ABC-DEF), and no translation (ABC-empty value). This is commonly used for brand name protection scenarios. Simply pass the corresponding intervention glossary ID when calling the API to meet your translation needs in different scenarios. You can upload up to 100,000 intervention terms. If you need more, contact the platform for assistance.
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
     * Image Translation Plus is designed specifically for e-commerce images. It uses a Mixture of Experts (MOE) architecture and outperforms Image Translation Lite and Pro in translation accuracy for multiple minor languages. We recommend using it for the following 8 language pairs, with more to be supported in the future.
     *
     * @remarks
     * ## Product Introduction
     * Image Translation Plus is designed specifically for e-commerce images. It uses a Mixture of Experts (MOE) architecture and outperforms Image Translation Lite and Pro in translation accuracy for multiple minor languages. We recommend using it for the following language pairs, with more to be supported in the future.
     * Supported language pairs:
     * | **No.** | **Source Language** |  | **Target Language** |  |
     * | --- | --- | --- | --- | --- |
     * |  | Language Code | Language Name | Language Code | Language Name |
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
     * | 12 | en | English | pl | Polish |.
     * ## Common scenarios
     * Main product images and detail images for cross-border e-commerce.
     * ## Functions and features
     * *   **Product body information protection**: Supports custom selection of whether to translate text on the product body. This helps protect body information such as embedded product names from being translated.
     *
     * *   **Brand name protection**: Supports custom selection of whether to translate brand names on images. This helps protect brand name information from being translated.
     *
     * *   **Translation intervention**: Supports custom translation results, including do-not-translate (ABC-ABC), specified translation (ABC-DEF), and no translation (ABC-empty value). This is commonly used for brand name protection scenarios. Simply pass the corresponding intervention glossary ID when calling the API to meet your translation needs in different scenarios. You can upload up to 100,000 intervention terms. If you need more, contact the platform for assistance.
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
     * The Image Translation Pro version is specifically designed for e-commerce images, integrating multimodal large model technology to achieve more accurate understanding of images, significantly improving translation quality, and continuously expanding and optimizing multilingual translation capabilities. It supports over 100 language pairs (including bridged translations).
     *
     * @remarks
     * ## Product Introduction
     * The Image Translation Pro version is specifically designed for e-commerce images, integrating multimodal large model technology to achieve more accurate understanding of images, significantly improving translation quality, and continuously expanding and optimizing multilingual translation capabilities. It supports over 100 language pairs (including bridged translations).
     * ## Applicable Scenarios
     * E-commerce product images, marketing images, and images for various other scenarios
     * ## Features
     * - **Product Subject Information Protection**: Supports custom selection of whether to translate text on the product subject, helping you protect subject information from being translated, such as embedded product names.
     * - **Post-translation Secondary Editing**: Supports custom selection of whether to return layout information such as text position, font, and color. This can be used for secondary editing when integrating with an image editor. The editor SDK package is not yet publicly available; please follow platform notifications.
     * - **Brand Name Protection**: Supports custom selection of whether to translate brand names on images, helping you protect brand name information from being translated.
     * - **Translation Intervention Support**: Allows customization of translation results, including do-not-translate (ABC-ABC), specified translation (ABC-DEF), and no translation (ABC-empty value). Commonly used for brand name protection scenarios. Simply pass the corresponding glossary ID when calling the API to achieve this, meeting your translation needs in different scenarios. Generally, you can upload up to 100,000 intervention terms. For additional needs, please contact the platform for assistance.
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
     * The Image Translation Pro version is specifically designed for e-commerce images, integrating multimodal large model technology to achieve more accurate understanding of images, significantly improving translation quality, and continuously expanding and optimizing multilingual translation capabilities. It supports over 100 language pairs (including bridged translations).
     *
     * @remarks
     * ## Product Introduction
     * The Image Translation Pro version is specifically designed for e-commerce images, integrating multimodal large model technology to achieve more accurate understanding of images, significantly improving translation quality, and continuously expanding and optimizing multilingual translation capabilities. It supports over 100 language pairs (including bridged translations).
     * ## Applicable Scenarios
     * E-commerce product images, marketing images, and images for various other scenarios
     * ## Features
     * - **Product Subject Information Protection**: Supports custom selection of whether to translate text on the product subject, helping you protect subject information from being translated, such as embedded product names.
     * - **Post-translation Secondary Editing**: Supports custom selection of whether to return layout information such as text position, font, and color. This can be used for secondary editing when integrating with an image editor. The editor SDK package is not yet publicly available; please follow platform notifications.
     * - **Brand Name Protection**: Supports custom selection of whether to translate brand names on images, helping you protect brand name information from being translated.
     * - **Translation Intervention Support**: Allows customization of translation results, including do-not-translate (ABC-ABC), specified translation (ABC-DEF), and no translation (ABC-empty value). Commonly used for brand name protection scenarios. Simply pass the corresponding glossary ID when calling the API to achieve this, meeting your translation needs in different scenarios. Generally, you can upload up to 100,000 intervention terms. For additional needs, please contact the platform for assistance.
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
     * Image Translation is designed specifically for e-commerce images. It supports more than 100 language directions, accurately processes complex text layouts within images, and ensures that translated content matches the image content. This helps e-commerce platforms and developers easily achieve multilingual conversion and rendering of image content.
     *
     * @remarks
     * ## Product Introduction
     * Image Translation is designed specifically for e-commerce images. It supports more than 100 language directions, accurately processes complex text layouts within images, and ensures that translated content matches the image content. This helps e-commerce platforms and developers easily achieve multilingual conversion and rendering of image content.
     * ## Common scenarios
     * E-commerce product images, marketing images, and images for various other scenarios.
     * ## Functions and features
     * - **Product subject information protection**: You can choose whether to translate text on the product subject. This helps protect subject information from being translated, such as embedded information like product names.
     * - **Brand name protection**: You can choose whether to translate brand names on images. This helps protect brand name information from being translated.
     * - **Translation intervention support**: You can customize translation results, including keeping text untranslated (ABC-ABC), specifying translations (ABC-DEF), or removing text (ABC-empty value). This is commonly used for brand name protection and similar scenarios. Pass the corresponding intervention glossary ID when calling the API to meet your translation needs in different scenarios. You can upload up to 100,000 intervention terms. If you need more, contact the platform for assistance.
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
     * Image Translation is designed specifically for e-commerce images. It supports more than 100 language directions, accurately processes complex text layouts within images, and ensures that translated content matches the image content. This helps e-commerce platforms and developers easily achieve multilingual conversion and rendering of image content.
     *
     * @remarks
     * ## Product Introduction
     * Image Translation is designed specifically for e-commerce images. It supports more than 100 language directions, accurately processes complex text layouts within images, and ensures that translated content matches the image content. This helps e-commerce platforms and developers easily achieve multilingual conversion and rendering of image content.
     * ## Common scenarios
     * E-commerce product images, marketing images, and images for various other scenarios.
     * ## Functions and features
     * - **Product subject information protection**: You can choose whether to translate text on the product subject. This helps protect subject information from being translated, such as embedded information like product names.
     * - **Brand name protection**: You can choose whether to translate brand names on images. This helps protect brand name information from being translated.
     * - **Translation intervention support**: You can customize translation results, including keeping text untranslated (ABC-ABC), specifying translations (ABC-DEF), or removing text (ABC-empty value). This is commonly used for brand name protection and similar scenarios. Pass the corresponding intervention glossary ID when calling the API to meet your translation needs in different scenarios. You can upload up to 100,000 intervention terms. If you need more, contact the platform for assistance.
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
     * Supports automatic language detection for 24 languages. Applicable to short text such as search queries, titles, and conversations.
     *
     * @remarks
     * ## Product Introduction
     * Supports automatic language detection for 24 languages. Applicable to short text such as search queries, titles, and conversations.
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
     * Supports automatic language detection for 24 languages. Applicable to short text such as search queries, titles, and conversations.
     *
     * @remarks
     * ## Product Introduction
     * Supports automatic language detection for 24 languages. Applicable to short text such as search queries, titles, and conversations.
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
     * 物料陈列检测.
     *
     * @remarks
     * ## **适用场景**
     * -   **门店营销物料合规巡检**：自动判定门店内是否按总部下发的标准陈列指引摆放 / 张贴指定营销物料（功能台卡、海报、门型展架等），识别「未摆放、摆放错误、内容不符」等典型问题。
     *
     * -   **新品 / 活动期素材落地核验**：新品发布或大促活动期间，对门店实拍图中的活动物料是否已按要求上架进行批量自动核验，替代人工抽检。
     *
     * -   **双图比对与单图检测自适应**：同一接口同时支持「参考图 + 目标图」双图比对（模式 A）与「仅目标图」单图检测（模式 B），根据是否传入 `ImageRefer` 自动切换，调用方无需区分调用方式。
     *
     * ## **功能介绍**
     * -   **多模式智能路由**：内置物料类型解析能力，基于 `Rules` 自然语言文本自动识别目标物料类型，路由至对应的素材检测链路；调用方仅需传入图像 URL 与规则文本。目前已支持「功能台卡」「海报」「门型展架」「其他素材」4 套检测项路由，后续将持续增加细分营销物料类型的检测链路。
     *
     * -   **MLLM 语义级理解 + 规则结构化协同**：采用多模态大模型完成物料识别、内容比对、文字 OCR 等语义级理解，配合规则清洗与结构化模型将自然语言规则拆解为可逐条判定的步骤（S1 / S2…），在保证准确率的同时兼顾规则灵活性与可追溯性。
     *
     * -   **结构化审核结论输出**：输出统一为 `Result.OverallResult` + `Result.Steps[]` + `Result.Evidence` 的结构，整体结论由各步骤逻辑 AND 得出，每条步骤独立可见，便于直接驱动下游业务系统并支持 case 级人审追溯。
     *
     * -   **支持的输入格式**：当前支持公网可访问的图像 URL；支持单图（模式 B）与双图（模式 A）两种调用形态，输出结构完全一致。
     *
     * ## **调用方式**
     * -   **同步调用**：单次请求即返回检测结果，无需轮询。响应为 `Code` / `Message` / `RequestId` / `Success` / `Data` 统一信封。
     *
     * -   **鉴权与签名**：经 Aidge 网关调用，鉴权、签名与公共参数遵循平台统一接入方式。具体请求路径以正式发布的接口文档为准。
     *
     * -   **超时设置**：建议将请求超时设置为不低于接口的最长响应时间（具体值以正式发布为准）。
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
     * 物料陈列检测.
     *
     * @remarks
     * ## **适用场景**
     * -   **门店营销物料合规巡检**：自动判定门店内是否按总部下发的标准陈列指引摆放 / 张贴指定营销物料（功能台卡、海报、门型展架等），识别「未摆放、摆放错误、内容不符」等典型问题。
     *
     * -   **新品 / 活动期素材落地核验**：新品发布或大促活动期间，对门店实拍图中的活动物料是否已按要求上架进行批量自动核验，替代人工抽检。
     *
     * -   **双图比对与单图检测自适应**：同一接口同时支持「参考图 + 目标图」双图比对（模式 A）与「仅目标图」单图检测（模式 B），根据是否传入 `ImageRefer` 自动切换，调用方无需区分调用方式。
     *
     * ## **功能介绍**
     * -   **多模式智能路由**：内置物料类型解析能力，基于 `Rules` 自然语言文本自动识别目标物料类型，路由至对应的素材检测链路；调用方仅需传入图像 URL 与规则文本。目前已支持「功能台卡」「海报」「门型展架」「其他素材」4 套检测项路由，后续将持续增加细分营销物料类型的检测链路。
     *
     * -   **MLLM 语义级理解 + 规则结构化协同**：采用多模态大模型完成物料识别、内容比对、文字 OCR 等语义级理解，配合规则清洗与结构化模型将自然语言规则拆解为可逐条判定的步骤（S1 / S2…），在保证准确率的同时兼顾规则灵活性与可追溯性。
     *
     * -   **结构化审核结论输出**：输出统一为 `Result.OverallResult` + `Result.Steps[]` + `Result.Evidence` 的结构，整体结论由各步骤逻辑 AND 得出，每条步骤独立可见，便于直接驱动下游业务系统并支持 case 级人审追溯。
     *
     * -   **支持的输入格式**：当前支持公网可访问的图像 URL；支持单图（模式 B）与双图（模式 A）两种调用形态，输出结构完全一致。
     *
     * ## **调用方式**
     * -   **同步调用**：单次请求即返回检测结果，无需轮询。响应为 `Code` / `Message` / `RequestId` / `Success` / `Data` 统一信封。
     *
     * -   **鉴权与签名**：经 Aidge 网关调用，鉴权、签名与公共参数遵循平台统一接入方式。具体请求路径以正式发布的接口文档为准。
     *
     * -   **超时设置**：建议将请求超时设置为不低于接口的最长响应时间（具体值以正式发布为准）。
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
     * An intelligent logistics parcel auditing product built on the synergy of Multimodal Large Language Models (MLLM) and specialized vision algorithms, designed for automated compliance review in the "piece-weight-dimension" stage of e-commerce logistics. The product performs structured auditing across multiple dimensions including bounding box validity, bounding box fit accuracy, and foreign object interference on parcels placed on scanning platforms. It supports different hardware acquisition scenarios such as white background boards and green background boards, and outputs Boolean audit conclusions with Chinese reason descriptions that can be directly integrated into business systems. It is suitable for large-scale, high-concurrency inbound quality inspection pipelines.
     *
     * @remarks
     * ## Product Introduction
     * An intelligent logistics parcel auditing product built on the synergy of Multimodal Large Language Models (MLLM) and specialized vision algorithms, designed for automated compliance review in the "piece-weight-dimension" stage of e-commerce logistics. The product performs structured auditing across multiple dimensions including **bounding box validity, bounding box fit accuracy, and foreign object interference** on parcels placed on scanning platforms. It supports different hardware acquisition scenarios such as white background boards and green background boards, and outputs Boolean audit conclusions with Chinese reason descriptions that can be directly integrated into business systems. It is suitable for large-scale, high-concurrency inbound quality inspection pipelines.
     * ## Applicable Scenarios
     * 1. **Parcel Bounding Box Audit**: Automatically determines whether the operator\\"s manual bounding box constitutes the "minimum valid bounding rectangle" for the parcel, identifying typical issues such as oversized or undersized bounding boxes.
     * 2. **Foreign Object Interference Detection**: Automatically identifies whether non-target objects such as fingers, keyboards, or auxiliary tools have entered the scanning area.
     * 3. **Multi-Acquisition Environment Adaptation**: A single API can handle two common acquisition modes — white background board (blue box) and green background board (blue box + red box) — without requiring the caller to distinguish between scenarios.
     * 4. **Inbound Quality Inspection Pipeline**: Used for automated review in the piece-weight-dimension stage of the logistics warehouse new product inbound SOP, replacing or assisting manual outsourced auditing.
     * Additionally, the product can also be used for general image "box-subject" relationship audit scenarios, such as product photography material review and document scanning quality verification.
     * ## Feature Introduction
     * 1. **Multi-Scenario Intelligent Routing**: The product has a built-in scenario classification capability that can automatically identify the background type (white/green) and bounding box type (none/single box/double box) in the image, and route the request to the corresponding audit sub-process. The caller only needs to provide the image URL without manually specifying the scenario.
     * 2. **MLLM + Specialized CV Model Synergy**: Multimodal large language models are used for semantic-level scene understanding and foreign object recognition, while specialized parcel segmentation and IoU evaluation models are used for pixel-level bounding box fit quantification, ensuring accuracy while controlling inference latency and cost.
     * 3. **Structured Audit Conclusions**: The output is uniformly structured as `result` (Boolean) + `info` (Chinese reason). Supported reason types include "Audit passed", "Audit not passed: bounding box too large", "Audit not passed: bounding box too small", "Audit not passed: foreign object present", etc., facilitating direct integration with downstream business systems.
     * 4. **Supported Input Formats**: Currently supports publicly accessible image URLs.
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
     * An intelligent logistics parcel auditing product built on the synergy of Multimodal Large Language Models (MLLM) and specialized vision algorithms, designed for automated compliance review in the "piece-weight-dimension" stage of e-commerce logistics. The product performs structured auditing across multiple dimensions including bounding box validity, bounding box fit accuracy, and foreign object interference on parcels placed on scanning platforms. It supports different hardware acquisition scenarios such as white background boards and green background boards, and outputs Boolean audit conclusions with Chinese reason descriptions that can be directly integrated into business systems. It is suitable for large-scale, high-concurrency inbound quality inspection pipelines.
     *
     * @remarks
     * ## Product Introduction
     * An intelligent logistics parcel auditing product built on the synergy of Multimodal Large Language Models (MLLM) and specialized vision algorithms, designed for automated compliance review in the "piece-weight-dimension" stage of e-commerce logistics. The product performs structured auditing across multiple dimensions including **bounding box validity, bounding box fit accuracy, and foreign object interference** on parcels placed on scanning platforms. It supports different hardware acquisition scenarios such as white background boards and green background boards, and outputs Boolean audit conclusions with Chinese reason descriptions that can be directly integrated into business systems. It is suitable for large-scale, high-concurrency inbound quality inspection pipelines.
     * ## Applicable Scenarios
     * 1. **Parcel Bounding Box Audit**: Automatically determines whether the operator\\"s manual bounding box constitutes the "minimum valid bounding rectangle" for the parcel, identifying typical issues such as oversized or undersized bounding boxes.
     * 2. **Foreign Object Interference Detection**: Automatically identifies whether non-target objects such as fingers, keyboards, or auxiliary tools have entered the scanning area.
     * 3. **Multi-Acquisition Environment Adaptation**: A single API can handle two common acquisition modes — white background board (blue box) and green background board (blue box + red box) — without requiring the caller to distinguish between scenarios.
     * 4. **Inbound Quality Inspection Pipeline**: Used for automated review in the piece-weight-dimension stage of the logistics warehouse new product inbound SOP, replacing or assisting manual outsourced auditing.
     * Additionally, the product can also be used for general image "box-subject" relationship audit scenarios, such as product photography material review and document scanning quality verification.
     * ## Feature Introduction
     * 1. **Multi-Scenario Intelligent Routing**: The product has a built-in scenario classification capability that can automatically identify the background type (white/green) and bounding box type (none/single box/double box) in the image, and route the request to the corresponding audit sub-process. The caller only needs to provide the image URL without manually specifying the scenario.
     * 2. **MLLM + Specialized CV Model Synergy**: Multimodal large language models are used for semantic-level scene understanding and foreign object recognition, while specialized parcel segmentation and IoU evaluation models are used for pixel-level bounding box fit quantification, ensuring accuracy while controlling inference latency and cost.
     * 3. **Structured Audit Conclusions**: The output is uniformly structured as `result` (Boolean) + `info` (Chinese reason). Supported reason types include "Audit passed", "Audit not passed: bounding box too large", "Audit not passed: bounding box too small", "Audit not passed: foreign object present", etc., facilitating direct integration with downstream business systems.
     * 4. **Supported Input Formats**: Currently supports publicly accessible image URLs.
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
     * API name on the POP gateway: QueryAsyncTaskResult.
     *
     * @remarks
     * API name on the POP gateway: QueryAsyncTaskResult.
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
     * API name on the POP gateway: QueryAsyncTaskResult.
     *
     * @remarks
     * API name on the POP gateway: QueryAsyncTaskResult.
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
     * Detects whether an image contains a size chart. (Synchronous).
     * # 2. Common scenarios
     * **Batch processing scenarios:** Detect images that contain size charts from a batch of images for further translation or extraction. The size chart detection service helps reduce costs.
     * # 3. Functions and features
     * The size chart detection service uses image recognition technology to automatically determine whether an input image contains a size chart. You provide an image URL, and the system returns a detection result (True/False) indicating whether the image is a size chart.
     * You can customize the confidence threshold (default: 0.4) and flexibly adjust the detection sensitivity based on your business accuracy requirements. A lower threshold results in more lenient detection, while a higher threshold results in stricter detection. The API processes a single image per request and is suitable for integration into automated batch workflows for sequential invocation.
     * # 4. Effect comparison
     * | **Input image** | **Confidence** | **Output result** |
     * | --- | --- | --- |
     * | ![image.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/4jKqm0bAebrKLnw1/img/0a914347-2acb-4b94-bf07-86aab2b31279.png) | 0.4 | true |
     * | ![O1CN01ZjViRX1rdaL6QDFNo_!!6000000005654-0-tps-2048-2048.webp](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/4jKqm0bAebrKLnw1/img/ab29b032-139a-4b22-9371-b387581559b7.webp) | 0.4 | false |.
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
     * Detects whether an image contains a size chart. (Synchronous).
     * # 2. Common scenarios
     * **Batch processing scenarios:** Detect images that contain size charts from a batch of images for further translation or extraction. The size chart detection service helps reduce costs.
     * # 3. Functions and features
     * The size chart detection service uses image recognition technology to automatically determine whether an input image contains a size chart. You provide an image URL, and the system returns a detection result (True/False) indicating whether the image is a size chart.
     * You can customize the confidence threshold (default: 0.4) and flexibly adjust the detection sensitivity based on your business accuracy requirements. A lower threshold results in more lenient detection, while a higher threshold results in stricter detection. The API processes a single image per request and is suitable for integration into automated batch workflows for sequential invocation.
     * # 4. Effect comparison
     * | **Input image** | **Confidence** | **Output result** |
     * | --- | --- | --- |
     * | ![image.png](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/4jKqm0bAebrKLnw1/img/0a914347-2acb-4b94-bf07-86aab2b31279.png) | 0.4 | true |
     * | ![O1CN01ZjViRX1rdaL6QDFNo_!!6000000005654-0-tps-2048-2048.webp](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/4jKqm0bAebrKLnw1/img/ab29b032-139a-4b22-9371-b387581559b7.webp) | 0.4 | false |.
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
     * Intelligently extracts structured information such as size charts and package weight/dimension data from images by using a multimodal large language model. (Asynchronous).
     *
     * @remarks
     * ## Product Introduction
     * Intelligently extracts structured information such as size charts and package weight/dimension data from images by using a multimodal large language model. (Asynchronous).
     * ## Common scenarios
     * *   Size charts: Extracts size charts from apparel categories into text.
     *
     * *   Package weight/dimensions: Extracts package weight and dimension information from images.
     * ## Functions and features
     * The size chart extraction service is based on a multimodal large language model. It automatically recognizes size chart or package weight/dimension information in images and converts it into structured text output. You provide an image URL, and the system processes the request as an asynchronous task and returns the extracted structured data. You can use the ColumnNameList parameter to specify the column names to recognize (such as Size, Bust, and Length) for precise targeted extraction. You can also use the LanguageModel parameter to control the output language. Valid values: cn (Chinese) and en (English). If you leave this parameter empty, the original language is retained. This service is applicable to scenarios such as converting apparel size charts to text and batch structuring of product weight/dimension information.
     * Core capabilities: Provide an image URL and optional column name configurations as input, and receive structured data of size charts or package weight/dimensions from the image as output. The API uses an asynchronous task mode (background: true). After submission, a task ID is returned. Poll for the final result. This mode is suitable for processing complex images or high-volume calls.
     * ## Comparison
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
     * } |.
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
     * Intelligently extracts structured information such as size charts and package weight/dimension data from images by using a multimodal large language model. (Asynchronous).
     *
     * @remarks
     * ## Product Introduction
     * Intelligently extracts structured information such as size charts and package weight/dimension data from images by using a multimodal large language model. (Asynchronous).
     * ## Common scenarios
     * *   Size charts: Extracts size charts from apparel categories into text.
     *
     * *   Package weight/dimensions: Extracts package weight and dimension information from images.
     * ## Functions and features
     * The size chart extraction service is based on a multimodal large language model. It automatically recognizes size chart or package weight/dimension information in images and converts it into structured text output. You provide an image URL, and the system processes the request as an asynchronous task and returns the extracted structured data. You can use the ColumnNameList parameter to specify the column names to recognize (such as Size, Bust, and Length) for precise targeted extraction. You can also use the LanguageModel parameter to control the output language. Valid values: cn (Chinese) and en (English). If you leave this parameter empty, the original language is retained. This service is applicable to scenarios such as converting apparel size charts to text and batch structuring of product weight/dimension information.
     * Core capabilities: Provide an image URL and optional column name configurations as input, and receive structured data of size charts or package weight/dimensions from the image as output. The API uses an asynchronous task mode (background: true). After submission, a task ID is returned. Poll for the final result. This mode is suitable for processing complex images or high-volume calls.
     * ## Comparison
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
     * } |.
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
     * Correct errors in search terms and titles.
     *
     * @remarks
     * ## Product Introduction
     * Corrects errors in search terms and titles. Currently supports the following 14 languages:
     * | No. | Language Name (English) | Language Code | Language Name (Chinese) |
     * |------|------------------------|------------|------------------------|
     * | 1 | Arabic | ar | Arabic |
     * | 2 | German | de | German |
     * | 3 | English | en | English |
     * | 4 | Spanish | es | Spanish |
     * | 5 | French | fr | French |
     * | 6 | Hebrew | he | Hebrew |
     * | 7 | Italian | it | Italian |
     * | 8 | Japanese | ja | Japanese |
     * | 9 | Korean | ko | Korean |
     * | 10 | Dutch | nl | Dutch |
     * | 11 | Polish | pl | Polish |
     * | 12 | Portuguese | pt | Portuguese (Brazil) |
     * | 13 | Russian | ru | Russian |
     * | 14 | Ukrainian | uk | Ukrainian |
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
     * Correct errors in search terms and titles.
     *
     * @remarks
     * ## Product Introduction
     * Corrects errors in search terms and titles. Currently supports the following 14 languages:
     * | No. | Language Name (English) | Language Code | Language Name (Chinese) |
     * |------|------------------------|------------|------------------------|
     * | 1 | Arabic | ar | Arabic |
     * | 2 | German | de | German |
     * | 3 | English | en | English |
     * | 4 | Spanish | es | Spanish |
     * | 5 | French | fr | French |
     * | 6 | Hebrew | he | Hebrew |
     * | 7 | Italian | it | Italian |
     * | 8 | Japanese | ja | Japanese |
     * | 9 | Korean | ko | Korean |
     * | 10 | Dutch | nl | Dutch |
     * | 11 | Polish | pl | Polish |
     * | 12 | Portuguese | pt | Portuguese (Brazil) |
     * | 13 | Russian | ru | Russian |
     * | 14 | Ukrainian | uk | Ukrainian |
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
     * Marco MT is an e-commerce translation model trained on over 1 billion high-quality bilingual sentence pairs. The model is continuously optimized for e-commerce-specific terminology such as brands, models, materials, and attributes. It supports translation between more than 100 language pairs (including bridged translations), especially Chinese-English, Chinese-multilingual, and English-multilingual translations. It supports language detection for 24 language directions. If you do not specify a source language, automatic detection is performed.
     *
     * @remarks
     * ## Product Introduction
     * Marco MT is an e-commerce translation model trained on over 1 billion high-quality bilingual sentence pairs. The model is continuously optimized for e-commerce-specific terminology such as brands, models, materials, and attributes. It supports translation between more than 100 language pairs (including bridged translations), especially Chinese-English, Chinese-multilingual, and English-multilingual translations. It supports language detection for 24 language directions. If you do not specify a source language, automatic detection is performed.
     * ## Common scenarios
     * - Product titles: Marco MT can accurately translate phrases, keywords, and trending terms in product titles into the target language, improving product visibility on e-commerce platforms.
     * - Product descriptions: Product descriptions are typically long with diverse and complex formatting. Marco MT supports long text translation and HTML format, delivering excellent translation quality and format preservation.
     * - Product attributes: Product attribute terms are typically short and may contain e-commerce-specific terms such as model numbers and specifications.
     * - Customer service conversations: In customer service scenarios, Marco MT can handle issues such as missing context and typos, and supports polite expressions for certain language directions.
     * Marco MT can also be used for general-purpose translation scenarios such as office work, meetings, and daily conversations.
     * ## Features
     * - **Supported language directions** Marco MT supports translation between more than 100 languages and language detection for 23 languages. For specific language directions, refer to the language mapping table in Section 5.6.
     * - **Ultra-low hallucination rate and high-speed inference** Marco MT is a large language model with preference alignment for translation scenarios. Compared with general-purpose large language models, it delivers faster translation inference and an extremely low hallucination rate, making it especially suitable for large-scale invocation scenarios.
     * - **Supported text format types** Currently supports text and html text types.
     * - **Translation intervention** Supports custom translation results, including do-not-translate (ABC→ABC), specified translation (ABC→DEF), and skip translation (ABC→empty value). This is commonly used for brand name protection. Simply pass the corresponding intervention glossary ID when calling the API to meet your translation needs across different scenarios. You can upload up to 100,000 intervention terms. If you need more, contact the platform for assistance.
     * ## Translation quality comparison
     * | **Source text** | **Aidge translation** | **Other translation product 1** | **Other translation product 2** | **Aidge translation advantage** |
     * |----------|---------------|-----------------------|-----------------------|---------------------|
     * | 75mm 4Pin 0.38A GA81S2U 12V GTX 960 Cooling Fan for Zotac GTX960 Graphics Card Cooling Fan | 75mm 4Pin 0.38A GA81S2U 12V GTX 960, ventilador de enfriamiento para tarjeta gráfica Zotac GTX960. | Ventilador de refrigeración de 75mm 4Pin 0.38A GA81S2U 12V para la tarjeta gráfica Zotac GTX960 Ventilador de enfriamiento GTX 960. | Ventilador de refrigeración para tarjeta gráfica Zotac GTX960, 75mm, 4 pines, 0,38A, GA81S2U, 12V, GTX 960 | Clearer product subject |
     * | New Arrival Classic Style Luxury Brand 6 Hands Swiss Automatic Mechanical Men\\"s Business Steel Watch | Nueva llegada, reloj mecánico automático de lujo con 6 manecillas, estilo clásico, de acero para hombres de negocios | Nueva Llegada Reloj De Acero de Negocios para Hombre con Mecanismo Automático Suizo y 6 Agujas de Estilo Clásico de Marca de Lujo. | Reloj de acero de negocios para hombre, mecánico automático suizo, marca de lujo, estilo clásico, 6 manos, nueva llegada | More complete sentence structure, clearer expression, and more reasonable segmentation |
     * | Men Key Bag Genuine Cow Leather Buckets Key Cases Pouch Zipper Keychain Auto Car Key Case Women Home Key Holder Wallet | Sac à clés pour hommes en cuir de vache véritable, étuis à clés, pochette à fermeture éclair, porte-clés, étui à clé de voiture, porte-clés pour femmes, organisateur de portefeuille | Porte-clés sac en cuir de vache véritable, étuis à clés en forme de seau, pochette à fermeture éclair, porte-clés auto pour voiture, étui à clés pour femmes, organisateur de clés de maison, portefeuille. | Hommes porte-clés en cuir de vache véritable sac/pochette fermature éclair porte-clés Auto voiture porte-clés femmes maison porte-clés organisateur portefeuille | Clearer and more accurate product subject description. The product is a "key bag" rather than a "keychain." Other translations may cause ambiguity about the product subject |.
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
     * Marco MT is an e-commerce translation model trained on over 1 billion high-quality bilingual sentence pairs. The model is continuously optimized for e-commerce-specific terminology such as brands, models, materials, and attributes. It supports translation between more than 100 language pairs (including bridged translations), especially Chinese-English, Chinese-multilingual, and English-multilingual translations. It supports language detection for 24 language directions. If you do not specify a source language, automatic detection is performed.
     *
     * @remarks
     * ## Product Introduction
     * Marco MT is an e-commerce translation model trained on over 1 billion high-quality bilingual sentence pairs. The model is continuously optimized for e-commerce-specific terminology such as brands, models, materials, and attributes. It supports translation between more than 100 language pairs (including bridged translations), especially Chinese-English, Chinese-multilingual, and English-multilingual translations. It supports language detection for 24 language directions. If you do not specify a source language, automatic detection is performed.
     * ## Common scenarios
     * - Product titles: Marco MT can accurately translate phrases, keywords, and trending terms in product titles into the target language, improving product visibility on e-commerce platforms.
     * - Product descriptions: Product descriptions are typically long with diverse and complex formatting. Marco MT supports long text translation and HTML format, delivering excellent translation quality and format preservation.
     * - Product attributes: Product attribute terms are typically short and may contain e-commerce-specific terms such as model numbers and specifications.
     * - Customer service conversations: In customer service scenarios, Marco MT can handle issues such as missing context and typos, and supports polite expressions for certain language directions.
     * Marco MT can also be used for general-purpose translation scenarios such as office work, meetings, and daily conversations.
     * ## Features
     * - **Supported language directions** Marco MT supports translation between more than 100 languages and language detection for 23 languages. For specific language directions, refer to the language mapping table in Section 5.6.
     * - **Ultra-low hallucination rate and high-speed inference** Marco MT is a large language model with preference alignment for translation scenarios. Compared with general-purpose large language models, it delivers faster translation inference and an extremely low hallucination rate, making it especially suitable for large-scale invocation scenarios.
     * - **Supported text format types** Currently supports text and html text types.
     * - **Translation intervention** Supports custom translation results, including do-not-translate (ABC→ABC), specified translation (ABC→DEF), and skip translation (ABC→empty value). This is commonly used for brand name protection. Simply pass the corresponding intervention glossary ID when calling the API to meet your translation needs across different scenarios. You can upload up to 100,000 intervention terms. If you need more, contact the platform for assistance.
     * ## Translation quality comparison
     * | **Source text** | **Aidge translation** | **Other translation product 1** | **Other translation product 2** | **Aidge translation advantage** |
     * |----------|---------------|-----------------------|-----------------------|---------------------|
     * | 75mm 4Pin 0.38A GA81S2U 12V GTX 960 Cooling Fan for Zotac GTX960 Graphics Card Cooling Fan | 75mm 4Pin 0.38A GA81S2U 12V GTX 960, ventilador de enfriamiento para tarjeta gráfica Zotac GTX960. | Ventilador de refrigeración de 75mm 4Pin 0.38A GA81S2U 12V para la tarjeta gráfica Zotac GTX960 Ventilador de enfriamiento GTX 960. | Ventilador de refrigeración para tarjeta gráfica Zotac GTX960, 75mm, 4 pines, 0,38A, GA81S2U, 12V, GTX 960 | Clearer product subject |
     * | New Arrival Classic Style Luxury Brand 6 Hands Swiss Automatic Mechanical Men\\"s Business Steel Watch | Nueva llegada, reloj mecánico automático de lujo con 6 manecillas, estilo clásico, de acero para hombres de negocios | Nueva Llegada Reloj De Acero de Negocios para Hombre con Mecanismo Automático Suizo y 6 Agujas de Estilo Clásico de Marca de Lujo. | Reloj de acero de negocios para hombre, mecánico automático suizo, marca de lujo, estilo clásico, 6 manos, nueva llegada | More complete sentence structure, clearer expression, and more reasonable segmentation |
     * | Men Key Bag Genuine Cow Leather Buckets Key Cases Pouch Zipper Keychain Auto Car Key Case Women Home Key Holder Wallet | Sac à clés pour hommes en cuir de vache véritable, étuis à clés, pochette à fermeture éclair, porte-clés, étui à clé de voiture, porte-clés pour femmes, organisateur de portefeuille | Porte-clés sac en cuir de vache véritable, étuis à clés en forme de seau, pochette à fermeture éclair, porte-clés auto pour voiture, étui à clés pour femmes, organisateur de clés de maison, portefeuille. | Hommes porte-clés en cuir de vache véritable sac/pochette fermature éclair porte-clés Auto voiture porte-clés femmes maison porte-clés organisateur portefeuille | Clearer and more accurate product subject description. The product is a "key bag" rather than a "keychain." Other translations may cause ambiguity about the product subject |.
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
     * Provides a one-stop AI-powered image processing service for e-commerce sellers. Orchestrates seven atomic capabilities — element detection, intelligent matting, intelligent removal, Image Translation Pro, image expansion, intelligent cropping, and HD upscaling — into an image processing workflow. Upload an image once, select the desired capabilities, and complete multiple image optimizations sequentially in a single call to produce product images that meet listing platform requirements. (Asynchronous).
     *
     * @remarks
     * # 1. Product Introduction
     * A one-stop AI-powered image processing service for e-commerce sellers. Orchestrates seven atomic capabilities — element detection, intelligent matting, intelligent removal, Image Translation Pro, image expansion, intelligent cropping, and HD upscaling — into an image processing workflow. Upload an image once, select the desired capabilities, and complete multiple image optimizations sequentially in a single call to produce product images that meet listing platform requirements. (Asynchronous).
     * # 2. Common scenarios
     * Applicable to batch optimization of product images for cross-platform listing scenarios. Adapts source product images into main images, SKU images, and detail images required by listing platforms. Supported capabilities include:
     * *   Detecting low-quality images that contain text, watermarks, logos, or overlay patches, and allowing users to filter images that require processing
     *
     * *   Removing non-compliant elements such as watermarks, logos, overlay patches, and Chinese text from original images
     *
     * *   Removing the background around the product subject edges
     *
     * *   Translating text within images into other languages
     *
     * *   Expanding images to other dimensions (by ratio, size, or other methods) with automatic background completion
     *
     * *   Cropping images to specified dimensions
     *
     * *   Upscaling image resolution by a specified factor.
     * # 3. Features
     * Provide a product image URL and use the Ability parameter to select the AI capability combination to invoke (1 = intelligent element detection, 2 = intelligent matting, 3 = intelligent removal, 4 = Image Translation Pro, 5 = image expansion, 6 = intelligent cropping, 7 = HD upscaling). The system executes the selected capabilities sequentially in a preset order. Because intelligent element detection helps users determine whether an image contains certain specified elements, and the presence of elements affects subsequent AI capability selection, an additional input is provided that allows users to either filter images out of or retain images in the subsequent AI processing pipeline.
     * ![ai-pipeline-flowchart.svg](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/NpQlK5jRe9w5jqDv/img/bddb522a-0795-4b5c-b25d-10e933426367.svg)
     * Each AI capability is described as follows:
     * 1.  **Intelligent element detection:** An element detection capability designed for e-commerce images. Detects text, logos, watermarks, and text-bearing color blocks in both the subject and background of an image, and returns Boolean detection results. Allows users to filter images based on detection results (for example, process only images that contain watermarks). Works in conjunction with subsequent capabilities — first identifies the types of elements that need optimization, then precisely executes removal and other operations.
     *
     * 2.  **Intelligent matting:** Automatically identifies the product subject in an image and precisely separates the subject from the background. Based on deep learning models, supports accurate segmentation of complex edges such as hair strands and transparent objects. Outputs images with a transparent or white background, supports custom background colors and target dimension cropping, and directly generates product display images that comply with e-commerce platform specifications.
     *
     * 3.  **Intelligent removal:** Automatically detects and removes non-compliant elements from e-commerce images, including text, specific names (brand/store names), transparent text blocks, and overlay patches. Supports specifying removal of elements in the subject area or non-subject area separately, and also supports precise removal area specification through the Mask parameter for efficient compliance cleanup of large batches of images.
     *
     * 4.  **Image Translation Pro:** Leverages multimodal foundation model technology to translate text in images into a target language and render it directly at the corresponding position in the original image. Supports more than 100 language pairs. Provides product subject text protection, brand name protection, and translation intervention glossaries to prevent mistranslation of embedded product information. After translation, returns layout information such as text position, font, and color for secondary editing.
     *
     * 5.  **Intelligent image expansion:** Expands the image canvas using AI generation technology to broaden the image view without cropping the subject. Supports multiple expansion methods: by aspect ratio (1:1, 3:4, 4:3, 9:16, 16:9), by horizontal/vertical scaling ratio (1.0× to 3.0×), or by pixel offset in the up, down, left, and right directions. AI automatically generates naturally transitioning background content.
     *
     * 6.  **Intelligent cropping:** Intelligently crops images to specified dimensions, automatically identifies the subject area, and precisely preserves core content. Supports custom output width and height (100 to 5000 pixels) to meet the image dimension requirements of different e-commerce platforms and ad placements, ensuring the subject remains prominent and the composition stays balanced after cropping.
     *
     * 7.  **HD upscaling:** Enhances details and reduces noise while upscaling images. Supports 2× to 4× upscaling. Suitable for improving the clarity of low-resolution product images and optimizing visual presentation. Supports output in PNG, JPG, BMP, and other formats.
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
     * *   HD upscaling | ![R2.jpeg](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/NpQlK5jRe9w5jqDv/img/95d29e79-8622-45fb-b284-cd580fe40ea0.jpeg) |.
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
     * Provides a one-stop AI-powered image processing service for e-commerce sellers. Orchestrates seven atomic capabilities — element detection, intelligent matting, intelligent removal, Image Translation Pro, image expansion, intelligent cropping, and HD upscaling — into an image processing workflow. Upload an image once, select the desired capabilities, and complete multiple image optimizations sequentially in a single call to produce product images that meet listing platform requirements. (Asynchronous).
     *
     * @remarks
     * # 1. Product Introduction
     * A one-stop AI-powered image processing service for e-commerce sellers. Orchestrates seven atomic capabilities — element detection, intelligent matting, intelligent removal, Image Translation Pro, image expansion, intelligent cropping, and HD upscaling — into an image processing workflow. Upload an image once, select the desired capabilities, and complete multiple image optimizations sequentially in a single call to produce product images that meet listing platform requirements. (Asynchronous).
     * # 2. Common scenarios
     * Applicable to batch optimization of product images for cross-platform listing scenarios. Adapts source product images into main images, SKU images, and detail images required by listing platforms. Supported capabilities include:
     * *   Detecting low-quality images that contain text, watermarks, logos, or overlay patches, and allowing users to filter images that require processing
     *
     * *   Removing non-compliant elements such as watermarks, logos, overlay patches, and Chinese text from original images
     *
     * *   Removing the background around the product subject edges
     *
     * *   Translating text within images into other languages
     *
     * *   Expanding images to other dimensions (by ratio, size, or other methods) with automatic background completion
     *
     * *   Cropping images to specified dimensions
     *
     * *   Upscaling image resolution by a specified factor.
     * # 3. Features
     * Provide a product image URL and use the Ability parameter to select the AI capability combination to invoke (1 = intelligent element detection, 2 = intelligent matting, 3 = intelligent removal, 4 = Image Translation Pro, 5 = image expansion, 6 = intelligent cropping, 7 = HD upscaling). The system executes the selected capabilities sequentially in a preset order. Because intelligent element detection helps users determine whether an image contains certain specified elements, and the presence of elements affects subsequent AI capability selection, an additional input is provided that allows users to either filter images out of or retain images in the subsequent AI processing pipeline.
     * ![ai-pipeline-flowchart.svg](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/NpQlK5jRe9w5jqDv/img/bddb522a-0795-4b5c-b25d-10e933426367.svg)
     * Each AI capability is described as follows:
     * 1.  **Intelligent element detection:** An element detection capability designed for e-commerce images. Detects text, logos, watermarks, and text-bearing color blocks in both the subject and background of an image, and returns Boolean detection results. Allows users to filter images based on detection results (for example, process only images that contain watermarks). Works in conjunction with subsequent capabilities — first identifies the types of elements that need optimization, then precisely executes removal and other operations.
     *
     * 2.  **Intelligent matting:** Automatically identifies the product subject in an image and precisely separates the subject from the background. Based on deep learning models, supports accurate segmentation of complex edges such as hair strands and transparent objects. Outputs images with a transparent or white background, supports custom background colors and target dimension cropping, and directly generates product display images that comply with e-commerce platform specifications.
     *
     * 3.  **Intelligent removal:** Automatically detects and removes non-compliant elements from e-commerce images, including text, specific names (brand/store names), transparent text blocks, and overlay patches. Supports specifying removal of elements in the subject area or non-subject area separately, and also supports precise removal area specification through the Mask parameter for efficient compliance cleanup of large batches of images.
     *
     * 4.  **Image Translation Pro:** Leverages multimodal foundation model technology to translate text in images into a target language and render it directly at the corresponding position in the original image. Supports more than 100 language pairs. Provides product subject text protection, brand name protection, and translation intervention glossaries to prevent mistranslation of embedded product information. After translation, returns layout information such as text position, font, and color for secondary editing.
     *
     * 5.  **Intelligent image expansion:** Expands the image canvas using AI generation technology to broaden the image view without cropping the subject. Supports multiple expansion methods: by aspect ratio (1:1, 3:4, 4:3, 9:16, 16:9), by horizontal/vertical scaling ratio (1.0× to 3.0×), or by pixel offset in the up, down, left, and right directions. AI automatically generates naturally transitioning background content.
     *
     * 6.  **Intelligent cropping:** Intelligently crops images to specified dimensions, automatically identifies the subject area, and precisely preserves core content. Supports custom output width and height (100 to 5000 pixels) to meet the image dimension requirements of different e-commerce platforms and ad placements, ensuring the subject remains prominent and the composition stays balanced after cropping.
     *
     * 7.  **HD upscaling:** Enhances details and reduces noise while upscaling images. Supports 2× to 4× upscaling. Suitable for improving the clarity of low-resolution product images and optimizing visual presentation. Supports output in PNG, JPG, BMP, and other formats.
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
     * *   HD upscaling | ![R2.jpeg](https://alidocs.oss-cn-zhangjiakou.aliyuncs.com/res/NpQlK5jRe9w5jqDv/img/95d29e79-8622-45fb-b284-cd580fe40ea0.jpeg) |.
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
