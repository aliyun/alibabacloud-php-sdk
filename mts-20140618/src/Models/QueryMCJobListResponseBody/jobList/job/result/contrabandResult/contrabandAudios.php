<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\contrabandResult;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\contrabandResult\contrabandAudios\contrabandAudio;
use AlibabaCloud\Tea\Model;

class contrabandAudios extends Model
{
    /**
     * @var contrabandAudio[]
     */
    public $contrabandAudio;
    protected $_name = [
        'contrabandAudio' => 'ContrabandAudio',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contrabandAudio) {
            $res['ContrabandAudio'] = [];
            if (null !== $this->contrabandAudio && \is_array($this->contrabandAudio)) {
                $n = 0;
                foreach ($this->contrabandAudio as $item) {
                    $res['ContrabandAudio'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contrabandAudios
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContrabandAudio'])) {
            if (!empty($map['ContrabandAudio'])) {
                $model->contrabandAudio = [];
                $n                      = 0;
                foreach ($map['ContrabandAudio'] as $item) {
                    $model->contrabandAudio[$n++] = null !== $item ? contrabandAudio::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
