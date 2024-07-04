<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20180528\Models\SubmitEditingJobsResponseBody\jobResultList\jobResult\job\editingConfig\editing\clipList\clip;

use AlibabaCloud\SDK\Mts\V20180528\Models\SubmitEditingJobsResponseBody\jobResultList\jobResult\job\editingConfig\editing\clipList\clip\effects\effect;
use AlibabaCloud\Tea\Model;

class effects extends Model
{
    /**
     * @var effect[]
     */
    public $effect;
    protected $_name = [
        'effect' => 'Effect',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->effect) {
            $res['Effect'] = [];
            if (null !== $this->effect && \is_array($this->effect)) {
                $n = 0;
                foreach ($this->effect as $item) {
                    $res['Effect'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return effects
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Effect'])) {
            if (!empty($map['Effect'])) {
                $model->effect = [];
                $n             = 0;
                foreach ($map['Effect'] as $item) {
                    $model->effect[$n++] = null !== $item ? effect::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
