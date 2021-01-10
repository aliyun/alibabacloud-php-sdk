<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\adResult;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\adResult\adAudios\adAudio;
use AlibabaCloud\Tea\Model;

class adAudios extends Model
{
    /**
     * @var adAudio[]
     */
    public $adAudio;
    protected $_name = [
        'adAudio' => 'AdAudio',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adAudio) {
            $res['AdAudio'] = [];
            if (null !== $this->adAudio && \is_array($this->adAudio)) {
                $n = 0;
                foreach ($this->adAudio as $item) {
                    $res['AdAudio'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return adAudios
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdAudio'])) {
            if (!empty($map['AdAudio'])) {
                $model->adAudio = [];
                $n              = 0;
                foreach ($map['AdAudio'] as $item) {
                    $model->adAudio[$n++] = null !== $item ? adAudio::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
