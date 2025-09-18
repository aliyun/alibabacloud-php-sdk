<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\GetFeatureViewResponseBody\fields;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\GetFeatureViewResponseBody\fields\transform\input;

class transform extends Model
{
    /**
     * @var input[]
     */
    public $input;

    /**
     * @var int
     */
    public $LLMConfigId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'input' => 'Input',
        'LLMConfigId' => 'LLMConfigId',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->input)) {
            Model::validateArray($this->input);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->input) {
            if (\is_array($this->input)) {
                $res['Input'] = [];
                $n1 = 0;
                foreach ($this->input as $item1) {
                    $res['Input'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->LLMConfigId) {
            $res['LLMConfigId'] = $this->LLMConfigId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Input'])) {
            if (!empty($map['Input'])) {
                $model->input = [];
                $n1 = 0;
                foreach ($map['Input'] as $item1) {
                    $model->input[$n1] = input::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['LLMConfigId'])) {
            $model->LLMConfigId = $map['LLMConfigId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
