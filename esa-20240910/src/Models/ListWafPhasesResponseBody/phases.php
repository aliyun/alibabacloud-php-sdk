<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListWafPhasesResponseBody;

use AlibabaCloud\SDK\ESA\V20240910\Models\ListWafPhasesResponseBody\phases\rulesets;
use AlibabaCloud\Tea\Model;

class phases extends Model
{
    /**
     * @description The name of the WAF rule category.
     *
     * @example http_custom
     *
     * @var string
     */
    public $phase;

    /**
     * @description The WAF rulesets.
     *
     * @var rulesets[]
     */
    public $rulesets;
    protected $_name = [
        'phase' => 'Phase',
        'rulesets' => 'Rulesets',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->phase) {
            $res['Phase'] = $this->phase;
        }
        if (null !== $this->rulesets) {
            $res['Rulesets'] = [];
            if (null !== $this->rulesets && \is_array($this->rulesets)) {
                $n = 0;
                foreach ($this->rulesets as $item) {
                    $res['Rulesets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return phases
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Phase'])) {
            $model->phase = $map['Phase'];
        }
        if (isset($map['Rulesets'])) {
            if (!empty($map['Rulesets'])) {
                $model->rulesets = [];
                $n = 0;
                foreach ($map['Rulesets'] as $item) {
                    $model->rulesets[$n++] = null !== $item ? rulesets::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
