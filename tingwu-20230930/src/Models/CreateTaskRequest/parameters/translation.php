<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tingwu\V20230930\Models\CreateTaskRequest\parameters;

use AlibabaCloud\Dara\Model;

class translation extends Model
{
    /**
     * @var int
     */
    public $additionalStreamOutputLevel;

    /**
     * @var int
     */
    public $outputLevel;

    /**
     * @var string[]
     */
    public $targetLanguages;
    protected $_name = [
        'additionalStreamOutputLevel' => 'AdditionalStreamOutputLevel',
        'outputLevel' => 'OutputLevel',
        'targetLanguages' => 'TargetLanguages',
    ];

    public function validate()
    {
        if (\is_array($this->targetLanguages)) {
            Model::validateArray($this->targetLanguages);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->additionalStreamOutputLevel) {
            $res['AdditionalStreamOutputLevel'] = $this->additionalStreamOutputLevel;
        }

        if (null !== $this->outputLevel) {
            $res['OutputLevel'] = $this->outputLevel;
        }

        if (null !== $this->targetLanguages) {
            if (\is_array($this->targetLanguages)) {
                $res['TargetLanguages'] = [];
                $n1 = 0;
                foreach ($this->targetLanguages as $item1) {
                    $res['TargetLanguages'][$n1] = $item1;
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
        if (isset($map['AdditionalStreamOutputLevel'])) {
            $model->additionalStreamOutputLevel = $map['AdditionalStreamOutputLevel'];
        }

        if (isset($map['OutputLevel'])) {
            $model->outputLevel = $map['OutputLevel'];
        }

        if (isset($map['TargetLanguages'])) {
            if (!empty($map['TargetLanguages'])) {
                $model->targetLanguages = [];
                $n1 = 0;
                foreach ($map['TargetLanguages'] as $item1) {
                    $model->targetLanguages[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
