<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\ListUpstreamAppServersResponseBody;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListUpstreamAppServersResponseBody\appServers\list_;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListUpstreamAppServersResponseBody\appServers\pagination;
use AlibabaCloud\Tea\Model;

class appServers extends Model
{
    /**
     * @var list_[]
     */
    public $list;

    /**
     * @var pagination
     */
    public $pagination;
    protected $_name = [
        'list'       => 'List',
        'pagination' => 'Pagination',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->list) {
            $res['List'] = [];
            if (null !== $this->list && \is_array($this->list)) {
                $n = 0;
                foreach ($this->list as $item) {
                    $res['List'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pagination) {
            $res['Pagination'] = null !== $this->pagination ? $this->pagination->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appServers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['List'])) {
            if (!empty($map['List'])) {
                $model->list = [];
                $n           = 0;
                foreach ($map['List'] as $item) {
                    $model->list[$n++] = null !== $item ? list_::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Pagination'])) {
            $model->pagination = pagination::fromMap($map['Pagination']);
        }

        return $model;
    }
}
