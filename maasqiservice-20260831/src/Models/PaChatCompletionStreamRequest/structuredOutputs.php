<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaasQIService\V20260831\Models\PaChatCompletionStreamRequest;

use AlibabaCloud\Dara\Model;

class structuredOutputs extends Model
{
    /**
     * @var string[]
     */
    public $choice;
    protected $_name = [
        'choice' => 'choice',
    ];

    public function validate()
    {
        if (\is_array($this->choice)) {
            Model::validateArray($this->choice);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->choice) {
            if (\is_array($this->choice)) {
                $res['choice'] = [];
                $n1 = 0;
                foreach ($this->choice as $item1) {
                    $res['choice'][$n1] = $item1;
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
        if (isset($map['choice'])) {
            if (!empty($map['choice'])) {
                $model->choice = [];
                $n1 = 0;
                foreach ($map['choice'] as $item1) {
                    $model->choice[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
