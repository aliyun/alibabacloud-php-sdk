<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\SDK\OpenSearch\V20171225\Models\SearchStrategy\mergeConfig;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\SearchStrategy\searchConfigs;
use AlibabaCloud\Tea\Model;

class SearchStrategy extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $isDefault;

    /**
     * @var mergeConfig
     */
    public $mergeConfig;

    /**
     * @var string
     */
    public $name;

    /**
     * @var searchConfigs[]
     */
    public $searchConfigs;
    protected $_name = [
        'description'   => 'description',
        'isDefault'     => 'isDefault',
        'mergeConfig'   => 'mergeConfig',
        'name'          => 'name',
        'searchConfigs' => 'searchConfigs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->isDefault) {
            $res['isDefault'] = $this->isDefault;
        }
        if (null !== $this->mergeConfig) {
            $res['mergeConfig'] = null !== $this->mergeConfig ? $this->mergeConfig->toMap() : null;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->searchConfigs) {
            $res['searchConfigs'] = [];
            if (null !== $this->searchConfigs && \is_array($this->searchConfigs)) {
                $n = 0;
                foreach ($this->searchConfigs as $item) {
                    $res['searchConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchStrategy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['isDefault'])) {
            $model->isDefault = $map['isDefault'];
        }
        if (isset($map['mergeConfig'])) {
            $model->mergeConfig = mergeConfig::fromMap($map['mergeConfig']);
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['searchConfigs'])) {
            if (!empty($map['searchConfigs'])) {
                $model->searchConfigs = [];
                $n                    = 0;
                foreach ($map['searchConfigs'] as $item) {
                    $model->searchConfigs[$n++] = null !== $item ? searchConfigs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
