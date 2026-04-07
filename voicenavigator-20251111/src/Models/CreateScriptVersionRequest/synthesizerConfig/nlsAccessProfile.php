<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\CreateScriptVersionRequest\synthesizerConfig;

use AlibabaCloud\Dara\Model;

class nlsAccessProfile extends Model
{
    /**
     * @var string
     */
    public $accessProfileId;
    protected $_name = [
        'accessProfileId' => 'AccessProfileId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessProfileId) {
            $res['AccessProfileId'] = $this->accessProfileId;
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
        if (isset($map['AccessProfileId'])) {
            $model->accessProfileId = $map['AccessProfileId'];
        }

        return $model;
    }
}
