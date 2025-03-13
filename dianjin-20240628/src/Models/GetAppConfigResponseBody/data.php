<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\GetAppConfigResponseBody;

use AlibabaCloud\Tea\Model;

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
        'embeddingTypeList' => 'embeddingTypeList',
        'frontendConfig' => 'frontendConfig',
        'libraryDocumentStatusList' => 'libraryDocumentStatusList',
        'llmHelperTypeList' => 'llmHelperTypeList',
        'textIndexCategoryList' => 'textIndexCategoryList',
        'vectorIndexCategoryList' => 'vectorIndexCategoryList',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->embeddingTypeList) {
            $res['embeddingTypeList'] = $this->embeddingTypeList;
        }
        if (null !== $this->frontendConfig) {
            $res['frontendConfig'] = $this->frontendConfig;
        }
        if (null !== $this->libraryDocumentStatusList) {
            $res['libraryDocumentStatusList'] = $this->libraryDocumentStatusList;
        }
        if (null !== $this->llmHelperTypeList) {
            $res['llmHelperTypeList'] = $this->llmHelperTypeList;
        }
        if (null !== $this->textIndexCategoryList) {
            $res['textIndexCategoryList'] = $this->textIndexCategoryList;
        }
        if (null !== $this->vectorIndexCategoryList) {
            $res['vectorIndexCategoryList'] = $this->vectorIndexCategoryList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['embeddingTypeList'])) {
            if (!empty($map['embeddingTypeList'])) {
                $model->embeddingTypeList = $map['embeddingTypeList'];
            }
        }
        if (isset($map['frontendConfig'])) {
            $model->frontendConfig = $map['frontendConfig'];
        }
        if (isset($map['libraryDocumentStatusList'])) {
            if (!empty($map['libraryDocumentStatusList'])) {
                $model->libraryDocumentStatusList = $map['libraryDocumentStatusList'];
            }
        }
        if (isset($map['llmHelperTypeList'])) {
            if (!empty($map['llmHelperTypeList'])) {
                $model->llmHelperTypeList = $map['llmHelperTypeList'];
            }
        }
        if (isset($map['textIndexCategoryList'])) {
            if (!empty($map['textIndexCategoryList'])) {
                $model->textIndexCategoryList = $map['textIndexCategoryList'];
            }
        }
        if (isset($map['vectorIndexCategoryList'])) {
            if (!empty($map['vectorIndexCategoryList'])) {
                $model->vectorIndexCategoryList = $map['vectorIndexCategoryList'];
            }
        }

        return $model;
    }
}
