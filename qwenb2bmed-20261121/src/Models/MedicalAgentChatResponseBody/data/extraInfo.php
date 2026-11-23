<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QwenB2BMed\V20261121\Models\MedicalAgentChatResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QwenB2BMed\V20261121\Models\MedicalAgentChatResponseBody\data\extraInfo\inputResources;

class extraInfo extends Model
{
    /**
     * @var inputResources[]
     */
    public $inputResources;
    protected $_name = [
        'inputResources' => 'inputResources',
    ];

    public function validate()
    {
        if (\is_array($this->inputResources)) {
            Model::validateArray($this->inputResources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inputResources) {
            if (\is_array($this->inputResources)) {
                $res['inputResources'] = [];
                $n1 = 0;
                foreach ($this->inputResources as $item1) {
                    $res['inputResources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['inputResources'])) {
            if (!empty($map['inputResources'])) {
                $model->inputResources = [];
                $n1 = 0;
                foreach ($map['inputResources'] as $item1) {
                    $model->inputResources[$n1] = inputResources::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
