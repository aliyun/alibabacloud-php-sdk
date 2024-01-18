<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeDetailListOfBuyerResponseBody;

use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeDetailListOfBuyerResponseBody\data\list_;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeDetailListOfBuyerResponseBody\data\pagination;
use AlibabaCloud\Tea\Model;

class data extends Model
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
        'list'       => 'list',
        'pagination' => 'pagination',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->list) {
            $res['list'] = [];
            if (null !== $this->list && \is_array($this->list)) {
                $n = 0;
                foreach ($this->list as $item) {
                    $res['list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pagination) {
            $res['pagination'] = null !== $this->pagination ? $this->pagination->toMap() : null;
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
        if (isset($map['list'])) {
            if (!empty($map['list'])) {
                $model->list = [];
                $n           = 0;
                foreach ($map['list'] as $item) {
                    $model->list[$n++] = null !== $item ? list_::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['pagination'])) {
            $model->pagination = pagination::fromMap($map['pagination']);
        }

        return $model;
    }
}
