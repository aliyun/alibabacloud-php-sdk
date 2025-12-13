<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FaRui\V20240628\Models\RunContractExtractRequest;

use AlibabaCloud\Dara\Model;

class fieldsToExtract extends Model
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
     * @var string[]
     */
    public $option;
    protected $_name = [
        'desc' => 'desc',
        'extractItem' => 'extractItem',
        'option' => 'option',
    ];

    public function validate()
    {
        if (\is_array($this->option)) {
            Model::validateArray($this->option);
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
            if (\is_array($this->option)) {
                $res['option'] = [];
                $n1 = 0;
                foreach ($this->option as $item1) {
                    $res['option'][$n1] = $item1;
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
            if (!empty($map['option'])) {
                $model->option = [];
                $n1 = 0;
                foreach ($map['option'] as $item1) {
                    $model->option[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
