<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\politicsResult;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\politicsResult\politicsAudios\politicsAudio;
use AlibabaCloud\Tea\Model;

class politicsAudios extends Model
{
    /**
     * @var politicsAudio[]
     */
    public $politicsAudio;
    protected $_name = [
        'politicsAudio' => 'PoliticsAudio',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->politicsAudio) {
            $res['PoliticsAudio'] = [];
            if (null !== $this->politicsAudio && \is_array($this->politicsAudio)) {
                $n = 0;
                foreach ($this->politicsAudio as $item) {
                    $res['PoliticsAudio'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return politicsAudios
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PoliticsAudio'])) {
            if (!empty($map['PoliticsAudio'])) {
                $model->politicsAudio = [];
                $n                    = 0;
                foreach ($map['PoliticsAudio'] as $item) {
                    $model->politicsAudio[$n++] = null !== $item ? politicsAudio::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
