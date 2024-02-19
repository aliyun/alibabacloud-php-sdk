<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryContentResponseBody;

use AlibabaCloud\Tea\Model;

class windowMatches extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryContentResponseBody\windowMatches\windowMatches[]
     */
    public $windowMatches;
    protected $_name = [
        'windowMatches' => 'windowMatches',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->windowMatches) {
            $res['windowMatches'] = [];
            if (null !== $this->windowMatches && \is_array($this->windowMatches)) {
                $n = 0;
                foreach ($this->windowMatches as $item) {
                    $res['windowMatches'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return windowMatches
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['windowMatches'])) {
            if (!empty($map['windowMatches'])) {
                $model->windowMatches = [];
                $n                    = 0;
                foreach ($map['windowMatches'] as $item) {
                    $model->windowMatches[$n++] = null !== $item ? \AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryContentResponseBody\windowMatches\windowMatches::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
