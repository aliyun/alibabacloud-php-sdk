<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\SearchStrategy\mergeConfig;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\SearchStrategy\searchConfigs;

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
        'description' => 'description',
        'isDefault' => 'isDefault',
        'mergeConfig' => 'mergeConfig',
        'name' => 'name',
        'searchConfigs' => 'searchConfigs',
    ];

    public function validate()
    {
        if (null !== $this->mergeConfig) {
            $this->mergeConfig->validate();
        }
        if (\is_array($this->searchConfigs)) {
            Model::validateArray($this->searchConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->isDefault) {
            $res['isDefault'] = $this->isDefault;
        }

        if (null !== $this->mergeConfig) {
            $res['mergeConfig'] = null !== $this->mergeConfig ? $this->mergeConfig->toArray($noStream) : $this->mergeConfig;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->searchConfigs) {
            if (\is_array($this->searchConfigs)) {
                $res['searchConfigs'] = [];
                $n1 = 0;
                foreach ($this->searchConfigs as $item1) {
                    $res['searchConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
                $n1 = 0;
                foreach ($map['searchConfigs'] as $item1) {
                    $model->searchConfigs[$n1] = searchConfigs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
