<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryNacosProvidersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryNacosProvidersResponseBody\data\models;

class data extends Model
{
    /**
     * @var string
     */
    public $baseUrl;

    /**
     * @var models[]
     */
    public $models;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $symbol;
    protected $_name = [
        'baseUrl' => 'baseUrl',
        'models' => 'models',
        'name' => 'name',
        'symbol' => 'symbol',
    ];

    public function validate()
    {
        if (\is_array($this->models)) {
            Model::validateArray($this->models);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baseUrl) {
            $res['baseUrl'] = $this->baseUrl;
        }

        if (null !== $this->models) {
            if (\is_array($this->models)) {
                $res['models'] = [];
                $n1 = 0;
                foreach ($this->models as $item1) {
                    $res['models'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->symbol) {
            $res['symbol'] = $this->symbol;
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
        if (isset($map['baseUrl'])) {
            $model->baseUrl = $map['baseUrl'];
        }

        if (isset($map['models'])) {
            if (!empty($map['models'])) {
                $model->models = [];
                $n1 = 0;
                foreach ($map['models'] as $item1) {
                    $model->models[$n1] = models::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['symbol'])) {
            $model->symbol = $map['symbol'];
        }

        return $model;
    }
}
