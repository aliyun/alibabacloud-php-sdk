<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryContentResponseBody\windowMatches;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryContentResponseBody\windowMatches\windowMatches\windowMatch;
use AlibabaCloud\Tea\Model;

class windowMatches extends Model
{
    /**
     * @var windowMatch
     */
    public $windowMatch;
    protected $_name = [
        'windowMatch' => 'WindowMatch',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->windowMatch) {
            $res['WindowMatch'] = null !== $this->windowMatch ? $this->windowMatch->toMap() : null;
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
        if (isset($map['WindowMatch'])) {
            $model->windowMatch = windowMatch::fromMap($map['WindowMatch']);
        }

        return $model;
    }
}
