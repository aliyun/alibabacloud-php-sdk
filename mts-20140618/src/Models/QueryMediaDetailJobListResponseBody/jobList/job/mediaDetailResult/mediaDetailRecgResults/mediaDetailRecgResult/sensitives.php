<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaDetailJobListResponseBody\jobList\job\mediaDetailResult\mediaDetailRecgResults\mediaDetailRecgResult;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaDetailJobListResponseBody\jobList\job\mediaDetailResult\mediaDetailRecgResults\mediaDetailRecgResult\sensitives\sensitive;
use AlibabaCloud\Tea\Model;

class sensitives extends Model
{
    /**
     * @var sensitive[]
     */
    public $sensitive;
    protected $_name = [
        'sensitive' => 'Sensitive',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sensitive) {
            $res['Sensitive'] = [];
            if (null !== $this->sensitive && \is_array($this->sensitive)) {
                $n = 0;
                foreach ($this->sensitive as $item) {
                    $res['Sensitive'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sensitives
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Sensitive'])) {
            if (!empty($map['Sensitive'])) {
                $model->sensitive = [];
                $n                = 0;
                foreach ($map['Sensitive'] as $item) {
                    $model->sensitive[$n++] = null !== $item ? sensitive::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
