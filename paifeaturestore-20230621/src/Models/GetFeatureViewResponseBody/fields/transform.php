<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\GetFeatureViewResponseBody\fields;

use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\GetFeatureViewResponseBody\fields\transform\input;
use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->input) {
            $res['Input'] = [];
            if (null !== $this->input && \is_array($this->input)) {
                $n = 0;
                foreach ($this->input as $item) {
                    $res['Input'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return transform
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Input'])) {
            if (!empty($map['Input'])) {
                $model->input = [];
                $n = 0;
                foreach ($map['Input'] as $item) {
                    $model->input[$n++] = null !== $item ? input::fromMap($item) : $item;
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
