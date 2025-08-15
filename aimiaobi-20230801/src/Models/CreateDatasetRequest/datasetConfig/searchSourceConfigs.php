<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\CreateDatasetRequest\datasetConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\CreateDatasetRequest\datasetConfig\searchSourceConfigs\searchSourceRequestConfig;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\CreateDatasetRequest\datasetConfig\searchSourceConfigs\searchSourceResponseConfig;

class searchSourceConfigs extends Model
{
    /**
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
     * @var int
     */
    public $size;
    protected $_name = [
        'demoQuery' => 'DemoQuery',
        'searchSourceRequestConfig' => 'SearchSourceRequestConfig',
        'searchSourceResponseConfig' => 'SearchSourceResponseConfig',
        'size' => 'Size',
    ];

    public function validate()
    {
        if (null !== $this->searchSourceRequestConfig) {
            $this->searchSourceRequestConfig->validate();
        }
        if (null !== $this->searchSourceResponseConfig) {
            $this->searchSourceResponseConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->demoQuery) {
            $res['DemoQuery'] = $this->demoQuery;
        }

        if (null !== $this->searchSourceRequestConfig) {
            $res['SearchSourceRequestConfig'] = null !== $this->searchSourceRequestConfig ? $this->searchSourceRequestConfig->toArray($noStream) : $this->searchSourceRequestConfig;
        }

        if (null !== $this->searchSourceResponseConfig) {
            $res['SearchSourceResponseConfig'] = null !== $this->searchSourceResponseConfig ? $this->searchSourceResponseConfig->toArray($noStream) : $this->searchSourceResponseConfig;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
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
