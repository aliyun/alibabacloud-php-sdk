<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\ImAuditResponseBody\textResults\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\ImAuditResponseBody\textResults\result\results\details;

class results extends Model
{
    /**
     * @var details[]
     */
    public $details;

    /**
     * @var string
     */
    public $label;

    /**
     * @var float
     */
    public $rate;

    /**
     * @var string
     */
    public $scene;

    /**
     * @var string
     */
    public $suggestion;
    protected $_name = [
        'details' => 'details',
        'label' => 'label',
        'rate' => 'rate',
        'scene' => 'scene',
        'suggestion' => 'suggestion',
    ];

    public function validate()
    {
        if (\is_array($this->details)) {
            Model::validateArray($this->details);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->details) {
            if (\is_array($this->details)) {
                $res['details'] = [];
                $n1 = 0;
                foreach ($this->details as $item1) {
                    $res['details'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->label) {
            $res['label'] = $this->label;
        }

        if (null !== $this->rate) {
            $res['rate'] = $this->rate;
        }

        if (null !== $this->scene) {
            $res['scene'] = $this->scene;
        }

        if (null !== $this->suggestion) {
            $res['suggestion'] = $this->suggestion;
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
        if (isset($map['details'])) {
            if (!empty($map['details'])) {
                $model->details = [];
                $n1 = 0;
                foreach ($map['details'] as $item1) {
                    $model->details[$n1++] = details::fromMap($item1);
                }
            }
        }

        if (isset($map['label'])) {
            $model->label = $map['label'];
        }

        if (isset($map['rate'])) {
            $model->rate = $map['rate'];
        }

        if (isset($map['scene'])) {
            $model->scene = $map['scene'];
        }

        if (isset($map['suggestion'])) {
            $model->suggestion = $map['suggestion'];
        }

        return $model;
    }
}
