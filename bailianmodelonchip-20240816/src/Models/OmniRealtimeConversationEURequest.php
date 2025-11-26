<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models;

use AlibabaCloud\Dara\Model;

class OmniRealtimeConversationEURequest extends Model
{
    /**
     * @var string
     */
    public $inputAudio;

    /**
     * @var string
     */
    public $userPrompt;

    /**
     * @var string
     */
    public $voice;
    protected $_name = [
        'inputAudio' => 'inputAudio',
        'userPrompt' => 'userPrompt',
        'voice' => 'voice',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inputAudio) {
            $res['inputAudio'] = $this->inputAudio;
        }

        if (null !== $this->userPrompt) {
            $res['userPrompt'] = $this->userPrompt;
        }

        if (null !== $this->voice) {
            $res['voice'] = $this->voice;
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
        if (isset($map['inputAudio'])) {
            $model->inputAudio = $map['inputAudio'];
        }

        if (isset($map['userPrompt'])) {
            $model->userPrompt = $map['userPrompt'];
        }

        if (isset($map['voice'])) {
            $model->voice = $map['voice'];
        }

        return $model;
    }
}
