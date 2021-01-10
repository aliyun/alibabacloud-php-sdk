<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\terrorismResult;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\terrorismResult\terrorismAudios\terrorismAudio;
use AlibabaCloud\Tea\Model;

class terrorismAudios extends Model
{
    /**
     * @var terrorismAudio[]
     */
    public $terrorismAudio;
    protected $_name = [
        'terrorismAudio' => 'TerrorismAudio',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->terrorismAudio) {
            $res['TerrorismAudio'] = [];
            if (null !== $this->terrorismAudio && \is_array($this->terrorismAudio)) {
                $n = 0;
                foreach ($this->terrorismAudio as $item) {
                    $res['TerrorismAudio'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return terrorismAudios
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TerrorismAudio'])) {
            if (!empty($map['TerrorismAudio'])) {
                $model->terrorismAudio = [];
                $n                     = 0;
                foreach ($map['TerrorismAudio'] as $item) {
                    $model->terrorismAudio[$n++] = null !== $item ? terrorismAudio::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
