<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\pornResult;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\pornResult\pornAudios\pornAudio;
use AlibabaCloud\Tea\Model;

class pornAudios extends Model
{
    /**
     * @var pornAudio[]
     */
    public $pornAudio;
    protected $_name = [
        'pornAudio' => 'PornAudio',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pornAudio) {
            $res['PornAudio'] = [];
            if (null !== $this->pornAudio && \is_array($this->pornAudio)) {
                $n = 0;
                foreach ($this->pornAudio as $item) {
                    $res['PornAudio'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pornAudios
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PornAudio'])) {
            if (!empty($map['PornAudio'])) {
                $model->pornAudio = [];
                $n                = 0;
                foreach ($map['PornAudio'] as $item) {
                    $model->pornAudio[$n++] = null !== $item ? pornAudio::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
