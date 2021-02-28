<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDDoSTrafficInfoResponseBody;

use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDDoSTrafficInfoResponseBody\timeScopes\timeScope;
use AlibabaCloud\Tea\Model;

class timeScopes extends Model
{
    /**
     * @var timeScope[]
     */
    public $timeScope;
    protected $_name = [
        'timeScope' => 'TimeScope',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->timeScope) {
            $res['TimeScope'] = [];
            if (null !== $this->timeScope && \is_array($this->timeScope)) {
                $n = 0;
                foreach ($this->timeScope as $item) {
                    $res['TimeScope'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return timeScopes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TimeScope'])) {
            if (!empty($map['TimeScope'])) {
                $model->timeScope = [];
                $n                = 0;
                foreach ($map['TimeScope'] as $item) {
                    $model->timeScope[$n++] = null !== $item ? timeScope::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
