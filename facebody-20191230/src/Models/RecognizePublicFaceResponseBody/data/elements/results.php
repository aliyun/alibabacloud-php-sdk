<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizePublicFaceResponseBody\data\elements;

use AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizePublicFaceResponseBody\data\elements\results\subResults;
use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @example sface
     *
     * @var string
     */
    public $label;

    /**
     * @example 98.35
     *
     * @var float
     */
    public $rate;

    /**
     * @var subResults[]
     */
    public $subResults;

    /**
     * @example review
     *
     * @var string
     */
    public $suggestion;
    protected $_name = [
        'label'      => 'Label',
        'rate'       => 'Rate',
        'subResults' => 'SubResults',
        'suggestion' => 'Suggestion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->rate) {
            $res['Rate'] = $this->rate;
        }
        if (null !== $this->subResults) {
            $res['SubResults'] = [];
            if (null !== $this->subResults && \is_array($this->subResults)) {
                $n = 0;
                foreach ($this->subResults as $item) {
                    $res['SubResults'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return results
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Rate'])) {
            $model->rate = $map['Rate'];
        }
        if (isset($map['SubResults'])) {
            if (!empty($map['SubResults'])) {
                $model->subResults = [];
                $n                 = 0;
                foreach ($map['SubResults'] as $item) {
                    $model->subResults[$n++] = null !== $item ? subResults::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }

        return $model;
    }
}
