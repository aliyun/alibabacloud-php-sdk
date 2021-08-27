<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePrefixListAttributesResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePrefixListAttributesResponseBody\entries\entry;
use AlibabaCloud\Tea\Model;

class entries extends Model
{
    /**
     * @var entry[]
     */
    public $entry;
    protected $_name = [
        'entry' => 'Entry',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entry) {
            $res['Entry'] = [];
            if (null !== $this->entry && \is_array($this->entry)) {
                $n = 0;
                foreach ($this->entry as $item) {
                    $res['Entry'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return entries
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Entry'])) {
            if (!empty($map['Entry'])) {
                $model->entry = [];
                $n            = 0;
                foreach ($map['Entry'] as $item) {
                    $model->entry[$n++] = null !== $item ? entry::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
