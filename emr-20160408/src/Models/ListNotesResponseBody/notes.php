<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListNotesResponseBody;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListNotesResponseBody\notes\noteInfo;
use AlibabaCloud\Tea\Model;

class notes extends Model
{
    /**
     * @var noteInfo[]
     */
    public $noteInfo;
    protected $_name = [
        'noteInfo' => 'NoteInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->noteInfo) {
            $res['NoteInfo'] = [];
            if (null !== $this->noteInfo && \is_array($this->noteInfo)) {
                $n = 0;
                foreach ($this->noteInfo as $item) {
                    $res['NoteInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return notes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NoteInfo'])) {
            if (!empty($map['NoteInfo'])) {
                $model->noteInfo = [];
                $n               = 0;
                foreach ($map['NoteInfo'] as $item) {
                    $model->noteInfo[$n++] = null !== $item ? noteInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
