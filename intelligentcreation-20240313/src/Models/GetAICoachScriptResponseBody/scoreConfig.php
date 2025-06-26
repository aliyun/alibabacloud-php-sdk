<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachScriptResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachScriptResponseBody\scoreConfig\levels;

class scoreConfig extends Model
{
    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var bool
     */
    public $levelEnabled;

    /**
     * @var levels[]
     */
    public $levels;

    /**
     * @var string
     */
    public $passScore;
    protected $_name = [
        'enabled' => 'enabled',
        'levelEnabled' => 'levelEnabled',
        'levels' => 'levels',
        'passScore' => 'passScore',
    ];

    public function validate()
    {
        if (\is_array($this->levels)) {
            Model::validateArray($this->levels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->levelEnabled) {
            $res['levelEnabled'] = $this->levelEnabled;
        }

        if (null !== $this->levels) {
            if (\is_array($this->levels)) {
                $res['levels'] = [];
                $n1 = 0;
                foreach ($this->levels as $item1) {
                    $res['levels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->passScore) {
            $res['passScore'] = $this->passScore;
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
        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['levelEnabled'])) {
            $model->levelEnabled = $map['levelEnabled'];
        }

        if (isset($map['levels'])) {
            if (!empty($map['levels'])) {
                $model->levels = [];
                $n1 = 0;
                foreach ($map['levels'] as $item1) {
                    $model->levels[$n1] = levels::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['passScore'])) {
            $model->passScore = $map['passScore'];
        }

        return $model;
    }
}
