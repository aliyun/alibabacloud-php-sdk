<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models\ProxyConfig;

use AlibabaCloud\Dara\Model;

class endpoints extends Model
{
    /**
     * @var string
     */
    public $baseUrl;

    /**
     * @var string[]
     */
    public $modelNames;

    /**
     * @var string
     */
    public $modelServiceName;

    /**
     * @var int
     */
    public $weight;
    protected $_name = [
        'baseUrl' => 'baseUrl',
        'modelNames' => 'modelNames',
        'modelServiceName' => 'modelServiceName',
        'weight' => 'weight',
    ];

    public function validate()
    {
        if (\is_array($this->modelNames)) {
            Model::validateArray($this->modelNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baseUrl) {
            $res['baseUrl'] = $this->baseUrl;
        }

        if (null !== $this->modelNames) {
            if (\is_array($this->modelNames)) {
                $res['modelNames'] = [];
                $n1 = 0;
                foreach ($this->modelNames as $item1) {
                    $res['modelNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->modelServiceName) {
            $res['modelServiceName'] = $this->modelServiceName;
        }

        if (null !== $this->weight) {
            $res['weight'] = $this->weight;
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

        if (isset($map['modelNames'])) {
            if (!empty($map['modelNames'])) {
                $model->modelNames = [];
                $n1 = 0;
                foreach ($map['modelNames'] as $item1) {
                    $model->modelNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['modelServiceName'])) {
            $model->modelServiceName = $map['modelServiceName'];
        }

        if (isset($map['weight'])) {
            $model->weight = $map['weight'];
        }

        return $model;
    }
}
