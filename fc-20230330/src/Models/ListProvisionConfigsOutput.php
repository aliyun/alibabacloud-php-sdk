<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class ListProvisionConfigsOutput extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var ProvisionConfig[]
     */
    public $provisionConfigs;
    protected $_name = [
        'nextToken' => 'nextToken',
        'provisionConfigs' => 'provisionConfigs',
    ];

    public function validate()
    {
        if (\is_array($this->provisionConfigs)) {
            Model::validateArray($this->provisionConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->provisionConfigs) {
            if (\is_array($this->provisionConfigs)) {
                $res['provisionConfigs'] = [];
                $n1 = 0;
                foreach ($this->provisionConfigs as $item1) {
                    $res['provisionConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['provisionConfigs'])) {
            if (!empty($map['provisionConfigs'])) {
                $model->provisionConfigs = [];
                $n1 = 0;
                foreach ($map['provisionConfigs'] as $item1) {
                    $model->provisionConfigs[$n1] = ProvisionConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
