<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models;

use AlibabaCloud\Dara\Model;

class PetHealthAnalysisRequest extends Model
{
    /**
     * @var string[]
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $systemPrompt;

    /**
     * @var string
     */
    public $userPrompt;
    protected $_name = [
        'imageUrl' => 'ImageUrl',
        'systemPrompt' => 'SystemPrompt',
        'userPrompt' => 'UserPrompt',
    ];

    public function validate()
    {
        if (\is_array($this->imageUrl)) {
            Model::validateArray($this->imageUrl);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageUrl) {
            if (\is_array($this->imageUrl)) {
                $res['ImageUrl'] = [];
                $n1 = 0;
                foreach ($this->imageUrl as $item1) {
                    $res['ImageUrl'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->systemPrompt) {
            $res['SystemPrompt'] = $this->systemPrompt;
        }

        if (null !== $this->userPrompt) {
            $res['UserPrompt'] = $this->userPrompt;
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
        if (isset($map['ImageUrl'])) {
            if (!empty($map['ImageUrl'])) {
                $model->imageUrl = [];
                $n1 = 0;
                foreach ($map['ImageUrl'] as $item1) {
                    $model->imageUrl[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SystemPrompt'])) {
            $model->systemPrompt = $map['SystemPrompt'];
        }

        if (isset($map['UserPrompt'])) {
            $model->userPrompt = $map['UserPrompt'];
        }

        return $model;
    }
}
