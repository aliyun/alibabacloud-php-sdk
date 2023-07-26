<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryCollectionDataResponseBody;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryCollectionDataResponseBody\matches\match;
use AlibabaCloud\Tea\Model;

class matches extends Model
{
    /**
     * @var match[]
     */
    public $match;
    protected $_name = [
        'match' => 'match',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->match) {
            $res['match'] = [];
            if (null !== $this->match && \is_array($this->match)) {
                $n = 0;
                foreach ($this->match as $item) {
                    $res['match'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return matches
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['match'])) {
            if (!empty($map['match'])) {
                $model->match = [];
                $n            = 0;
                foreach ($map['match'] as $item) {
                    $model->match[$n++] = null !== $item ? match::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
