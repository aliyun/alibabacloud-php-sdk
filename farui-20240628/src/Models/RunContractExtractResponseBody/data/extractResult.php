<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FaRui\V20240628\Models\RunContractExtractResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\FaRui\V20240628\Models\RunContractExtractResponseBody\data\extractResult\value;

class extractResult extends Model
{
    /**
     * @var string
     */
    public $desc;

    /**
     * @var string
     */
    public $extractItem;

    /**
     * @var string
     */
    public $option;

    /**
     * @var value[]
     */
    public $value;
    protected $_name = [
        'desc' => 'desc',
        'extractItem' => 'extractItem',
        'option' => 'option',
        'value' => 'value',
    ];

    public function validate()
    {
        if (\is_array($this->value)) {
            Model::validateArray($this->value);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desc) {
            $res['desc'] = $this->desc;
        }

        if (null !== $this->extractItem) {
            $res['extractItem'] = $this->extractItem;
        }

        if (null !== $this->option) {
            $res['option'] = $this->option;
        }

        if (null !== $this->value) {
            if (\is_array($this->value)) {
                $res['value'] = [];
                $n1 = 0;
                foreach ($this->value as $item1) {
                    $res['value'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['desc'])) {
            $model->desc = $map['desc'];
        }

        if (isset($map['extractItem'])) {
            $model->extractItem = $map['extractItem'];
        }

        if (isset($map['option'])) {
            $model->option = $map['option'];
        }

        if (isset($map['value'])) {
            if (!empty($map['value'])) {
                $model->value = [];
                $n1 = 0;
                foreach ($map['value'] as $item1) {
                    $model->value[$n1] = value::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
