<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ValidateTemplateResponseBody;

use AlibabaCloud\Dara\Model;

class resourceTypes extends Model
{
    /**
     * @var string[]
     */
    public $dataSources;
    /**
     * @var string[]
     */
    public $resources;
    protected $_name = [
        'dataSources' => 'DataSources',
        'resources'   => 'Resources',
    ];

    public function validate()
    {
        if (\is_array($this->dataSources)) {
            Model::validateArray($this->dataSources);
        }
        if (\is_array($this->resources)) {
            Model::validateArray($this->resources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataSources) {
            if (\is_array($this->dataSources)) {
                $res['DataSources'] = [];
                $n1                 = 0;
                foreach ($this->dataSources as $item1) {
                    $res['DataSources'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->resources) {
            if (\is_array($this->resources)) {
                $res['Resources'] = [];
                $n1               = 0;
                foreach ($this->resources as $item1) {
                    $res['Resources'][$n1++] = $item1;
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
        if (isset($map['DataSources'])) {
            if (!empty($map['DataSources'])) {
                $model->dataSources = [];
                $n1                 = 0;
                foreach ($map['DataSources'] as $item1) {
                    $model->dataSources[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Resources'])) {
            if (!empty($map['Resources'])) {
                $model->resources = [];
                $n1               = 0;
                foreach ($map['Resources'] as $item1) {
                    $model->resources[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
