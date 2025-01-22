<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\GetAppConfigResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string[][]
     */
    public $embeddingTypeList;
    /**
     * @var bool[]
     */
    public $frontendConfig;
    /**
     * @var string[][]
     */
    public $libraryDocumentStatusList;
    /**
     * @var string[][]
     */
    public $llmHelperTypeList;
    /**
     * @var string[]
     */
    public $textIndexCategoryList;
    /**
     * @var string[]
     */
    public $vectorIndexCategoryList;
    protected $_name = [
        'embeddingTypeList'         => 'embeddingTypeList',
        'frontendConfig'            => 'frontendConfig',
        'libraryDocumentStatusList' => 'libraryDocumentStatusList',
        'llmHelperTypeList'         => 'llmHelperTypeList',
        'textIndexCategoryList'     => 'textIndexCategoryList',
        'vectorIndexCategoryList'   => 'vectorIndexCategoryList',
    ];

    public function validate()
    {
        if (\is_array($this->embeddingTypeList)) {
            Model::validateArray($this->embeddingTypeList);
        }
        if (\is_array($this->frontendConfig)) {
            Model::validateArray($this->frontendConfig);
        }
        if (\is_array($this->libraryDocumentStatusList)) {
            Model::validateArray($this->libraryDocumentStatusList);
        }
        if (\is_array($this->llmHelperTypeList)) {
            Model::validateArray($this->llmHelperTypeList);
        }
        if (\is_array($this->textIndexCategoryList)) {
            Model::validateArray($this->textIndexCategoryList);
        }
        if (\is_array($this->vectorIndexCategoryList)) {
            Model::validateArray($this->vectorIndexCategoryList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->embeddingTypeList) {
            if (\is_array($this->embeddingTypeList)) {
                $res['embeddingTypeList'] = [];
                $n1                       = 0;
                foreach ($this->embeddingTypeList as $item1) {
                    if (\is_array($item1)) {
                        $res['embeddingTypeList'][$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['embeddingTypeList'][$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        if (null !== $this->frontendConfig) {
            if (\is_array($this->frontendConfig)) {
                $res['frontendConfig'] = [];
                foreach ($this->frontendConfig as $key1 => $value1) {
                    $res['frontendConfig'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->libraryDocumentStatusList) {
            if (\is_array($this->libraryDocumentStatusList)) {
                $res['libraryDocumentStatusList'] = [];
                $n1                               = 0;
                foreach ($this->libraryDocumentStatusList as $item1) {
                    if (\is_array($item1)) {
                        $res['libraryDocumentStatusList'][$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['libraryDocumentStatusList'][$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        if (null !== $this->llmHelperTypeList) {
            if (\is_array($this->llmHelperTypeList)) {
                $res['llmHelperTypeList'] = [];
                $n1                       = 0;
                foreach ($this->llmHelperTypeList as $item1) {
                    if (\is_array($item1)) {
                        $res['llmHelperTypeList'][$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['llmHelperTypeList'][$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        if (null !== $this->textIndexCategoryList) {
            if (\is_array($this->textIndexCategoryList)) {
                $res['textIndexCategoryList'] = [];
                $n1                           = 0;
                foreach ($this->textIndexCategoryList as $item1) {
                    $res['textIndexCategoryList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->vectorIndexCategoryList) {
            if (\is_array($this->vectorIndexCategoryList)) {
                $res['vectorIndexCategoryList'] = [];
                $n1                             = 0;
                foreach ($this->vectorIndexCategoryList as $item1) {
                    $res['vectorIndexCategoryList'][$n1++] = $item1;
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
        if (isset($map['embeddingTypeList'])) {
            if (!empty($map['embeddingTypeList'])) {
                $model->embeddingTypeList = [];
                $n1                       = 0;
                foreach ($map['embeddingTypeList'] as $item1) {
                    if (!empty($item1)) {
                        $model->embeddingTypeList[$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->embeddingTypeList[$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        if (isset($map['frontendConfig'])) {
            if (!empty($map['frontendConfig'])) {
                $model->frontendConfig = [];
                foreach ($map['frontendConfig'] as $key1 => $value1) {
                    $model->frontendConfig[$key1] = $value1;
                }
            }
        }

        if (isset($map['libraryDocumentStatusList'])) {
            if (!empty($map['libraryDocumentStatusList'])) {
                $model->libraryDocumentStatusList = [];
                $n1                               = 0;
                foreach ($map['libraryDocumentStatusList'] as $item1) {
                    if (!empty($item1)) {
                        $model->libraryDocumentStatusList[$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->libraryDocumentStatusList[$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        if (isset($map['llmHelperTypeList'])) {
            if (!empty($map['llmHelperTypeList'])) {
                $model->llmHelperTypeList = [];
                $n1                       = 0;
                foreach ($map['llmHelperTypeList'] as $item1) {
                    if (!empty($item1)) {
                        $model->llmHelperTypeList[$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->llmHelperTypeList[$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        if (isset($map['textIndexCategoryList'])) {
            if (!empty($map['textIndexCategoryList'])) {
                $model->textIndexCategoryList = [];
                $n1                           = 0;
                foreach ($map['textIndexCategoryList'] as $item1) {
                    $model->textIndexCategoryList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['vectorIndexCategoryList'])) {
            if (!empty($map['vectorIndexCategoryList'])) {
                $model->vectorIndexCategoryList = [];
                $n1                             = 0;
                foreach ($map['vectorIndexCategoryList'] as $item1) {
                    $model->vectorIndexCategoryList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
