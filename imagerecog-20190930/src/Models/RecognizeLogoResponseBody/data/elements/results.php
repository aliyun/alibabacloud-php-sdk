<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imagerecog\V20190930\Models\RecognizeLogoResponseBody\data\elements;

use AlibabaCloud\SDK\Imagerecog\V20190930\Models\RecognizeLogoResponseBody\data\elements\results\logosData;
use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @var string
     */
    public $suggestion;

    /**
     * @var logosData[]
     */
    public $logosData;

    /**
     * @var string
     */
    public $label;

    /**
     * @var float
     */
    public $rate;
    protected $_name = [
        'suggestion' => 'Suggestion',
        'logosData'  => 'LogosData',
        'label'      => 'Label',
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
        if (null !== $this->logosData) {
            $res['LogosData'] = [];
            if (null !== $this->logosData && \is_array($this->logosData)) {
                $n = 0;
                foreach ($this->logosData as $item) {
                    $res['LogosData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
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
        if (isset($map['LogosData'])) {
            if (!empty($map['LogosData'])) {
                $model->logosData = [];
                $n                = 0;
                foreach ($map['LogosData'] as $item) {
                    $model->logosData[$n++] = null !== $item ? logosData::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Rate'])) {
            $model->rate = $map['Rate'];
        }

        return $model;
    }
}
