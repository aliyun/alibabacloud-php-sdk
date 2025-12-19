<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunAiHelperWritingResponseBody\payload;

use AlibabaCloud\Dara\Model;

class output extends Model
{
    /**
     * @var string
     */
    public $text;

    /**
     * @var string[]
     */
    public $writingParams;
    protected $_name = [
        'text' => 'Text',
        'writingParams' => 'WritingParams',
    ];

    public function validate()
    {
        if (\is_array($this->writingParams)) {
            Model::validateArray($this->writingParams);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        if (null !== $this->writingParams) {
            if (\is_array($this->writingParams)) {
                $res['WritingParams'] = [];
                foreach ($this->writingParams as $key1 => $value1) {
                    $res['WritingParams'][$key1] = $value1;
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
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        if (isset($map['WritingParams'])) {
            if (!empty($map['WritingParams'])) {
                $model->writingParams = [];
                foreach ($map['WritingParams'] as $key1 => $value1) {
                    $model->writingParams[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
