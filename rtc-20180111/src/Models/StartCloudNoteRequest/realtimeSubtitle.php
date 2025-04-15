<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudNoteRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudNoteRequest\realtimeSubtitle\translation;

class realtimeSubtitle extends Model
{
    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var translation
     */
    public $translation;
    protected $_name = [
        'enabled' => 'Enabled',
        'translation' => 'Translation',
    ];

    public function validate()
    {
        if (null !== $this->translation) {
            $this->translation->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->translation) {
            $res['Translation'] = null !== $this->translation ? $this->translation->toArray($noStream) : $this->translation;
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
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['Translation'])) {
            $model->translation = translation::fromMap($map['Translation']);
        }

        return $model;
    }
}
