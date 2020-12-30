<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\GetIpfilterListResponseBody;

use AlibabaCloud\SDK\Dm\V20151123\Models\GetIpfilterListResponseBody\data\ipfilters;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var ipfilters[]
     */
    public $ipfilters;
    protected $_name = [
        'ipfilters' => 'ipfilters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipfilters) {
            $res['ipfilters'] = [];
            if (null !== $this->ipfilters && \is_array($this->ipfilters)) {
                $n = 0;
                foreach ($this->ipfilters as $item) {
                    $res['ipfilters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ipfilters'])) {
            if (!empty($map['ipfilters'])) {
                $model->ipfilters = [];
                $n                = 0;
                foreach ($map['ipfilters'] as $item) {
                    $model->ipfilters[$n++] = null !== $item ? ipfilters::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
