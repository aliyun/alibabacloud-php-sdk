<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CreateMessageRequest\messages\content\structView\parts;

use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateMessageRequest\messages\content\structView\parts\recommendPart\recommends;
use AlibabaCloud\Tea\Model;

class recommendPart extends Model
{
    /**
     * @var recommends[]
     */
    public $recommends;
    protected $_name = [
        'recommends' => 'recommends',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->recommends) {
            $res['recommends'] = [];
            if (null !== $this->recommends && \is_array($this->recommends)) {
                $n = 0;
                foreach ($this->recommends as $item) {
                    $res['recommends'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recommendPart
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['recommends'])) {
            if (!empty($map['recommends'])) {
                $model->recommends = [];
                $n = 0;
                foreach ($map['recommends'] as $item) {
                    $model->recommends[$n++] = null !== $item ? recommends::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
