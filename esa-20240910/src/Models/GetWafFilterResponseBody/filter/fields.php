<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetWafFilterResponseBody\filter;

use AlibabaCloud\SDK\ESA\V20240910\Models\GetWafFilterResponseBody\filter\fields\logics;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetWafFilterResponseBody\filter\fields\selector;
use AlibabaCloud\Tea\Model;

class fields extends Model
{
    /**
     * @var bool
     */
    public $enable;

    /**
     * @description The field for matched objects in the system.
     *
     * @example http.request.headers
     *
     * @var string
     */
    public $key;

    /**
     * @description The label of the matched object.
     *
     * @example Header
     *
     * @var string
     */
    public $label;

    /**
     * @description The logical conditions.
     *
     * @var logics[]
     */
    public $logics;

    /**
     * @var string
     */
    public $minPlan;

    /**
     * @description The selector, which defines how to select a matched object.
     *
     * @var selector
     */
    public $selector;

    /**
     * @description Indicates whether the matched object contains a subfield.
     *
     * @example true
     *
     * @var bool
     */
    public $sub;

    /**
     * @description The tip on how to enter a subfield.
     *
     * @example e.g. Content-Type
     *
     * @var string
     */
    public $subTip;
    protected $_name = [
        'enable' => 'Enable',
        'key' => 'Key',
        'label' => 'Label',
        'logics' => 'Logics',
        'minPlan' => 'MinPlan',
        'selector' => 'Selector',
        'sub' => 'Sub',
        'subTip' => 'SubTip',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->logics) {
            $res['Logics'] = [];
            if (null !== $this->logics && \is_array($this->logics)) {
                $n = 0;
                foreach ($this->logics as $item) {
                    $res['Logics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->minPlan) {
            $res['MinPlan'] = $this->minPlan;
        }
        if (null !== $this->selector) {
            $res['Selector'] = null !== $this->selector ? $this->selector->toMap() : null;
        }
        if (null !== $this->sub) {
            $res['Sub'] = $this->sub;
        }
        if (null !== $this->subTip) {
            $res['SubTip'] = $this->subTip;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fields
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Logics'])) {
            if (!empty($map['Logics'])) {
                $model->logics = [];
                $n = 0;
                foreach ($map['Logics'] as $item) {
                    $model->logics[$n++] = null !== $item ? logics::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MinPlan'])) {
            $model->minPlan = $map['MinPlan'];
        }
        if (isset($map['Selector'])) {
            $model->selector = selector::fromMap($map['Selector']);
        }
        if (isset($map['Sub'])) {
            $model->sub = $map['Sub'];
        }
        if (isset($map['SubTip'])) {
            $model->subTip = $map['SubTip'];
        }

        return $model;
    }
}
