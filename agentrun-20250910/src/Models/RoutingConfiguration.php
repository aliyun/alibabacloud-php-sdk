<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class RoutingConfiguration extends Model
{
    /**
     * @var VersionWeight[]
     */
    public $versionWeights;
    protected $_name = [
        'versionWeights' => 'versionWeights',
    ];

    public function validate()
    {
        if (\is_array($this->versionWeights)) {
            Model::validateArray($this->versionWeights);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->versionWeights) {
            if (\is_array($this->versionWeights)) {
                $res['versionWeights'] = [];
                $n1 = 0;
                foreach ($this->versionWeights as $item1) {
                    $res['versionWeights'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['versionWeights'])) {
            if (!empty($map['versionWeights'])) {
                $model->versionWeights = [];
                $n1 = 0;
                foreach ($map['versionWeights'] as $item1) {
                    $model->versionWeights[$n1] = VersionWeight::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
