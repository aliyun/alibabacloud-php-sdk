<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\ListMessageAcksResponseBody;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListMessageAcksResponseBody\messageAcks\list_;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListMessageAcksResponseBody\messageAcks\pagination;
use AlibabaCloud\Tea\Model;

class messageAcks extends Model
{
    /**
     * @var pagination
     */
    public $pagination;

    /**
     * @var list_[]
     */
    public $list;
    protected $_name = [
        'pagination' => 'Pagination',
        'list'       => 'List',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pagination) {
            $res['Pagination'] = null !== $this->pagination ? $this->pagination->toMap() : null;
        }
        if (null !== $this->list) {
            $res['List'] = [];
            if (null !== $this->list && \is_array($this->list)) {
                $n = 0;
                foreach ($this->list as $item) {
                    $res['List'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return messageAcks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Pagination'])) {
            $model->pagination = pagination::fromMap($map['Pagination']);
        }
        if (isset($map['List'])) {
            if (!empty($map['List'])) {
                $model->list = [];
                $n           = 0;
                foreach ($map['List'] as $item) {
                    $model->list[$n++] = null !== $item ? list_::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
