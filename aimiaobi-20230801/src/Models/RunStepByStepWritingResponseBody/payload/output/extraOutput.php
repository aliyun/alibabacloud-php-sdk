<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunStepByStepWritingResponseBody\payload\output;

use AlibabaCloud\Dara\Model;

class extraOutput extends Model
{
    /**
     * @var string[]
     */
    public $summarization;
    protected $_name = [
        'summarization' => 'summarization',
    ];

    public function validate()
    {
        if (\is_array($this->summarization)) {
            Model::validateArray($this->summarization);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->summarization) {
            if (\is_array($this->summarization)) {
                $res['summarization'] = [];
                $n1 = 0;
                foreach ($this->summarization as $item1) {
                    $res['summarization'][$n1++] = $item1;
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
        if (isset($map['summarization'])) {
            if (!empty($map['summarization'])) {
                $model->summarization = [];
                $n1 = 0;
                foreach ($map['summarization'] as $item1) {
                    $model->summarization[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
