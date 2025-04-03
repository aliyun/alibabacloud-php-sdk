<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\CreateDatasetRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\CreateDatasetRequest\datasetConfig\searchSourceConfigs;

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
        if (\is_array($this->searchSourceConfigs)) {
            Model::validateArray($this->searchSourceConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->searchSourceConfigs) {
            if (\is_array($this->searchSourceConfigs)) {
                $res['SearchSourceConfigs'] = [];
                $n1 = 0;
                foreach ($this->searchSourceConfigs as $item1) {
                    $res['SearchSourceConfigs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SearchSourceConfigs'])) {
            if (!empty($map['SearchSourceConfigs'])) {
                $model->searchSourceConfigs = [];
                $n1 = 0;
                foreach ($map['SearchSourceConfigs'] as $item1) {
                    $model->searchSourceConfigs[$n1++] = searchSourceConfigs::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
