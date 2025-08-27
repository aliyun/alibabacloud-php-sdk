<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class ListElasticConfigsOutput extends Model
{
    /**
     * @var ElasticConfigStatus[]
     */
    public $elasticConfigs;

    /**
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'elasticConfigs' => 'elasticConfigs',
        'nextToken' => 'nextToken',
    ];

    public function validate()
    {
        if (\is_array($this->elasticConfigs)) {
            Model::validateArray($this->elasticConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->elasticConfigs) {
            if (\is_array($this->elasticConfigs)) {
                $res['elasticConfigs'] = [];
                $n1 = 0;
                foreach ($this->elasticConfigs as $item1) {
                    $res['elasticConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
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
        if (isset($map['elasticConfigs'])) {
            if (!empty($map['elasticConfigs'])) {
                $model->elasticConfigs = [];
                $n1 = 0;
                foreach ($map['elasticConfigs'] as $item1) {
                    $model->elasticConfigs[$n1] = ElasticConfigStatus::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        return $model;
    }
}
