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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\UpdateDatasetRequest\datasetConfig;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\UpdateDatasetRequest\datasetConfig\searchSourceConfigs\searchSourceRequestConfig;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\UpdateDatasetRequest\datasetConfig\searchSourceConfigs\searchSourceResponseConfig;
use AlibabaCloud\Tea\Model;

class searchSourceConfigs extends Model
{
    /**
     * @example 可以搜索到的关键词，用来验证是否可用
     *
     * @var string
     */
    public $demoQuery;

    /**
     * @var searchSourceRequestConfig
     */
    public $searchSourceRequestConfig;

    /**
     * @var searchSourceResponseConfig
     */
    public $searchSourceResponseConfig;

    /**
     * @example 10
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'demoQuery' => 'DemoQuery',
        'searchSourceRequestConfig' => 'SearchSourceRequestConfig',
        'searchSourceResponseConfig' => 'SearchSourceResponseConfig',
        'size' => 'Size',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->demoQuery) {
            $res['DemoQuery'] = $this->demoQuery;
        }
        if (null !== $this->searchSourceRequestConfig) {
            $res['SearchSourceRequestConfig'] = null !== $this->searchSourceRequestConfig ? $this->searchSourceRequestConfig->toMap() : null;
        }
        if (null !== $this->searchSourceResponseConfig) {
            $res['SearchSourceResponseConfig'] = null !== $this->searchSourceResponseConfig ? $this->searchSourceResponseConfig->toMap() : null;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return searchSourceConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DemoQuery'])) {
            $model->demoQuery = $map['DemoQuery'];
        }
        if (isset($map['SearchSourceRequestConfig'])) {
            $model->searchSourceRequestConfig = searchSourceRequestConfig::fromMap($map['SearchSourceRequestConfig']);
        }
        if (isset($map['SearchSourceResponseConfig'])) {
            $model->searchSourceResponseConfig = searchSourceResponseConfig::fromMap($map['SearchSourceResponseConfig']);
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
