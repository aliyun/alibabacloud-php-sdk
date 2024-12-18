<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\UpdateDatasetRequest;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\UpdateDatasetRequest\datasetConfig\searchSourceConfigs;
use AlibabaCloud\Tea\Model;

class datasetConfig extends Model
{
    /**
     * @var searchSourceConfigs[]
     */
    public $searchSourceConfigs;
    protected $_name = [
        'searchSourceConfigs' => 'SearchSourceConfigs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->searchSourceConfigs) {
            $res['SearchSourceConfigs'] = [];
            if (null !== $this->searchSourceConfigs && \is_array($this->searchSourceConfigs)) {
                $n = 0;
                foreach ($this->searchSourceConfigs as $item) {
                    $res['SearchSourceConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return datasetConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SearchSourceConfigs'])) {
            if (!empty($map['SearchSourceConfigs'])) {
                $model->searchSourceConfigs = [];
                $n                          = 0;
                foreach ($map['SearchSourceConfigs'] as $item) {
                    $model->searchSourceConfigs[$n++] = null !== $item ? searchSourceConfigs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
