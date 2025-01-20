<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\QueryAvatarProjectResponseBody\frames;

use AlibabaCloud\Dara\Model;

class videoScript extends Model
{
    /**
     * @var string
     */
    public $speedRate;
    /**
     * @var string
     */
    public $voiceTemplateId;
    protected $_name = [
        'speedRate'       => 'speedRate',
        'voiceTemplateId' => 'voiceTemplateId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->speedRate) {
            $res['speedRate'] = $this->speedRate;
        }

        if (null !== $this->voiceTemplateId) {
            $res['voiceTemplateId'] = $this->voiceTemplateId;
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
        if (isset($map['speedRate'])) {
            $model->speedRate = $map['speedRate'];
        }

        if (isset($map['voiceTemplateId'])) {
            $model->voiceTemplateId = $map['voiceTemplateId'];
        }

        return $model;
    }
}
