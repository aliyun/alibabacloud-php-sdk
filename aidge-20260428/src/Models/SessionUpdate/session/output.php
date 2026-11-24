<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\SessionUpdate\session;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aidge\V20260428\Models\SessionUpdate\session\output\audio;

class output extends Model
{
    /**
     * @var string[]
     */
    public $modalities;

    /**
     * @var audio
     */
    public $audio;
    protected $_name = [
        'modalities' => 'modalities',
        'audio' => 'audio',
    ];

    public function validate()
    {
        if (\is_array($this->modalities)) {
            Model::validateArray($this->modalities);
        }
        if (null !== $this->audio) {
            $this->audio->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->modalities) {
            if (\is_array($this->modalities)) {
                $res['modalities'] = [];
                $n1 = 0;
                foreach ($this->modalities as $item1) {
                    $res['modalities'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->audio) {
            $res['audio'] = null !== $this->audio ? $this->audio->toArray($noStream) : $this->audio;
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
        if (isset($map['modalities'])) {
            if (!empty($map['modalities'])) {
                $model->modalities = [];
                $n1 = 0;
                foreach ($map['modalities'] as $item1) {
                    $model->modalities[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['audio'])) {
            $model->audio = audio::fromMap($map['audio']);
        }

        return $model;
    }
}
