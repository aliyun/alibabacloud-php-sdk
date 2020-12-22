<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizePublicFaceResponseBody\data\elements;

use AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizePublicFaceResponseBody\data\elements\results\subResults;
use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @var string
     */
    public $suggestion;

    /**
     * @var string
     */
    public $label;

    /**
     * @var subResults[]
     */
    public $subResults;

    /**
     * @var float
     */
    public $rate;
    protected $_name = [
        'suggestion' => 'Suggestion',
        'label'      => 'Label',
        'subResults' => 'SubResults',
        'rate'       => 'Rate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
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
        if (null !== $this->rate) {
            $res['Rate'] = $this->rate;
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
        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
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
        if (isset($map['Rate'])) {
            $model->rate = $map['Rate'];
        }

        return $model;
    }
}
