<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachScriptResponseBody;

use AlibabaCloud\Dara\Model;

class checkCheatConfig extends Model
{
    /**
     * @var bool
     */
    public $checkImage;

    /**
     * @var bool
     */
    public $checkVoice;
    protected $_name = [
        'checkImage' => 'checkImage',
        'checkVoice' => 'checkVoice',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkImage) {
            $res['checkImage'] = $this->checkImage;
        }

        if (null !== $this->checkVoice) {
            $res['checkVoice'] = $this->checkVoice;
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
        if (isset($map['checkImage'])) {
            $model->checkImage = $map['checkImage'];
        }

        if (isset($map['checkVoice'])) {
            $model->checkVoice = $map['checkVoice'];
        }

        return $model;
    }
}
