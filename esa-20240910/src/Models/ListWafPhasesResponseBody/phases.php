<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListWafPhasesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListWafPhasesResponseBody\phases\rulesets;

class phases extends Model
{
    /**
     * @var string
     */
    public $phase;

    /**
     * @var rulesets[]
     */
    public $rulesets;
    protected $_name = [
        'phase' => 'Phase',
        'rulesets' => 'Rulesets',
    ];

    public function validate()
    {
        if (\is_array($this->rulesets)) {
            Model::validateArray($this->rulesets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->phase) {
            $res['Phase'] = $this->phase;
        }

        if (null !== $this->rulesets) {
            if (\is_array($this->rulesets)) {
                $res['Rulesets'] = [];
                $n1 = 0;
                foreach ($this->rulesets as $item1) {
                    $res['Rulesets'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Phase'])) {
            $model->phase = $map['Phase'];
        }

        if (isset($map['Rulesets'])) {
            if (!empty($map['Rulesets'])) {
                $model->rulesets = [];
                $n1 = 0;
                foreach ($map['Rulesets'] as $item1) {
                    $model->rulesets[$n1] = rulesets::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
