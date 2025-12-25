<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Milvus\V20231012\Models\DBVersionDetail;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Milvus\V20231012\Models\DBVersionDetail\specs\componentSpecs;

class specs extends Model
{
    /**
     * @var componentSpecs[]
     */
    public $componentSpecs;

    /**
     * @var bool
     */
    public $isHA;

    /**
     * @var bool
     */
    public $isStandalone;

    /**
     * @var string
     */
    public $zoneMode;
    protected $_name = [
        'componentSpecs' => 'componentSpecs',
        'isHA' => 'isHA',
        'isStandalone' => 'isStandalone',
        'zoneMode' => 'zoneMode',
    ];

    public function validate()
    {
        if (\is_array($this->componentSpecs)) {
            Model::validateArray($this->componentSpecs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->componentSpecs) {
            if (\is_array($this->componentSpecs)) {
                $res['componentSpecs'] = [];
                $n1 = 0;
                foreach ($this->componentSpecs as $item1) {
                    $res['componentSpecs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->isHA) {
            $res['isHA'] = $this->isHA;
        }

        if (null !== $this->isStandalone) {
            $res['isStandalone'] = $this->isStandalone;
        }

        if (null !== $this->zoneMode) {
            $res['zoneMode'] = $this->zoneMode;
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
        if (isset($map['componentSpecs'])) {
            if (!empty($map['componentSpecs'])) {
                $model->componentSpecs = [];
                $n1 = 0;
                foreach ($map['componentSpecs'] as $item1) {
                    $model->componentSpecs[$n1] = componentSpecs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['isHA'])) {
            $model->isHA = $map['isHA'];
        }

        if (isset($map['isStandalone'])) {
            $model->isStandalone = $map['isStandalone'];
        }

        if (isset($map['zoneMode'])) {
            $model->zoneMode = $map['zoneMode'];
        }

        return $model;
    }
}
