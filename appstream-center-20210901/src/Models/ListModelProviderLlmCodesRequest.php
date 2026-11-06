<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class ListModelProviderLlmCodesRequest extends Model
{
    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $llmCode;

    /**
     * @var string[]
     */
    public $modelBrands;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $providerName;

    /**
     * @var string
     */
    public $providerTemplateId;

    /**
     * @var bool
     */
    public $recommended;

    /**
     * @var string[]
     */
    public $recommendedLevels;
    protected $_name = [
        'language' => 'Language',
        'llmCode' => 'LlmCode',
        'modelBrands' => 'ModelBrands',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'providerName' => 'ProviderName',
        'providerTemplateId' => 'ProviderTemplateId',
        'recommended' => 'Recommended',
        'recommendedLevels' => 'RecommendedLevels',
    ];

    public function validate()
    {
        if (\is_array($this->modelBrands)) {
            Model::validateArray($this->modelBrands);
        }
        if (\is_array($this->recommendedLevels)) {
            Model::validateArray($this->recommendedLevels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->llmCode) {
            $res['LlmCode'] = $this->llmCode;
        }

        if (null !== $this->modelBrands) {
            if (\is_array($this->modelBrands)) {
                $res['ModelBrands'] = [];
                $n1 = 0;
                foreach ($this->modelBrands as $item1) {
                    $res['ModelBrands'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->providerName) {
            $res['ProviderName'] = $this->providerName;
        }

        if (null !== $this->providerTemplateId) {
            $res['ProviderTemplateId'] = $this->providerTemplateId;
        }

        if (null !== $this->recommended) {
            $res['Recommended'] = $this->recommended;
        }

        if (null !== $this->recommendedLevels) {
            if (\is_array($this->recommendedLevels)) {
                $res['RecommendedLevels'] = [];
                $n1 = 0;
                foreach ($this->recommendedLevels as $item1) {
                    $res['RecommendedLevels'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['LlmCode'])) {
            $model->llmCode = $map['LlmCode'];
        }

        if (isset($map['ModelBrands'])) {
            if (!empty($map['ModelBrands'])) {
                $model->modelBrands = [];
                $n1 = 0;
                foreach ($map['ModelBrands'] as $item1) {
                    $model->modelBrands[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ProviderName'])) {
            $model->providerName = $map['ProviderName'];
        }

        if (isset($map['ProviderTemplateId'])) {
            $model->providerTemplateId = $map['ProviderTemplateId'];
        }

        if (isset($map['Recommended'])) {
            $model->recommended = $map['Recommended'];
        }

        if (isset($map['RecommendedLevels'])) {
            if (!empty($map['RecommendedLevels'])) {
                $model->recommendedLevels = [];
                $n1 = 0;
                foreach ($map['RecommendedLevels'] as $item1) {
                    $model->recommendedLevels[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
