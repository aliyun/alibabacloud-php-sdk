<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ReviewSingleResultByIdResponseBody\data;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ReviewSingleResultByIdResponseBody\data\dialogues\dialogue;
use AlibabaCloud\Tea\Model;

class dialogues extends Model
{
    /**
     * @var dialogue[]
     */
    public $dialogue;
    protected $_name = [
        'dialogue' => 'Dialogue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dialogue) {
            $res['Dialogue'] = [];
            if (null !== $this->dialogue && \is_array($this->dialogue)) {
                $n = 0;
                foreach ($this->dialogue as $item) {
                    $res['Dialogue'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dialogues
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Dialogue'])) {
            if (!empty($map['Dialogue'])) {
                $model->dialogue = [];
                $n               = 0;
                foreach ($map['Dialogue'] as $item) {
                    $model->dialogue[$n++] = null !== $item ? dialogue::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
