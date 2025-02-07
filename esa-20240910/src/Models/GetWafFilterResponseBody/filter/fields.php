<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetWafFilterResponseBody\filter;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetWafFilterResponseBody\filter\fields\logics;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetWafFilterResponseBody\filter\fields\selector;

class fields extends Model
{
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
     * @var selector
     */
    public $selector;
    /**
     * @var bool
     */
    public $sub;
    /**
     * @var string
     */
    public $subTip;
    protected $_name = [
        'key'      => 'Key',
        'label'    => 'Label',
        'logics'   => 'Logics',
        'selector' => 'Selector',
        'sub'      => 'Sub',
        'subTip'   => 'SubTip',
    ];

    public function validate()
    {
        if (\is_array($this->logics)) {
            Model::validateArray($this->logics);
        }
        if (null !== $this->selector) {
            $this->selector->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }

        if (null !== $this->logics) {
            if (\is_array($this->logics)) {
                $res['Logics'] = [];
                $n1            = 0;
                foreach ($this->logics as $item1) {
                    $res['Logics'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->selector) {
            $res['Selector'] = null !== $this->selector ? $this->selector->toArray($noStream) : $this->selector;
        }

        if (null !== $this->sub) {
            $res['Sub'] = $this->sub;
        }

        if (null !== $this->subTip) {
            $res['SubTip'] = $this->subTip;
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
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }

        if (isset($map['Logics'])) {
            if (!empty($map['Logics'])) {
                $model->logics = [];
                $n1            = 0;
                foreach ($map['Logics'] as $item1) {
                    $model->logics[$n1++] = logics::fromMap($item1);
                }
            }
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
