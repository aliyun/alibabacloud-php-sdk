<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetWafFilterResponseBody\filter\fields;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetWafFilterResponseBody\filter\fields\subs\logics;

class subs extends Model
{
    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $label;

    /**
     * @var logics[]
     */
    public $logics;

    /**
     * @var string
     */
    public $minPlan;
    protected $_name = [
        'enable' => 'Enable',
        'key' => 'Key',
        'label' => 'Label',
        'logics' => 'Logics',
        'minPlan' => 'MinPlan',
    ];

    public function validate()
    {
        if (\is_array($this->logics)) {
            Model::validateArray($this->logics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->logics)) {
                $res['Logics'] = [];
                $n1 = 0;
                foreach ($this->logics as $item1) {
                    $res['Logics'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->minPlan) {
            $res['MinPlan'] = $this->minPlan;
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
                $n1 = 0;
                foreach ($map['Logics'] as $item1) {
                    $model->logics[$n1] = logics::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['MinPlan'])) {
            $model->minPlan = $map['MinPlan'];
        }

        return $model;
    }
}
