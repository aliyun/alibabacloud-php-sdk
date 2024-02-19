<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryContentResponseBody\windowMatches\windowMatches;

use AlibabaCloud\Tea\Model;

class windowMatch extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryContentResponseBody\windowMatches\windowMatches\windowMatch\windowMatch[]
     */
    public $windowMatch;
    protected $_name = [
        'windowMatch' => 'windowMatch',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->windowMatch) {
            $res['windowMatch'] = [];
            if (null !== $this->windowMatch && \is_array($this->windowMatch)) {
                $n = 0;
                foreach ($this->windowMatch as $item) {
                    $res['windowMatch'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return windowMatch
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['windowMatch'])) {
            if (!empty($map['windowMatch'])) {
                $model->windowMatch = [];
                $n                  = 0;
                foreach ($map['windowMatch'] as $item) {
                    $model->windowMatch[$n++] = null !== $item ? \AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryContentResponseBody\windowMatches\windowMatches\windowMatch\windowMatch::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
