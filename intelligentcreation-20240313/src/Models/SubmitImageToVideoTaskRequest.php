<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class SubmitImageToVideoTaskRequest extends Model
{
    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $posPrompt;
    protected $_name = [
        'imageUrl' => 'imageUrl',
        'posPrompt' => 'posPrompt',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageUrl) {
            $res['imageUrl'] = $this->imageUrl;
        }

        if (null !== $this->posPrompt) {
            $res['posPrompt'] = $this->posPrompt;
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
        if (isset($map['imageUrl'])) {
            $model->imageUrl = $map['imageUrl'];
        }

        if (isset($map['posPrompt'])) {
            $model->posPrompt = $map['posPrompt'];
        }

        return $model;
    }
}
