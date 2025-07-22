<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudNoteRequest;

use AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudNoteRequest\realtimeSubtitle\translation;
use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->translation) {
            $res['Translation'] = null !== $this->translation ? $this->translation->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return realtimeSubtitle
     */
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
